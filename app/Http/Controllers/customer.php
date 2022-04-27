<?php

namespace App\Http\Controllers;

use \Crypt;
use Illuminate\Http\Request;
use App\Models\customers;
use  Illuminate\Support\Facades\DB;
use App\Models\cars;
use App\Models\drive;
use App\Models\carrental;
use Illuminate\Support\Facades\Redirect;

class customer extends Controller
{
    public function customerlogin()
    {
        return view("clogin");
    }

    public function customersignup()
    {
        return view("cregister");
    }


    public function addcustomer(Request $req)
    {
        $req->validate([
            'customer_username' => 'required|regex:/^[a-z A-Z0-9]+$/u|unique:customers,customer_username',
            'customer_name' => 'required|regex:/^[a-z A-Z]+$/u',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|regex:/^[0-9]+$/u',
            'customer_address' => 'required|regex:/^[a-z A-Z]+$/u',
            'customer_password' => 'required|regex:/^[a-zA-Z0-9]+$/u|min:4|max:8',
        ]);
        $eregister = new customers();

        $eregister->customer_username = $req->customer_username;
        $eregister->customer_name = $req->customer_name;
        $eregister->customer_phone = $req->customer_phone;
        $eregister->customer_email = $req->customer_email;
        $eregister->customer_address = $req->customer_address;
        $eregister->customer_password = crypt::encrypt($req->customer_password);

        $eregister->save();

        return view("clogin");
    }   

    public function clogin(Request $req)
    {
        $req->validate([
            'customer_username' => 'required|regex:/^[a-z A-Z0-9]+$/u',
            'customer_password' => 'required|regex:/^[a-zA-Z0-9]+$/u|min:4|max:8',

        ]);
        $result = DB::table('customers')
            ->where('customer_username', $req->customer_username)
            ->get();

        $res = json_decode($result, true);

        if (sizeof($res) == 0) {
            $req->session()->flash('error', 'Username does not exist. Please register yourself first');
            echo "Username Does not Exist.";
            return redirect('login');
        } else {
            date_default_timezone_set('Asia/Kolkata');
            $time = date('h:i:s');
            $date = date('d-m-yy');
            DB::table('customerlogin')
                ->insert(
                    [
                        "username" => "$req->customer_username",
                        "time" => "$time",
                        "date" => "$date"
                    ]
                );

            $encrypted_password = $result[0]->customer_password;
            $decrypted_password = crypt::decrypt($encrypted_password);
            if ($decrypted_password == $req->customer_password) {



                $req->session()->put('customer', $result[0]->customer_username);



                return redirect('welcome');
            } else {
                $req->session()->flash('error', 'Password Incorrect!!!');
                echo "Username Does not Exist.";
                return view('clogin');
            }
        }
    }

    public function showcar()
    {

        if (!session()->get("customer")) {
            return redirect("/");
        }
        $data = DB::table('cars')->where("car_availability", "yes")->get();
        return view("welcome", compact("data"));
    }


    public function rentcar($id)
    {
        if (!session()->get("customer")) {
            return redirect("/");
        }
       
        $data = cars::find($id);

        $print = DB::table('drivers')->where("driver_availability", "yes")->get();


        return view("booking", compact("data", "print"));
    }


    public function bookingconfirm(Request $req)
    {
        if (!session()->get("customer")) {
            return redirect("/");
        }


        $data = cars::find($req->carid);

        if ($req->radio == "ac") {
            if ($req->radio1 == "km") {
                $prints = $data["ac_price"];
            } elseif ($req->radio1 == "days") {
                $prints = $data["ac_price_per_day"];
            }
        } elseif ($req->radio == "non_ac") {
            if ($req->radio1 == "km") {
                $prints = $data["non_ac_price"];
            } elseif ($req->radio1 == "days") {
                $prints = $data["non_ac_price_per_day"];
            }
        }

        $length = 10;
        $number = '1234567890';
        $numberLength = strlen($number);
        $randomNumber = '';
        for ($i = 0; $i < $length; $i++) {
            $randomNumber .= $number[rand(0, $numberLength - 1)];
        }

        $number = $randomNumber;


        $data = cars::find($req->carid);

        $tdate = date("y-m-d");

        $sdate = $req->rent_start_date;

        $rdate = $req->rent_end_date;


        $print = drive::where("driver_availability", "yes")->find($req->driver_id_from_dropdown);

        $carrent = new carrental();

        $carrent->id = $number;
        $carrent->customer_username = session()->get("customer");
        $carrent->car_id = $data["car_id"];
        $carrent->driver_id = $print["driver_id"];
        $carrent->car_name = $data["car_name"];
        $carrent->booking_date = $tdate;
        $carrent->start_date = $sdate;
        $carrent->end_date = $rdate;
        $carrent->fare = $prints;
        $carrent->charge_type = $req->radio1;
        $carrent->driver_name = $print["driver_name"];
        $carrent->driver_gender = $print["driver_gender"];
        $carrent->driver_dl_number = $print["dl_number"];
        $carrent->driver_contact_number = $print["driver_phone"];
        $carrent->employee_name = $print["client_username"];
        $carrent->return_status = "NR";
        $carrent->save();


        $abc = drive::find($req->driver_id_from_dropdown);
        $abc->driver_availability = "no";
        $abc->save();

        $abb = cars::find($data["car_id"]);
        $abb->car_availability = "no";
        $abb->save();


        return redirect("confirms")->with([
            "number" => $number, "cname" => $data["car_name"], "cnameplate" => $data["car_nameplate"],
            "bdate" => $tdate, "sdate" => $sdate, "rdate" => $rdate, "dname" => $print["driver_name"],
            "dgender" => $print["driver_gender"], "dlnumber" => $print["dl_number"],
            "dphone" => $print["driver_phone"], "ename" => $print["client_username"]
        ]);
    }


    public function mybooking()
    {
        if (!session()->get("customer")) {
            return redirect("/");
        }
        $data = DB::table('rentcar')->where("customer_username", session()->get("customer"))->get();
        return view("mybooking", ["data" => $data]);
    }

    public function returncar()
    {
        if (!session()->get("customer")) {
            return redirect("/");
        }
        $data = DB::table('rentcar')->where("customer_username", session()->get("customer"))->where("return_status", "NR")->get();
        return view("returncar", ["data" => $data]);
    }

    public function printcar($id)
    {
        if (!session()->get("customer")) {
            return redirect("/");
        }
        $data = DB::table('rentcar')->where("id", $id)->first();

        $data1 = DB::table('cars')->where("car_id", $data->car_id)->first();

        $data2 = DB::table('drivers')->where("driver_id", $data->driver_id)->first();

        $start_ts = strtotime($data->start_date);
        $end_ts = strtotime($data->end_date);
        $diff = $end_ts - $start_ts;
        $date = round($diff / 86400);

        $datas = carrental::find($id);
        $datas->no_of_days = $date;
        $datas->save();
        return view("/printcar", ["data" => $data, "data1" => $data1, "data2" => $data2, "date" => $date]);
    }

    public function paybill(request $req)
    {

        if (!session()->get("customer")) {
            return redirect("/");
        }
        $data = carrental::find($req->id);

        if ($data["charge_type"] == "km") {
            $total = $data["fare"] * $req->distance_or_days;
            $data->distance = $req->distance_or_days;
        } elseif ($data["charge_type"] == "days") {
            $total = $data["fare"] * $data["no_of_days"];
        }


        $creturn = date("y-m-d");

        $data->car_return_date = $creturn;
        $data->total_amount = $total;
        $data->return_status = "R";
        $data->save();

        $bcd1 = drive::find($data["driver_id"]);
        $bcd1->driver_availability = "yes";
        $bcd1->save();


        $bcd = cars::find($data["car_id"]);
        $bcd->car_availability = "yes";
        $bcd->save();

        $data1 = DB::table('cars')->where("car_id", $data->car_id)->first();
        return view("printbill", compact("data"), ["data1" => $data1]);
    }

    public function clientview()
    {
        $data = carrental::all();

        return view("clientview", compact("data"));
    }
}

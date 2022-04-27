<?php

namespace App\Http\Controllers;

use App\Models\clientregister;
use Illuminate\Http\Request;
use \Crypt;
use  Illuminate\Support\Facades\DB;

class employee extends Controller
{
    public function clientlogin()
    {
        
       
        return view("elogin");
    }

    public function clientsignup()
    {
        
        
        return view("eregister");
        
    }


    public function clientregister(Request $req)
    {
        
        $req->validate([
            'client_username' => 'required|regex:/^[a-z A-Z0-9]+$/u|unique:clients,client_username',
            'client_name' => 'required|regex:/^[a-z A-Z]+$/u',
            'client_email' => 'required|email',
            'client_phone' => 'required|regex:/^[0-9]+$/u',
            'client_address' => 'required|regex:/^[a-z A-Z]+$/u',
            'client_password' => 'required|regex:/^[a-zA-Z0-9]+$/u|min:4|max:8',
           
        ]);
      

        $eregister = new clientregister();

        $eregister->client_username = $req->client_username;
        $eregister->client_name = $req->client_name;
        $eregister->client_phone = $req->client_phone;
        $eregister->client_email = $req->client_email;
        $eregister->client_address = $req->client_address;
        $eregister->client_password = crypt::encrypt($req->client_password);

        $eregister->save();

        return redirect("clientlogin");
    }

    public function clientlogins(request $req)
    {
        $req->validate([
            'client_username' => 'required|regex:/^[a-z A-Z0-9]+$/u',
            'client_password' => 'required|regex:/^[a-zA-Z0-9]+$/u|min:4|max:8',
           
        ]);
        
       
        $result = DB::table('clients')
            ->where('client_username', $req->client_username)
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
            DB::table('clientlogin')
                ->insert(
                    [
                        "username" => "$req->client_username",
                        "time" => "$time",
                        "date" => "$date"
                    ]
                );

            $encrypted_password = $result[0]->client_password;
            $decrypted_password = crypt::decrypt($encrypted_password);
            if ($decrypted_password == $req->client_password) {

               
                    echo "You are logged in Successfully";
                    $req->session()->put('user', $result[0]->client_username);

        

                    return redirect('dashboard');
               
            } else {
                $req->session()->flash('error', 'Password Incorrect!!!');
                echo "Username Does not Exist.";
                return view('elogin');
            }
        }
    
            
    }
}

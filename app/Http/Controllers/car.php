<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cars;
use  Illuminate\Support\Facades\DB;

class car extends Controller
{
    public function addcar(){

        return view("addcar");
    }

    public function addcars(request $req){

        $req->validate([
            'car_name' => 'required|regex:/^[a-z A-Z 0-9]+$/u',
            'car_nameplate' => 'required|regex:/^[a-z A-Z 0-9]+$/u',
            'ac_price' => 'required|regex:/^[0-9]+$/u',
            'non_ac_price' => 'required|regex:/^[0-9]+$/u',
            'ac_price_per_day' => 'required|regex:/^[0-9]+$/u',
            'ac_price_per_day' => 'required|regex:/^[0-9]+$/u',
            'car_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if(!session()->get("user"))
        {
            return redirect("/");
        }

       $file = $req->file('car_img');


        if($file == "")
        {
            $car=new cars();

            $car->car_name=$req->car_name;
            $car->car_nameplate=$req->car_nameplate;
            $car->ac_price=$req->ac_price;
            $car->non_ac_price=$req->non_ac_price;
            $car->ac_price_per_day=$req->ac_price_per_day;
            $car->non_ac_price_per_day=$req->non_ac_price_per_day;
            $car->car_availability="yes";
            $car->save();
            return redirect("addcar");
        }

        else
        {
            $file = $req->file('car_img');

            $images = $file->getClientOriginalName();
            $destinationPath = 'image';
            $file->move($destinationPath, $file->getClientOriginalName());

            $car=new cars();

            $car->car_name=$req->car_name;
            $car->car_nameplate=$req->car_nameplate;
            $car->car_img=$images;
            $car->ac_price=$req->ac_price;
            $car->non_ac_price=$req->non_ac_price;
            $car->ac_price_per_day=$req->ac_price_per_day;
            $car->non_ac_price_per_day=$req->non_ac_price_per_day;
            $car->car_availability="yes";
            $car->save();
            return redirect("addcar");
        }
         
          

        
    }


    public function cardisplay(){
        if(!session()->get("user"))
        {
            return redirect("/");
        }
        $data=cars::all();
       return view("addcar",compact("data"));
    }

    public function showrecord()
    {
        $data= DB::table('cars')->where("car_availability","yes")->get();
        return view("dashboard",compact("data"));
    }
    public function print()
    {
        $data= DB::table('cars')->where("car_availability","yes")->get();
     
        return view("index",compact("data"));
    }

    
}

<?php

namespace App\Http\Controllers;
use App\Models\drive;
use Illuminate\Http\Request;
use PDO;

class driver extends Controller
{
    public function enterdriver()
    {
        return view("enterdriver");
    }

    public function adddrive(request $req)
    {
        
        
        $req->validate([
            'driver_name' => 'required|regex:/^[a-z A-Z 0-9]+$/u',
            'dl_number' => 'required|regex:/^[a-z A-Z 0-9]+$/u',
            'driver_phone' => 'required|regex:/^[0-9]+$/u',
            'driver_address' => 'required|regex:/^[a-z A-Z 0-9]+$/u',
            'driver_gender' => 'required|regex:/^[a-z A-Z 0-9]+$/u',
        
        ]);
        if(!session()->get("user"))
        {
            return redirect("/");
        }
        
        $drive=new drive();

        $drive->driver_name=$req->driver_name;
        $drive->dl_number=$req->dl_number;

        $drive->driver_phone=$req->driver_phone;
        $drive->driver_address=$req->driver_address;
        $drive->driver_gender=$req->driver_gender;
        $drive->client_username=$req->session()->get("user");
        $drive->driver_availability="yes";
        $drive->save();

        return redirect("enterdriver");
    }
    public function driverdisplay()
    {
        $data=drive::all();
        return view("enterdriver",compact("data"));
    }
}

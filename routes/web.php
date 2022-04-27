<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employee;
use App\Http\Controllers\car;
use App\Http\Controllers\driver;
use App\Http\Controllers\customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get("/",[car::class,"print"]);


Route::get("clientlogin",[employee::class,"clientlogin"]);

Route::get("clientsignup",[employee::class,"clientsignup"]);


Route::post("clientregister",[employee::class,"clientregister"]);


Route::post("clientlogins",[employee::class,"clientlogins"]);


Route::get("dashboard",function(){
    if(!session()->get("user"))
    {
        return redirect("/");
    }
    else
    {
        return view("/dashboard");
    }
});
Route::get("dashboard",[car::class,"showrecord"]);

Route::get("addcar",[car::class,"addcar"]);

Route::post("entercardetail",[car::class,"addcars"]);

Route::view("addcar","addcar");


Route::get("addcar",[car::class,"cardisplay"]);

Route::get("enterdriver",[driver::class,"enterdriver"]);

Route::post("enterdriver",[driver::class,"adddrive"]);

Route::get("enterdriver",[driver::class,"driverdisplay"]);

Route::get("/logout",function(){
    if(session()->has('user') )
    {
        session()->pull('user');
    
    }
    return redirect('/');
});

Route::get("/log",function(){
    if(session()->has('customer') )
    {
        session()->pull('customer');
    
    }
    return redirect('/');
});

Route::get("customerlogin",[customer::class,"customerlogin"]);

Route::get("customersignup",[customer::class,"customersignup"]);

Route::post("addcustomer",[customer::class,"addcustomer"]);

Route::post("clogin",[customer::class,"clogin"]);

Route::get("welcome",function(){
    if(!session()->get("customer"))
    {
        return redirect("/");
    }
    else
    {
        return view("/welcome");
    }
});


Route::get("welcome",[customer::class,"showcar"]);


Route::get("/booking/{id}",[customer::class,"rentcar"]);

Route::view("/booking","booking");


Route::post("/confirm",[customer::class,"bookingconfirm"]);

Route::view("/confirms","confirm");

Route::get("mybookings",[customer::class,"mybooking"]);

Route::get("returncar",[customer::class,"returncar"]);


Route::get("/printcar/{id}",[customer::class,"printcar"]);


Route::post("/paybill",[customer::class,"paybill"]);



Route::get("clientview",[customer::class,"clientview"]);
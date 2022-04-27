<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class clientrecord extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'client_username'=>"harsh",
            'client_name'=>"harsh",
            'client_phone'=>"9510151548",
            'client_email'=>"harshmvaghela99@gmail.com ",
            'client_address'=>"bhavnagar",
            'client_password'=>"harsh123",
        ]);
    }
}

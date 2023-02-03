<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorPersonnelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('vendor_personnel')->insert([
            'vendor_id'=>7,
            'first_name'=>'Kajol',
            'last_name'=>'Bendale',
            'gender'=>'Female',
            'mobile'=>'12345677',
            'email'=>'kajolbendale@gmail.com',
            'is_active'=>'1'
        ]);
        \DB::table('vendor_personnel')->insert([
            'vendor_id'=>7,
            'first_name'=>'Sai',
            'last_name'=>'Giri',
            'gender'=>'Male',
            'mobile'=>'12345677',
            'email'=>'saigiri@gmail.com',
            'is_active'=>'1'
        ]);
        \DB::table('vendor_personnel')->insert([
            'vendor_id'=>8,
            'first_name'=>'Sakshi',
            'last_name'=>'Gore',
            'gender'=>'Female',
            'mobile'=>'12345677',
            'email'=>'sakshigore@gmail.com',
            'is_active'=>'1'
        ]);
        \DB::table('vendor_personnel')->insert([
            'vendor_id'=>9,
            'first_name'=>'Seema',
            'last_name'=>'Zore',
            'gender'=>'Female',
            'mobile'=>'12345677',
            'email'=>'seemazoree@gmail.com',
            'is_active'=>'1'
        ]);
        \DB::table('vendor_personnel')->insert([
            'vendor_id'=>10,
            'first_name'=>'Shreya',
            'last_name'=>'Jangam',
            'gender'=>'Female',
            'mobile'=>'12345677',
            'email'=>'shreyajangam@gmail.com',
            'is_active'=>'0'
        ]);
    }
}

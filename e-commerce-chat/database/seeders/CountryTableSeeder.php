<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('country')->insert([
            'country_name'=>'INDIA',
            'iso_code'=>'IND'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'Afghanistan',
            'iso_code'=>'AFG'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'INDIA',
            'iso_code'=>'IND'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'Algeria',
            'iso_code'=>'DZA'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'INDIA',
            'iso_code'=>'IND'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'INDIA',
            'iso_code'=>'IND'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'Algeria',
            'iso_code'=>'DZA'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'INDIA',
            'iso_code'=>'IND'
        ]);
        \DB::table('country')->insert([
            'country_name'=>'INDIA',
            'iso_code'=>'IND'
        ]);
        

    }
}

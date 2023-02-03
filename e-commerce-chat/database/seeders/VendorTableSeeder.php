<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('vendor')->insert([
            'entity_name'=>'John Construction',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-12-09'
        ]);

        \DB::table('vendor')->insert([
            'entity_name'=>'bob Construction',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-11-09'
        ]);

        \DB::table('vendor')->insert([
            'entity_name'=>'mark Construction',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-10-09'
        ]);

        \DB::table('vendor')->insert([
            'entity_name'=>'John Architect',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-12-09'
        ]);

        \DB::table('vendor')->insert([
            'entity_name'=>'John Architect',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-11-09'
        ]);

        \DB::table('vendor')->insert([
            'entity_name'=>'John Construction',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-1-09'
        ]);

        \DB::table('vendor')->insert([
            'entity_name'=>'Mark Construction',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-2-09'
        ]);

        \DB::table('vendor')->insert([
            'entity_name'=>'Sai Architect',
            'entity_type'=>'PVT LTD',
            'onboarded_date'=>'2022-12-09'
        ]);
    }
}

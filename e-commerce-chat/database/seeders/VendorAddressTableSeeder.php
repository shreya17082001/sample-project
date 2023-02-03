<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'7',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'8',
            'postal_code'=>'383786'
        ]);
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'7',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'5',
            'postal_code'=>'789367'
        ]);
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'7',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'9',
            'postal_code'=>'443443'
        ]);
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'7',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'5',
            'postal_code'=>'489644'
        ]);
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'15',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'10',
            'postal_code'=>'789654'
        ]);
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'11',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'9',
            'postal_code'=>'890764'
        ]);
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'16',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'5',
            'postal_code'=>'234567'
        ]);
        \DB::table('vendor_address')->insert([
            'vendor_id'=>'10',
            'address_line_1'=>'J3PF+RPH, North Star Plaza, Murree Rd, Block B, Satellite Town, Block B Satellite Town, Rawalpindi, Punjab 46000, India',
            'address_line_2'=>'3, Gaurav Path, Shatabdi Nagar, Telibandha, Raipur, Chhattisgarh 492001',
            'city'=>'Rawalpindi',
            'state'=>'Punjab',
            'country_id'=>'7',
            'postal_code'=>'834673'
        ]);
    }
}

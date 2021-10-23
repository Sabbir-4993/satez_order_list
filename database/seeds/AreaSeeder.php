<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'area_name' => 'Adabor',
            ],[
                'area_name' => 'Airport',
            ],[
                'area_name' => 'Badda',
            ],[
                'area_name' => 'Banani',
            ],[
                'area_name' => 'Bangshal',
            ],[
                'area_name' => 'Bhashantek',
            ],[
                'area_name' => 'Cantonment',
            ],[
                'area_name' => 'Chackbazar',
            ],[
                'area_name' => 'Dakshin Khan',
            ],[
                'area_name' => 'Darus-Salam',
            ],[
                'area_name' => 'Demra',
            ],[
                'area_name' => 'Dhanmondi',
            ],[
                'area_name' => 'Gandaria',
            ],[
                'area_name' => 'Gulshan',
            ],[
                'area_name' => 'Hatirjheel',
            ],[
                'area_name' => 'Hazaribag',
            ],[
                'area_name' => 'Jattrabari',
            ],[
                'area_name' => 'Kadamtoli',
            ],[
                'area_name' => 'Kafrul',
            ],[
                'area_name' => 'Kalabagan',
            ],[
                'area_name' => 'Kamrangirchar',
            ],[
                'area_name' => 'Khilgaon',
            ],[
                'area_name' => 'Khilkhet',
            ],[
                'area_name' => 'Kotwali',
            ],[
                'area_name' => 'Lalbagh',
            ],[
                'area_name' => 'Mirpur Model',
            ],[
                'area_name' => 'Mohammadpur',
            ],[
                'area_name' => 'Motijheel',
            ],[
                'area_name' => 'Mugda',
            ],[
                'area_name' => 'New Market',
            ],[
                'area_name' => 'Pallabi',
            ],[
                'area_name' => 'Paltan Model',
            ],[
                'area_name' => 'Ramna Model',
            ],[
                'area_name' => 'Rampura',
            ],[
                'area_name' => 'Rupnagar',
            ],[
                'area_name' => 'Sabujbag',
            ],[
                'area_name' => 'Shah Ali',
            ],[
                'area_name' => 'Shahbag',
            ],[
                'area_name' => 'Shahjahanpur',
            ],[
                'area_name' => 'Sher e Bangla Nagar',
            ],[
                'area_name' => 'Shyampur',
            ],[
                'area_name' => 'Sutrapur',
            ],[
                'area_name' => 'Tejgaon',
            ],[
                'area_name' => 'Tejgaon Industrial',
            ],[
                'area_name' => 'Turag',
            ],[
                'area_name' => 'Uttar Khan',
            ],[
                'area_name' => 'Uttara East',
            ],[
                'area_name' => 'Uttara West',
            ],[
                'area_name' => 'Vatara',
            ],[
                'area_name' => 'Wari',
            ],
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['name' => 'USA'],
        	['name' => 'VN'],
        	['name' => 'JP'],
        ];
        Country::insert($data);
    }
}

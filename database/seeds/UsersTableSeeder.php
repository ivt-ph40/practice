<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //C1
        $data =[
        	['username' => 'user1',
        	 'email' => 'user1@gmail.com',
        	 'password' => '1234445',
        	 'address' => '92 QT'
        	],
        	
        ];
        User::insert($data);

        //C2
        factory(App\User::class, 100)->create();
    }
}

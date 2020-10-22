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
        // $data =[
        // 	['username' => 'user1',
        // 	 'email' => 'user1@gmail.com',
        // 	 'password' => '1234445',
        // 	 'address' => '92 QT'
        // 	],
        // 	['username' => 'user2',
        // 	 'email' => 'user2@gmail.com',
        // 	 'password' => '1234445',
        // 	 'address' => '90 QT'
        // 	],
        // 	['username' => 'user3',
        // 	 'email' => 'user3@gmail.com',
        // 	 'password' => '1234445',
        // 	 'address' => '19 QT'
        // 	],
        // ];
        // User::insert($data);
        factory(App\User::class, 100)->create();
    }
}

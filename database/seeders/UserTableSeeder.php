<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{



    public function run(): void
    {
        DB::table('users')->insert([
            // admin:
            [
                'name'=> 'Admin',
                'username'=> 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1221'),
                'role'=> 'admin',
                'status'=>'active',
            ],
            // user:

            [
                'name'=> 'User',
                'username'=> 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('1227'),
                'role'=> 'user',
                'status'=>'active',
            ],

        ]);
    }
}

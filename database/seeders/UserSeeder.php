<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'is_admin'=>'1',
            'password'=> bcrypt('admin123'),
        ]);

        DB::table("users")->insert([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'is_admin'=>'0',
            'password'=> bcrypt('user1234'),
        ]);
    }
}

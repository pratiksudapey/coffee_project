<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("coffees")->insert([
            'name' => 'Black Coffee',
            'quantity' => '2',
            'description' => 'black coffee with 1 spoon sugar',
        ]);
    }
}

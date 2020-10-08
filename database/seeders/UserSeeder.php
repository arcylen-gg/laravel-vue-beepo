<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('users')->insert([
            'name' => 'Demo Account Seed',
            'email' => 'demo@demo.com.au',
            'password' => Hash::make('hello2020'),
        ]);
    }
}

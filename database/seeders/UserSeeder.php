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
        //

        DB::table('users')->insertOrIgnore([

            [
                'name' => 'Admin',
                'usercode' => 'ADMIN001',
                'role' => 'admin',
                'email' => 'admin@prestigekitchen.com',
                'password' => Hash::make('prestige2023&&'),
            ],


            [
                'name' => 'Charles Kynch',
                'usercode' => 'PRES001',
                'role' => 'customer',
                'email' => 'charles@prestigekitchen.com',
                'password' => Hash::make('charles2023&&'),
            ],

            [
                'name' => 'Grace ',
                'usercode' => 'PRES002',
                'role' => 'vendor',
                'email' => 'grace@prestigekitchen.com',
                'password' => Hash::make('grace2023&&'),
            ],


        ]);






    }
}

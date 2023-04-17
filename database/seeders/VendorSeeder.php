<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insertOrIgnore([

            [
                'user_id' => 1,
                'business_name' => 'Prestige Noodles',
                'description' => 'The best of indomie noodles, garnished with eggs, vegetables and salads',
                'address' => 'Saburi 2, Dei dei, FCT Abuja',
                'business_logo' => 'prestige_noodles.png',
            ],

           
        ]);
    }
}

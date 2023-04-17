<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menu_items')->insertOrIgnore([

            [
                'vendor_id' => 1,
                'name' => 'Indomie Noodles',
                'description' => 'Indomie noodles with salads, eggs etc',
                'base_price' => 1000,
                'image_link' => 'indomie.png',
            ],


        ]);
    }
}

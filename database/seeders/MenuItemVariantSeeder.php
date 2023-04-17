<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('menu_item_variants')->insertOrIgnore([

            [
                'menu_item_id' => 1,
                'name' => 'with egg',
                'addon_price' => 100,
            ],

            [
                'menu_item_id' => 1,
                'name' => 'with salad',
                'addon_price' => 100,
            ],

            [
                'menu_item_id' => 1,
                'name' => 'with fried chicken',
                'addon_price' => 1000,
            ],


        ]);




    }
}

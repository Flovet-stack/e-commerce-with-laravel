<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
            'name' => 'fucuda flat screen',
            'price' => '400',
            'description' => 'A smart new generation tv from fucuda tech with internal storage',
            'category' => 'TV',
            'gallery' => 'https://www.pngfind.com/pngs/m/287-2872936_directv-sports-packages-keep-you-in-the-game.png',
            ]
    );
    }
}

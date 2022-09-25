<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => '短毛種シャンプー',
                'memo' => '',
                'price' => 5500
            ],

            [
                'name' => '長毛種シャンプー',
                'memo' => '',
                'price' => 7700
            ],
            [
                'name' => '短毛種カット(シャンプー込み)',
                'memo' => '',
                'price' => 8800
            ],
            [
                'name' => '長毛種カット(シャンプー込み)',
                'memo' => '',
                'price' => 11000
            ],
            [
                'name' => '長毛種プレミアムコース',
                'memo' => '',
                'price' => 18000
            ]
        ]);
    }
}

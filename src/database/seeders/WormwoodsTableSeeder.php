<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WormwoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wormwoods')->insert([
            [
                'name' => '1回コース',
                'wormwood_genre_id' => 1, // よもぎ蒸し
                'wormwood_part_id' => null,
                'pliceA' => 2750,
                'pliceB' => null
            ],
            [
                'name' => '3回コース',
                'wormwood_genre_id' => 1, // よもぎ蒸し
                'wormwood_part_id' => null,
                'pliceA' => 7700,
                'pliceB' => null
            ],
            [
                'name' => '5回コース',
                'wormwood_genre_id' => 1, // よもぎ蒸し
                'wormwood_part_id' => null,
                'pliceA' => 12100,
                'pliceB' => null
            ],
            [
                'name' => 'オプション',
                'wormwood_genre_id' => 1, // よもぎ蒸し
                'wormwood_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
        ]);
    }
}

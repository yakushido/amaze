<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WormwoodAsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wormwood_a_s')->insert([
            [
                'id' => 1,
                'wormwood_genre_id' => 1,
                'name' => '1回コース',
                'plice' => 2750
            ],
            [
                'id' => 2,
                'wormwood_genre_id' => 1,
                'name' => '3回コース',
                'plice' => 7700
            ],
            [
                'id' => 3,
                'wormwood_genre_id' => 1,
                'name' => '5回コース',
                'plice' => 12100
            ],
            [
                'id' => 4,
                'wormwood_genre_id' => 1,
                'name' => 'オプション',
                'plice' => 550
            ],
            
        ]);
    }
}

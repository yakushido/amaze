<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NailCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nail_c_s')->insert([
            [
                'id' => 1,
                'nail_genre_id' => 3,
                'name' => '付け替えオフ',
                'plice_A' => 110,
                'plice_B' => 165
            ],
            [
                'id' => 2,
                'nail_genre_id' => 3,
                'name' => 'オフのみ',
                'plice_A' => 2750,
                'plice_B' => null
            ],
            [
                'id' => 3,
                'nail_genre_id' => 3,
                'name' => 'アート',
                'plice_A' => 110,
                'plice_B' => null
            ],
            [
                'id' => 4,
                'nail_genre_id' => 3,
                'name' => 'キャラクターアート',
                'plice_A' => 550,
                'plice_B' => null
            ],
            [
                'id' => 5,
                'nail_genre_id' => 3,
                'name' => '痛ネイルアート',
                'plice_A' => 1100,
                'plice_B' => null
            ],
            [
                'id' => 6,
                'nail_genre_id' => 3,
                'name' => 'ビジュー（ストーン・パーツアート）',
                'plice_A' => 110,
                'plice_B' => 220
            ], 
            [
                'id' => 7,
                'nail_genre_id' => 3,
                'name' => '3Dストーン',
                'plice_A' => 550,
                'plice_B' => null
            ], 
            [
                'id' => 8,
                'nail_genre_id' => 3,
                'name' => '長さ出し',
                'plice_A' => 550,
                'plice_B' => null
            ], 
            [
                'id' => 9,
                'nail_genre_id' => 3,
                'name' => '補強',
                'plice_A' => 330,
                'plice_B' => null
            ], 
            [
                'id' => 10,
                'nail_genre_id' => 3,
                'name' => '3D',
                'plice_A' => 330,
                'plice_B' => 1100
            ], 
            [
                'id' => 11,
                'nail_genre_id' => 3,
                'name' => 'キャラクター3D',
                'plice_A' => 1100,
                'plice_B' => null
            ], 
            [
                'id' => 12,
                'nail_genre_id' => 3,
                'name' => '角質ケア',
                'plice_A' => 550,
                'plice_B' => null
            ], 
            [
                'id' => 13,
                'nail_genre_id' => 3,
                'name' => '保湿パック',
                'plice_A' => 1100,
                'plice_B' => null
            ], 
            
        ]);
    }
}

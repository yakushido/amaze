<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridals')->insert([
            [
                'name' => null,
                'bridal_genre_id' => 1, // カスタムメニュー
                'bridal_part_id' => null,
                'pliceA' => 55000,
                'pliceB' => null
            ],
            [
                'name' => null,
                'bridal_genre_id' => 1, // カスタムメニュー
                'bridal_part_id' => null,
                'pliceA' => 110000,
                'pliceB' => null
            ],
            [
                'name' => null,
                'bridal_genre_id' => 1, // カスタムメニュー
                'bridal_part_id' => null,
                'pliceA' => 165000,
                'pliceB' => null
            ],

            [
                'name' => null,
                'bridal_genre_id' => 2, // 1day
                'bridal_part_id' => null,
                'pliceA' => 16500,
                'pliceB' => null
            ],
            
            [
                'name' => null,
                'bridal_genre_id' => 3, // マタニティプラン(16週目から)
                'bridal_part_id' => null,
                'pliceA' => 33000,
                'pliceB' => null
            ],
            [
                'name' => null,
                'bridal_genre_id' => 3, // マタニティプラン(16週目から)
                'bridal_part_id' => null,
                'pliceA' => 55000,
                'pliceB' => null
            ],
            
            [
                'name' => 'シェービングFACE',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 1,
                'pliceA' => 2200,
                'pliceB' => null
            ],
            [
                'name' => 'シェービングBODY',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 2,
                'pliceA' => 3300,
                'pliceB' => null
            ],
            [
                'name' => 'ピーリングBODY【 S 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 3,
                'pliceA' => 1100,
                'pliceB' => null
            ],
            [
                'name' => 'ピーリングBODY【 M 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 4,
                'pliceA' => 1650,
                'pliceB' => null
            ],
            [
                'name' => 'ピーリングBODY【 L 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 5,
                'pliceA' => 2200,
                'pliceB' => null
            ],
            [
                'name' => '美白パック【 S 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 6,
                'pliceA' => 1100,
                'pliceB' => null
            ],
            [
                'name' => '美白パック【 M 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 7,
                'pliceA' => 1650,
                'pliceB' => null
            ],
            [
                'name' => '美白パック【 L 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 8,
                'pliceA' => 2750,
                'pliceB' => null
            ],
            [
                'name' => '美肌パック【 S 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 6,
                'pliceA' => 1100,
                'pliceB' => null
            ],
            [
                'name' => '美肌パック【 M 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 7,
                'pliceA' => 1650,
                'pliceB' => null
            ],
            [
                'name' => '美肌パック【 L 】',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 8,
                'pliceA' => 2750,
                'pliceB' => null
            ],
            [
                'name' => '泡エステBODY',
                'bridal_genre_id' => 4, // 単品メニュー
                'bridal_part_id' => 9,
                'pliceA' => 2200,
                'pliceB' => null
            ],
        ]);

    }
}

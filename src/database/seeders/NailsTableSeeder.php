<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nails')->insert([
            [
                'name' => '美爪ジェルネイル',
                'nail_genre_id' => 1, // ジェルネイル
                'nail_part_id' => null,
                'pliceA' => 5930,
                'pliceB' => null
            ],
            [
                'name' => 'フットジェルネイル',
                'nail_genre_id' => 1, // ジェルネイル
                'nail_part_id' => null,
                'pliceA' => 6050,
                'pliceB' => null
            ],
            [
                'name' => 'クリアジェルネイル',
                'nail_genre_id' => 1, // ジェルネイル
                'nail_part_id' => null,
                'pliceA' => 3630,
                'pliceB' => null
            ],
            [
                'name' => 'ワンカラー・グラデーションのみ',
                'nail_genre_id' => 1, // ジェルネイル
                'nail_part_id' => null,
                'pliceA' => 5170,
                'pliceB' => null
            ],
            [
                'name' => '1day~7dayジェルネイル',
                'nail_genre_id' => 1, // ジェルネイル
                'nail_part_id' => null,
                'pliceA' => 5500,
                'pliceB' => null
            ],

            [
                'name' => 'スカルプチュア',
                'nail_genre_id' => 2, // スカルプチュア
                'nail_part_id' => null,
                'pliceA' => 11330,
                'pliceB' => null
            ],
            
            [
                'name' => '付け替えオフ',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 110,
                'pliceB' => 165
            ],
            [
                'name' => 'オフのみ',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 2750,
                'pliceB' => null
            ],
            [
                'name' => 'アート',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 110,
                'pliceB' => null
            ],
            [
                'name' => 'キャラクターアート',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
            [
                'name' => '痛ネイルアート',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 1100,
                'pliceB' => null
            ],
            [
                'name' => 'ビジュー（ストーン・パーツアート）',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 110,
                'pliceB' => 220
            ],
            [
                'name' => '3Dストーン',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
            [
                'name' => '長さ出し',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
            [
                'name' => '補強',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 330,
                'pliceB' => null
            ],
            [
                'name' => '3D',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 330,
                'pliceB' => 1100
            ],
            [
                'name' => 'キャラクター3D',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 1100,
                'pliceB' => null
            ],
            [
                'name' => '角質ケア',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
            [
                'name' => '保湿パック',
                'nail_genre_id' => 3, // オフ・オプション
                'nail_part_id' => null,
                'pliceA' => 1100,
                'pliceB' => null
            ],
            
            [
                'name' => 'ハンド or フットケア',
                'nail_genre_id' => 4, // ケア
                'nail_part_id' => null,
                'pliceA' => 3080,
                'pliceB' => null
            ],
            [
                'name' => 'カットのみ',
                'nail_genre_id' => 4, // ケア
                'nail_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
            [
                'name' => '巻き爪ケア',
                'nail_genre_id' => 4, // ケア
                'nail_part_id' => null,
                'pliceA' => 2530,
                'pliceB' => null
            ],
        ]);
    }
}

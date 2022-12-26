<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            // Esthetic
            [
                'id' => 1,
                'category' => 'マッサージ',
                'picture' => 'img/esthetic_01.jpg',
                'genre_id' => 1
            ],
            [
                'id' => 2,
                'category' => 'Cavitation',
                'picture' => 'img/esthetic_01.jpg',
                'genre_id' => 1
            ],
            [
                'id' => 3,
                'category' => 'Hifu',
                'picture' => 'img/esthetic_01.jpg',
                'genre_id' => 1
            ],
            [
                'id' => 4,
                'category' => 'フェイシャルエステ',
                'picture' => 'img/esthetic_01.jpg',
                'genre_id' => 1
            ],
            // Eyelash
            [
                'id' => 5,
                'category' => 'フラットラッシュ',
                'picture' => 'img/eyelash_01.jpg',
                'genre_id' => 2
            ],
            [
                'id' => 6,
                'category' => '3Dボリューム',
                'picture' => 'img/eyelash_01.jpg',
                'genre_id' => 2
            ],
            [
                'id' => 7,
                'category' => 'オフ・オプション',
                'picture' => 'img/eyelash_01.jpg',
                'genre_id' => 2
            ],
            [
                'id' => 8,
                'category' => 'パリジェンヌフラットラッシュ',
                'picture' => 'img/eyelash_01.jpg',
                'genre_id' => 2
            ],
            // Depilation 
            [
                'id' => 9,
                'category' => '全身脱毛',
                'picture' => 'img/depilation_01.jpg',
                'genre_id' => 3
            ],
            [
                'id' => 10,
                'category' => '部分脱毛',
                'picture' => 'img/depilation_01.jpg',
                'genre_id' => 3
            ],
            [
                'id' => 11,
                'category' => 'セレクト６回コース',
                'picture' => 'img/depilation_01.jpg',
                'genre_id' => 3
            ],

            // Wormeood
            [
                'id' => 12,
                'category' => 'よもぎ蒸し',
                'picture' => 'img/wormwood_01.jpg',
                'genre_id' => 4
            ],

            // Bridal
            [
                'id' => 13,
                'category' => 'カスタムメニュー',
                'picture' => 'img/bridal_01.jpg',
                'genre_id' => 5
            ],
            [
                'id' => 14,
                'category' => '1day',
                'picture' => 'img/bridal_01.jpg',
                'genre_id' => 5
            ],
            [
                'id' => 15,
                'category' => 'マタニティプラン(16週目から)',
                'picture' => 'img/bridal_01.jpg',
                'genre_id' => 5
            ],
            [
                'id' => 16,
                'category' => '単品メニュー',
                'picture' => 'img/bridal_01.jpg',
                'genre_id' => 5
            ],

            // Nail
            [
                'id' => 17,
                'category' => 'ジェルネイル',
                'picture' => 'img/nail_01.jpg',
                'genre_id' => 6
            ],
            [
                'id' => 18,
                'category' => 'スカルプチュア',
                'picture' => 'img/nail_01.jpg',
                'genre_id' => 6
            ],
            [
                'id' => 19,
                'category' => 'オフ・オプション',
                'picture' => 'img/nail_01.jpg',
                'genre_id' => 6
            ],
            [
                'id' => 20,
                'category' => 'ケア',
                'picture' => 'img/nail_01.jpg',
                'genre_id' => 6
            ],

            // Men`s
            [
                'id' => 21,
                'category' => '全身脱毛',
                'picture' => 'img/amaze_logo2.jpeg',
                'genre_id' => 3
            ],
            [
                'id' => 22,
                'category' => '部分脱毛',
                'picture' => 'img/amaze_logo2.jpeg',
                'genre_id' => 3
            ],
            [
                'id' => 23,
                'category' => 'Select 6set',
                'picture' => 'img/amaze_logo2.jpeg',
                'genre_id' => 3
            ],
            [
                'id' => 24,
                'category' => 'FACE HEAD',
                'picture' => 'img/amaze_logo2.jpeg',
                'genre_id' => 1
            ],
            [
                'id' => 25,
                'category' => 'BODY',
                'picture' => 'img/amaze_logo2.jpeg',
                'genre_id' => 1
            ],
            [
                'id' => 26,
                'category' => 'OPTION',
                'picture' => 'img/amaze_logo2.jpeg',
                'genre_id' => 1
            ],
        ]);
    }
}

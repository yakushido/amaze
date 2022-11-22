<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstheticCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esthetic_c_s')->insert([
            [
                'id' => 1,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 5,
                'name' => '1回コース',
                'plice' => 5500
            ],
            [
                'id' => 2,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 5,
                'name' => '3回(3か月)コース',
                'plice' => 15400
            ],
            [
                'id' => 3,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 5,
                'name' => '6回(6か月)コース',
                'plice' => 30800
            ],
            [
                'id' => 4,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 5,
                'name' => '10回(10か月)コース',
                'plice' => 46500 
            ],
                // お腹　ダブル
            [
                'id' => 5,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 6,
                'name' => '1回コース',
                'plice' => 11000
            ],
            [
                'id' => 6,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 6,
                'name' => '3回(3か月)コース',
                'plice' => 31900
            ],
            [
                'id' => 7,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 6,
                'name' => '6回(6か月)コース',
                'plice' => 61800
            ],
            [
                'id' => 8,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 6,
                'name' => '10回(10か月)コース',
                'plice' => 104500 
            ],
                // 太もも　シングル
            [
                'id' => 9,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 7,
                'name' => '1回コース',
                'plice' => 5500 
            ],
            [
                'id' => 10,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 7,
                'name' => '3回(3か月)コース',
                'plice' => 15400 
            ],
            [
                'id' => 11,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 7,
                'name' => '6回(6か月)コース',
                'plice' => 30800 
            ],
            [
                'id' => 12,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 7,
                'name' => '10回(10か月)コース',
                'plice' => 49500 
            ],
                // 太もも　ダブル
            [
                'id' => 13,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 8,
                'name' => '1回コース',
                'plice' => 11000
            ],
            [
                'id' => 14,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 8,
                'name' => '3回(3か月)コース',
                'plice' => 31900 
            ],
            [
                'id' => 15,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 8,
                'name' => '6回(6か月)コース',
                'plice' => 63800 
            ],
            [
                'id' => 16,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 8,
                'name' => '10回(10か月)コース',
                'plice' => 104500 
            ],
                //  腰　シングル
            [
                'id' => 17,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 9,
                'name' => '1回コース',
                'plice' => 3300 
            ],
            [
                'id' => 18,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 9,
                'name' => '3回(3か月)コース',
                'plice' => 8800 
            ],
            [
                'id' => 19,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 9,
                'name' => '6回(6か月)コース',
                'plice' => 18700 
            ],
            [
                'id' => 20,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 9,
                'name' => '10回(10か月)コース',
                'plice' => 27500 
            ],
                // 腰　ダブル
            [
                'id' => 21,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 10,
                'name' => '1回コース',
                'plice' => 5500 
            ],
            [
                'id' => 22,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 10,
                'name' => '3回(3か月)コース',
                'plice' => 15400 
            ],
            [
                'id' => 23,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 10,
                'name' => '6回(6か月)コース',
                'plice' => 30800 
            ],
            [
                'id' => 24,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 10,
                'name' => '10回(10か月)コース',
                'plice' => 49500 
            ],
            // 二の腕　シングル
            [
                'id' => 25,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 11,
                'name' => '1回コース',
                'plice' => 5500 
            ],
            [
                'id' => 26,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 11,
                'name' => '3回(3か月)コース',
                'plice' => 15400 
            ],
            [
                'id' => 27,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 11,
                'name' => '6回(6か月)コース',
                'plice' => 30800 
            ],
            [
                'id' => 28,
                'esthetic_genre_id' => 3,
                'esthetic_part_id' => 11,
                'name' => '10回(10か月)コース',
                'plice' => 49500 
            ],
        ]);
    }
}

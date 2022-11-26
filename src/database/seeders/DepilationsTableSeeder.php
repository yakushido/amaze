<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DepilationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilations')->insert([
            [
                'name' => '4回コース',
                'depilation_genre_id' => 1, // 全身脱毛
                'depilation_part_id' => null,
                'pliceA' => 145200,
                'pliceB' => null
            ],
            [
                'name' => '12回コース',
                'depilation_genre_id' => 1, // 全身脱毛
                'depilation_part_id' => null,
                'pliceA' => 396000,
                'pliceB' => null
            ],
            [
                'name' => '【プレミアム】4回コース',
                'depilation_genre_id' => 1, // 全身脱毛
                'depilation_part_id' => null,
                'pliceA' => 198000,
                'pliceB' => null
            ],
            [
                'name' => '【プレミアム】12回コース',
                'depilation_genre_id' => 1, // 全身脱毛
                'depilation_part_id' => null,
                'pliceA' => 440000,
                'pliceB' => null
            ],
            
            [
                'name' => '単品',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 1, // Sパーツ
                'pliceA' => 4400,
                'pliceB' => null
            ],
            [
                'name' => '4回コース',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 1, // Sパーツ
                'pliceA' => 9680,
                'pliceB' => null
            ],
            [
                'name' => '12回コース',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 1, // Sパーツ
                'pliceA' => 26400,
                'pliceB' => null
            ],
            
            [
                'name' => '単品',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 2, // Lパーツ
                'pliceA' => 11000,
                'pliceB' => null
            ],
            [
                'name' => '4回コース',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 2, // Lパーツ
                'pliceA' => 24200,
                'pliceB' => null
            ],
            [
                'name' => '12回コース',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 2, // Lパーツ
                'pliceA' => 66000,
                'pliceB' => null
            ],
            
            [
                'name' => '単品',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 3, // デリケートゾーン
                'pliceA' => 17600,
                'pliceB' => null
            ],
            [
                'name' => '12回コース',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 3, // デリケートゾーン
                'pliceA' => 105600,
                'pliceB' => null
            ],
            [
                'name' => '24回コース',
                'depilation_genre_id' => 2, // 部分脱毛
                'depilation_part_id' => 3, // デリケートゾーン
                'pliceA' => 171600,
                'pliceB' => null
            ],
            
            [
                'name' => 'SSS',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 39600,
                'pliceB' => null
            ],
            [
                'name' => 'SSSS',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 49500,
                'pliceB' => null
            ],
            [
                'name' => 'SSL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 49500,
                'pliceB' => null
            ],
            [
                'name' => 'SSSL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 60500,
                'pliceB' => null
            ],
            [
                'name' => 'SLL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 60500,
                'pliceB' => null
            ],
            [
                'name' => 'SSLL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 66000,
                'pliceB' => null
            ],
            [
                'name' => 'LLL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 66000,
                'pliceB' => null
            ],
            [
                'name' => 'SLLL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 77000,
                'pliceB' => null
            ],
            [
                'name' => 'LLLL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 88000,
                'pliceB' => null
            ],
            [
                'name' => 'LLLLL',
                'depilation_genre_id' => 3, // セレクト6回コース
                'depilation_part_id' => null, 
                'pliceA' => 99000,
                'pliceB' => null
            ],
        ]);
    }
}

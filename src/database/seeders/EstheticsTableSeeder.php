<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstheticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esthetics')->insert([
            [
                'name' => '全身リンパマッサージ【60分】',
                'esthetic_genre_id' => 1, // マッサージ
                'esthetic_part_id' => null,
                'pliceA' => 5500,
                'pliceB' => null
            ],
            [
                'name' => '全身リンパマッサージ【90分】',
                'esthetic_genre_id' => 1, // マッサージ
                'esthetic_part_id' => null,
                'pliceA' => 7480,
                'pliceB' => null
            ],
            [
                'name' => '肩こり解消コース【60分】',
                'esthetic_genre_id' => 1, // マッサージ
                'esthetic_part_id' => null,
                'pliceA' => 5830,
                'pliceB' => null
            ],
            [
                'name' => '美脚コース【60分】',
                'esthetic_genre_id' => 1, // マッサージ
                'esthetic_part_id' => null,
                'pliceA' => 5830,
                'pliceB' => null
            ],
            [
                'name' => 'ヒートマットオプション【20分】',
                'esthetic_genre_id' => 1, // マッサージ
                'esthetic_part_id' => null,
                'pliceA' => 1100,
                'pliceB' => null
            ],
            [
                'name' => 'ヒートマットオプション【30分】',
                'esthetic_genre_id' => 1, // マッサージ
                'esthetic_part_id' => null,
                'pliceA' => 1650,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 1, // 各Sパーツ
                'pliceA' => 3850,
                'pliceB' => null
            ],
            [
                'name' => '3回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 1, // 各Sパーツ
                'pliceA' => 9900,
                'pliceB' => null
            ],
            [
                'name' => '10回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 1, // 各Sパーツ
                'pliceA' => 30800,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 2, // 各Mパーツ
                'pliceA' => 4400,
                'pliceB' => null
            ],
            [
                'name' => '3回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 2, // 各Mパーツ
                'pliceA' => 11550,
                'pliceB' => null
            ],
            [
                'name' => '10回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 2, // 各Mパーツ
                'pliceA' => 36300,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 3, // 各Lパーツ
                'pliceA' => 4950,
                'pliceB' => null
            ],
            [
                'name' => '3回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 3, // 各Lパーツ
                'pliceA' => 13200,
                'pliceB' => null
            ],
            [
                'name' => '10回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 3, // 各Lパーツ
                'pliceA' => 41800,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 4, // フェイシャル
                'pliceA' => 4400,
                'pliceB' => null
            ],
            [
                'name' => '3回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 4, // フェイシャル
                'pliceA' => 12500,
                'pliceB' => null
            ],
            [
                'name' => '10回コース',
                'esthetic_genre_id' => 2, // キャビテーション
                'esthetic_part_id' => 4, // フェイシャル
                'pliceA' => 38500,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 5, // お腹(シングル)
                'pliceA' => 5500,
                'pliceB' => null
            ],
            [
                'name' => '3回(3か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 5, // お腹(シングル)
                'pliceA' => 15400,
                'pliceB' => null
            ],
            [
                'name' => '6回(6か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 5, // お腹(シングル)
                'pliceA' => 30800,
                'pliceB' => null
            ],
            [
                'name' => '10回(10か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 5, // お腹(シングル)
                'pliceA' => 46500,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 6, // お腹(ダブル)
                'pliceA' => 11000,
                'pliceB' => null
            ],
            [
                'name' => '3回(3か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 6, // お腹(ダブル)
                'pliceA' => 31900,
                'pliceB' => null
            ],
            [
                'name' => '6回(6か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 6, // お腹(ダブル)
                'pliceA' => 61800,
                'pliceB' => null
            ],
            [
                'name' => '10回(10か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 6, // お腹(ダブル)
                'pliceA' => 104500,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 7, // 太もも(シングル)
                'pliceA' => 5500,
                'pliceB' => null
            ],
            [
                'name' => '3回(3か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 7, // 太もも(シングル)
                'pliceA' => 15400,
                'pliceB' => null
            ],
            [
                'name' => '6回(6か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 7, // 太もも(シングル)
                'pliceA' => 30800,
                'pliceB' => null
            ],
            [
                'name' => '10回(10か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 7, // 太もも(シングル)
                'pliceA' => 49500,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 8, // 太もも(ダブル)
                'pliceA' => 11000,
                'pliceB' => null
            ],
            [
                'name' => '3回(3か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 8, // 太もも(ダブル)
                'pliceA' => 31900,
                'pliceB' => null
            ],
            [
                'name' => '6回(6か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 8, // 太もも(ダブル)
                'pliceA' => 63800,
                'pliceB' => null
            ],
            [
                'name' => '10回(10か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 8, // 太もも(ダブル)
                'pliceA' => 104500,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 9, // 腰(シングル)
                'pliceA' => 3300,
                'pliceB' => null
            ],
            [
                'name' => '3回(3か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 9, // 腰(シングル)
                'pliceA' => 8800,
                'pliceB' => null
            ],
            [
                'name' => '6回(6か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 9, // 腰(シングル)
                'pliceA' => 18700,
                'pliceB' => null
            ],
            [
                'name' => '10回(10か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 9, // 腰(シングル)
                'pliceA' => 27500,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 10, // 腰(ダブル)
                'pliceA' => 5500,
                'pliceB' => null
            ],
            [
                'name' => '3回(3か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 10, // 腰(ダブル)
                'pliceA' => 15400,
                'pliceB' => null
            ],
            [
                'name' => '6回(6か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 10, // 腰(ダブル)
                'pliceA' => 30800,
                'pliceB' => null
            ],
            [
                'name' => '10回(10か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 10, // 腰(ダブル)
                'pliceA' => 49500,
                'pliceB' => null
            ],
            
            [
                'name' => '1回コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 11, // 二の腕(シングル)
                'pliceA' => 5500,
                'pliceB' => null
            ],
            [
                'name' => '3回(3か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 11, // 二の腕(シングル)
                'pliceA' => 15400,
                'pliceB' => null
            ],
            [
                'name' => '6回(6か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 11, // 二の腕(シングル)
                'pliceA' => 30800,
                'pliceB' => null
            ],
            [
                'name' => '10回(10か月)コース',
                'esthetic_genre_id' => 3, // ハイフ
                'esthetic_part_id' => 11, // 二の腕(シングル)
                'pliceA' => 49500,
                'pliceB' => null
            ],
            
            [
                'name' => 'ハーブピーリング',
                'esthetic_genre_id' => 4, // フェイシャルエステ
                'esthetic_part_id' => null, 
                'pliceA' => 9130,
                'pliceB' => null
            ],
            [
                'name' => '小顔リンパマッサージ',
                'esthetic_genre_id' => 4, // フェイシャルエステ
                'esthetic_part_id' => null, 
                'pliceA' => 4400,
                'pliceB' => null
            ],
            [
                'name' => '美肌フェイシャル',
                'esthetic_genre_id' => 4, // フェイシャルエステ
                'esthetic_part_id' => null, 
                'pliceA' => 3850,
                'pliceB' => null
            ],
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            // Esthetic
            [
                'id' => 1,
                'menu' => '全身リンパマッサージ【60分】',
                'priceA' => 5500,
                'priceB' => null,
                'category_id' => 1, //マッサージ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 2,
                'menu' => '全身リンパマッサージ【90分】',
                'priceA' => 7480,
                'priceB' => null,
                'category_id' => 1, //マッサージ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 3,
                'menu' => '肩こり解消コース【60分】',
                'priceA' => 5830,
                'priceB' => null,
                'category_id' => 1, //マッサージ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 4,
                'menu' => '美脚コース【60分】',
                'priceA' => 5830,
                'priceB' => null,
                'category_id' => 1, //マッサージ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 5,
                'menu' => 'ヒートマットオプション【20分】',
                'priceA' => 1100,
                'priceB' => null,
                'category_id' => 1, //マッサージ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 6,
                'menu' => 'ヒートマットオプション【30分】',
                'priceA' => 1650,
                'priceB' => null,
                'category_id' => 1, //マッサージ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 7,
                'menu' => '1回コース',
                'priceA' => 3850,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 1
            ],
            [
                'id' => 8,
                'menu' => '3回コース',
                'priceA' => 9900,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 1
            ],
            [
                'id' => 9,
                'menu' => '10回コース',
                'priceA' => 30800,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 1
            ],
            
            [
                'id' => 10,
                'menu' => '1回コース',
                'priceA' => 4400,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 2
            ],
            [
                'id' => 11,
                'menu' => '3回コース',
                'priceA' => 11550,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 2
            ],
            [
                'id' => 12,
                'menu' => '10回コース',
                'priceA' => 36300,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 2
            ],
            [
                'id' => 13,
                'menu' => '1回コース',
                'priceA' => 4950,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 3
            ],
            [
                'id' => 14,
                'menu' => '3回コース',
                'priceA' => 13200,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 3
            ],
            [
                'id' => 15,
                'menu' => '10回コース',
                'priceA' => 41800,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 3
            ],
            [
                'id' => 16,
                'menu' => '1回コース',
                'priceA' => 4400,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 4
            ],
            [
                'id' => 17,
                'menu' => '3回コース',
                'priceA' => 12540,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 4
            ],
            [
                'id' => 18,
                'menu' => '10回コース',
                'priceA' => 38500,
                'priceB' => null,
                'category_id' => 2, //Cavitation
                'gender_id' => 2, //women`s
                'part_id' => 4
            ],

            [
                'id' => 19,
                'menu' => '単品',
                'priceA' => 5500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 5
            ],
            [
                'id' => 20,
                'menu' => '3回(3ヶ月)',
                'priceA' => 15400,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 5
            ],
            [
                'id' => 21,
                'menu' => '6回(6ヶ月)',
                'priceA' => 30800,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 5
            ],
            [
                'id' => 22,
                'menu' => '10回(10ヶ月)',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 5
            ],
            [
                'id' => 23,
                'menu' => '単品',
                'priceA' => 11000,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 6
            ],
            [
                'id' => 24,
                'menu' => '3回(3ヶ月)',
                'priceA' => 31900,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 6
            ],
            [
                'id' => 25,
                'menu' => '6回(6ヶ月)',
                'priceA' => 63800,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 6
            ],
            [
                'id' => 26,
                'menu' => '10回(10ヶ月)',
                'priceA' => 104500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 6
            ],
            
            [
                'id' => 27,
                'menu' => '単品',
                'priceA' => 5500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 7
            ],
            [
                'id' => 28,
                'menu' => '3回(3ヶ月)',
                'priceA' => 15400,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 7
            ],
            [
                'id' => 29,
                'menu' => '6回(6ヶ月)',
                'priceA' => 30800,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 7
            ],
            [
                'id' => 30,
                'menu' => '10回(10ヶ月)',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 7
            ],
            
            [
                'id' => 31,
                'menu' => '単品',
                'priceA' => 11000,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 8
            ],
            [
                'id' => 32,
                'menu' => '3回(3ヶ月)',
                'priceA' => 31900,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 8
            ],
            [
                'id' => 33,
                'menu' => '6回(6ヶ月)',
                'priceA' => 63800,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 8
            ],
            [
                'id' => 34,
                'menu' => '10回(10ヶ月)',
                'priceA' => 104500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 8
            ],

            [
                'id' => 35,
                'menu' => '単品',
                'priceA' => 3300,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 9
            ],
            [
                'id' => 36,
                'menu' => '3回(3ヶ月)',
                'priceA' => 8800,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 9
            ],
            [
                'id' => 37,
                'menu' => '6回(6ヶ月)',
                'priceA' => 18700,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 9
            ],
            [
                'id' => 38,
                'menu' => '10回(10ヶ月)',
                'priceA' => 27500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 9
            ],
            
            [
                'id' => 39,
                'menu' => '単品',
                'priceA' => 5500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 10
            ],
            [
                'id' => 40,
                'menu' => '3回(3ヶ月)',
                'priceA' => 15400,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 10
            ],
            [
                'id' => 41,
                'menu' => '6回(6ヶ月)',
                'priceA' => 30800,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 10
            ],
            [
                'id' => 42,
                'menu' => '10回(10ヶ月)',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 10
            ],
            
            [
                'id' => 43,
                'menu' => '単品',
                'priceA' => 5500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 11
            ],
            [
                'id' => 44,
                'menu' => '3回(3ヶ月)',
                'priceA' => 15400,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 11
            ],
            [
                'id' => 45,
                'menu' => '6回(6ヶ月)',
                'priceA' => 30800,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 11
            ],
            [
                'id' => 46,
                'menu' => '10回(10ヶ月)',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 3, //Hifu
                'gender_id' => 2, //women`s
                'part_id' => 11
            ],
            
            [
                'id' => 47,
                'menu' => 'ハーブピーリング',
                'priceA' => 9130,
                'priceB' => null,
                'category_id' => 4, //フェイシャルエステ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 48,
                'menu' => '小顔リンパマッサージ',
                'priceA' => 4400,
                'priceB' => null,
                'category_id' => 4, //フェイシャルエステ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 49,
                'menu' => '美肌フェイシャル',
                'priceA' => 3850,
                'priceB' => null,
                'category_id' => 4, //フェイシャルエステ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],

            // Eyelash
            [
                'id' => 50,
                'menu' => 'フラットマットラッシュ',
                'priceA' => 4730,
                'priceB' => null,
                'category_id' => 5, //フラットラッシュ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 51,
                'menu' => 'ゴージャスフラットラッシュ',
                'priceA' => 5830,
                'priceB' => null,
                'category_id' => 5, //フラットラッシュ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 52,
                'menu' => 'カラー2色以上',
                'priceA' => 1430,
                'priceB' => null,
                'category_id' => 5, //フラットラッシュ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 53,
                'menu' => 'ベーシックコース',
                'priceA' => 5830,
                'priceB' => null,
                'category_id' => 6, //3Dボリューム
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 54,
                'menu' => 'ボリュームコース',
                'priceA' => 6930,
                'priceB' => null,
                'category_id' => 6, //3Dボリューム
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 55,
                'menu' => 'リペア',
                'priceA' => 3300,
                'priceB' => null,
                'category_id' => 6, //3Dボリューム
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 56,
                'menu' => '付け替えオフ',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 7, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 57,
                'menu' => 'オフのみ',
                'priceA' => 1650,
                'priceB' => null,
                'category_id' => 7, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 58,
                'menu' => 'アイシャンプー',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 7, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 59,
                'menu' => 'デザインパーマ',
                'priceA' => 4950,
                'priceB' => null,
                'category_id' => 8, //パリジェンヌフラットラッシュ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 60,
                'menu' => 'パリジェンヌラッシュリフト',
                'priceA' => 6600,
                'priceB' => null,
                'category_id' => 8, //パリジェンヌフラットラッシュ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 61,
                'menu' => '下まつげパーマ単品',
                'priceA' => 2750,
                'priceB' => null,
                'category_id' => 8, //パリジェンヌフラットラッシュ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 62,
                'menu' => '上下セット',
                'priceA' => 2200,
                'priceB' => null,
                'category_id' => 8, //パリジェンヌフラットラッシュ
                'gender_id' => 2, //women`s
                'part_id' => null
            ],

            //Depilation
            [
                'id' => 63,
                'menu' => '4回コース',
                'priceA' => 145200,
                'priceB' => null,
                'category_id' => 9, //全身脱毛
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 64,
                'menu' => '12回コース',
                'priceA' => 396000,
                'priceB' => null,
                'category_id' => 9, //全身脱毛
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 65,
                'menu' => '【プレミアム】4回コース',
                'priceA' => 198000,
                'priceB' => null,
                'category_id' => 9, //全身脱毛
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 66,
                'menu' => '【プレミアム】12回コース',
                'priceA' => 440000,
                'priceB' => null,
                'category_id' => 9, //全身脱毛
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 67,
                'menu' => '単品',
                'priceA' => 4400,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 12
            ],
            [
                'id' => 68,
                'menu' => '4回コース(2分割可)',
                'priceA' => 9680,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 12
            ],
            [
                'id' => 69,
                'menu' => '12回コース(4分割可)',
                'priceA' => 26400,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 12
            ],
            
            [
                'id' => 70,
                'menu' => '単品',
                'priceA' => 11000,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 13
            ],
            [
                'id' => 71,
                'menu' => '4回コース(2分割可)',
                'priceA' => 24200,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 13
            ],
            [
                'id' => 72,
                'menu' => '12回コース(4分割可)',
                'priceA' => 66000,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 13
            ],
            
            [
                'id' => 73,
                'menu' => '単品',
                'priceA' => 17600,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 14
            ],
            [
                'id' => 74,
                'menu' => '12回コース(4分割可)',
                'priceA' => 105600,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 14
            ],
            [
                'id' => 75,
                'menu' => '24回コース(6分割可)',
                'priceA' => 171600,
                'priceB' => null,
                'category_id' => 10, //部分脱毛
                'gender_id' => 2, //women`s
                'part_id' => 14
            ],
            
            [
                'id' => 76,
                'menu' => 'SSS',
                'priceA' => 39600,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 77,
                'menu' => 'SSSS',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 78,
                'menu' => 'SSL',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 79,
                'menu' => 'SSSL',
                'priceA' => 60500,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 80,
                'menu' => 'SLL',
                'priceA' => 60500,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 81,
                'menu' => 'SSLL',
                'priceA' => 66000,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 82,
                'menu' => 'LLL',
                'priceA' => 66000,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 83,
                'menu' => 'SLLL',
                'priceA' => 77000,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 84,
                'menu' => 'LLLL',
                'priceA' => 88000,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 85,
                'menu' => 'LLLLL',
                'priceA' => 99000,
                'priceB' => null,
                'category_id' => 11, //セレクト６回コース
                'gender_id' => 2, //women`s
                'part_id' => null
            ],

            //Wormwood
            [
                'id' => 86,
                'menu' => '1回',
                'priceA' => 2750,
                'priceB' => null,
                'category_id' => 12, //よもぎ蒸し
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 87,
                'menu' => '3回コース',
                'priceA' => 7700,
                'priceB' => null,
                'category_id' => 12, //よもぎ蒸し
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 88,
                'menu' => '5回コース',
                'priceA' => 12100,
                'priceB' => null,
                'category_id' => 12, //よもぎ蒸し
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 89,
                'menu' => 'オプション',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 12, //よもぎ蒸し
                'gender_id' => 2, //women`s
                'part_id' => null
            ],

            //Bridal
            [
                'id' => 90,
                'menu' => null,
                'priceA' => 55000,
                'priceB' => null,
                'category_id' => 13, //カスタムメニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 91,
                'menu' => null,
                'priceA' => 110000,
                'priceB' => null,
                'category_id' => 13, //カスタムメニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 92,
                'menu' => null,
                'priceA' => 165000,
                'priceB' => null,
                'category_id' => 13, //カスタムメニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 93,
                'menu' => null,
                'priceA' => 165000,
                'priceB' => null,
                'category_id' => 14, //1day
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 94,
                'menu' => null,
                'priceA' => 33000,
                'priceB' => null,
                'category_id' => 15, //マタニティプラン(16週目から)
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 95,
                'menu' => null,
                'priceA' => 55000,
                'priceB' => null,
                'category_id' => 15, //マタニティプラン(16週目から)
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 96,
                'menu' => 'シェービングFACE',
                'priceA' => 2200,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 97,
                'menu' => 'シェービングBODY',
                'priceA' => 3300,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 98,
                'menu' => 'ピーリングBODY【L】',
                'priceA' => 2200,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 99,
                'menu' => 'ピーリングBODY【M】',
                'priceA' => 1650,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 100,
                'menu' => 'ピーリングBODY【S】',
                'priceA' => 1100,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 101,
                'menu' => '美白パック【L】',
                'priceA' => 2750,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 102,
                'menu' => '美白パック【M】',
                'priceA' => 1650,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 103,
                'menu' => '美白パック【S】',
                'priceA' => 1100,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 104,
                'menu' => '美肌パック【L】',
                'priceA' => 2750,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 105,
                'menu' => '美肌パック【M】',
                'priceA' => 1650,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 106,
                'menu' => '美肌パック【S】',
                'priceA' => 1100,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 107,
                'menu' => '泡エステBODY',
                'priceA' => 2200,
                'priceB' => null,
                'category_id' => 16, //単品メニュー
                'gender_id' => 2, //women`s
                'part_id' => null
            ],

            //Nail
            [
                'id' => 108,
                'menu' => '美爪ジェルネイル',
                'priceA' => 5830,
                'priceB' => null,
                'category_id' => 17, //ジェルネイル
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 109,
                'menu' => 'フットジェルネイル',
                'priceA' => 6050,
                'priceB' => null,
                'category_id' => 17, //ジェルネイル
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 110,
                'menu' => 'クリアジェルネイル',
                'priceA' => 3630,
                'priceB' => null,
                'category_id' => 17, //ジェルネイル
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 111,
                'menu' => 'ワンカラー、グラデーションのみ(パーツ不可)',
                'priceA' => 5170,
                'priceB' => null,
                'category_id' => 17, //ジェルネイル
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 112,
                'menu' => '1day~7dayジェルネイル',
                'priceA' => 5500,
                'priceB' => null,
                'category_id' => 17, //ジェルネイル
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            
            [
                'id' => 113,
                'menu' => 'スカルプチュア',
                'priceA' => 11330,
                'priceB' => null,
                'category_id' => 18, //スカルプチュア
                'gender_id' => 2, //women`s
                'part_id' => null
            ],

            [
                'id' => 114,
                'menu' => '付け替えオフ',
                'priceA' => 110,
                'priceB' => 165,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 115,
                'menu' => 'オフのみ',
                'priceA' => 2750,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 116,
                'menu' => 'アート',
                'priceA' => 110,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 117,
                'menu' => 'キャラクターアート',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 118,
                'menu' => '痛ネイルアート',
                'priceA' => 1100,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 119,
                'menu' => 'ビジュー(ストーン・パーツアート)',
                'priceA' => 110,
                'priceB' => 220,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 120,
                'menu' => '3Dストーン',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 121,
                'menu' => '長さ出し',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 122,
                'menu' => '補強',
                'priceA' => 330,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 123,
                'menu' => '3D',
                'priceA' => 330,
                'priceB' => 1100,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 124,
                'menu' => '角質ケア',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            [
                'id' => 125,
                'menu' => '保湿パック',
                'priceA' => 1100,
                'priceB' => null,
                'category_id' => 19, //オフ・オプション
                'gender_id' => 2, //women`s
                'part_id' => 15
            ],
            
            [
                'id' => 126,
                'menu' => 'ハンド or フットケア',
                'priceA' => 3080,
                'priceB' => null,
                'category_id' => 20, //ケア
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 127,
                'menu' => 'カットのみ',
                'priceA' => 550,
                'priceB' => null,
                'category_id' => 20, //ケア
                'gender_id' => 2, //women`s
                'part_id' => null
            ],
            [
                'id' => 128,
                'menu' => '巻き爪ケア',
                'priceA' => 2530,
                'priceB' => null,
                'category_id' => 20, //ケア
                'gender_id' => 2, //women`s
                'part_id' => null
            ],


            // Men`s
            [
                'id' => 129,
                'menu' => '1 Set',
                'priceA' => 40000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 19 // ALL
            ],
            [
                'id' => 130,
                'menu' => '6 Set',
                'priceA' => 210000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 19 // ALL
            ],
            [
                'id' => 131,
                'menu' => '12 Set',
                'priceA' => 372000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 19 // ALL
            ],
            
            [
                'id' => 132,
                'menu' => '1 Set',
                'priceA' => 42000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 20 // ALL 顔 or VIO
            ],
            [
                'id' => 133,
                'menu' => '6 Set',
                'priceA' => 222000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 20 // ALL 顔 or VIO
            ],
            [
                'id' => 134,
                'menu' => '12 Set',
                'priceA' => 400000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 20 // ALL 顔 or VIO
            ],
            
            [
                'id' => 135,
                'menu' => '1 Set',
                'priceA' => 50000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 21 // ALL 顔 + VIO
            ],
            [
                'id' => 136,
                'menu' => '6 Set',
                'priceA' => 274000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 21 // ALL 顔 + VIO
            ],
            [
                'id' => 137,
                'menu' => '12 Set',
                'priceA' => 500000,
                'priceB' => null,
                'category_id' => 21, //全身脱毛
                'gender_id' => 1, //men`s
                'part_id' => 21 // ALL 顔 + VIO
            ],
            
            [
                'id' => 138,
                'menu' => '1 Set',
                'priceA' => 5000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 16 // Face
            ],
            [
                'id' => 139,
                'menu' => '6 Set',
                'priceA' => 23000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 16 // Face
            ],
            [
                'id' => 140,
                'menu' => '12 Set',
                'priceA' => 42000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 16 // Face
            ],
            
            [
                'id' => 141,
                'menu' => '1 Set',
                'priceA' => 16000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 17 // VIO
            ],
            [
                'id' => 142,
                'menu' => '6 Set',
                'priceA' => 90000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 17 // VIO
            ],
            [
                'id' => 143,
                'menu' => '12 Set',
                'priceA' => 168000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 17 // VIO
            ],
            
            [
                'id' => 144,
                'menu' => '1 Set',
                'priceA' => 18000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 18 // VIO + ヒップ
            ],
            [
                'id' => 145,
                'menu' => '6 Set',
                'priceA' => 102000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 18 // VIO + ヒップ
            ],
            [
                'id' => 146,
                'menu' => '12 Set',
                'priceA' => 192000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 18 // VIO + ヒップ
            ],
            
            [
                'id' => 147,
                'menu' => 'SSS',
                'priceA' => 39600,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 148,
                'menu' => 'SSSS',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 149,
                'menu' => 'SSL',
                'priceA' => 49500,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 150,
                'menu' => 'SSSL',
                'priceA' => 60500,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 151,
                'menu' => 'SLL',
                'priceA' => 60500,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 152,
                'menu' => 'SSLL',
                'priceA' => 66000,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 153,
                'menu' => 'LLL',
                'priceA' => 66000,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 154,
                'menu' => 'SLLL',
                'priceA' => 77000,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 155,
                'menu' => 'LLLL',
                'priceA' => 88000,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 156,
                'menu' => 'LLLLL',
                'priceA' => 99000,
                'priceB' => null,
                'category_id' => 23, //Select 6set
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            
            [
                'id' => 157,
                'menu' => 'ハーブピーリング + デコルテ',
                'priceA' => 10000,
                'priceB' => null,
                'category_id' => 24, //FACE HEAD
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 158,
                'menu' => '小顔キャビテーション + デコルテ',
                'priceA' => 8000,
                'priceB' => null,
                'category_id' => 24, //FACE HEAD
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 159,
                'menu' => 'ヘッドスパ + デコルテ',
                'priceA' => 4000,
                'priceB' => null,
                'category_id' => 24, //FACE HEAD
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            
            [
                'id' => 160,
                'menu' => 'アロマリンパ + フットパス',
                'priceA' => 7000,
                'priceB' => null,
                'category_id' => 25, //BODY
                'gender_id' => 1, //men`s
                'part_id' => 24 // 疲労＆リラクゼーション
            ],
            [
                'id' => 161,
                'menu' => 'キャビテーション（上）+ アロマリンパマッサージ',
                'priceA' => 12000,
                'priceB' => null,
                'category_id' => 25, //BODY
                'gender_id' => 1, //men`s
                'part_id' => 25 // 痩身＆疲労＆リラクゼーション
            ],
            [
                'id' => 162,
                'menu' => 'キャビテーション（下）+ アロマリンパマッサージ',
                'priceA' => 12000,
                'priceB' => null,
                'category_id' => 25, //BODY
                'gender_id' => 1, //men`s
                'part_id' => 25 // 痩身＆疲労＆リラクゼーション
            ],
            
            [
                'id' => 163,
                'menu' => 'ヘッドスパ（10min）',
                'priceA' => 1000,
                'priceB' => null,
                'category_id' => 26, //OPTION
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 164,
                'menu' => 'デコルテ（10min）',
                'priceA' => 1000,
                'priceB' => null,
                'category_id' => 26, //OPTION
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            [
                'id' => 165,
                'menu' => 'ヒートマット（10min）',
                'priceA' => 1000,
                'priceB' => null,
                'category_id' => 26, //OPTION
                'gender_id' => 1, //men`s
                'part_id' => null
            ],
            
            [
                'id' => 166,
                'menu' => '1 Set',
                'priceA' => 4400,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 22 //S parts
            ],
            [
                'id' => 167,
                'menu' => '6 Set',
                'priceA' => 15000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 22 //S parts
            ],
            [
                'id' => 168,
                'menu' => '12 Set',
                'priceA' => 26400,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 22 //S parts
            ],
            
            [
                'id' => 169,
                'menu' => '1 Set',
                'priceA' => 11000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 23 //L parts
            ],
            [
                'id' => 170,
                'menu' => '6 Set',
                'priceA' => 36300,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 23 //L parts
            ],
            [
                'id' => 171,
                'menu' => '12 Set',
                'priceA' => 66000,
                'priceB' => null,
                'category_id' => 22, //部分脱毛
                'gender_id' => 1, //men`s
                'part_id' => 23 //L parts
            ],
        ]);
    }
}

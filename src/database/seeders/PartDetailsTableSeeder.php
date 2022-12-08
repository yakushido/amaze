<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('part_details')->insert([
            [
                'id' => 1,
                'detail' => "鼻下・口周り",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 2,
                'detail' => "アゴ",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 3,
                'detail' => "頬（ほほ）",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 4,
                'detail' => "額（ひたい）",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 5,
                'detail' => "えり足",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 6,
                'detail' => "両脇",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 7,
                'detail' => "手の甲（指含む）",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 8,
                'detail' => "乳輪",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 9,
                'detail' => "へそ周り",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 10,
                'detail' => "足の甲（指含む）",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 11,
                'detail' => "ビキニライン上部",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 12,
                'detail' => "Vライン",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 13,
                'detail' => "Iライン",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 14,
                'detail' => "肛門周り",
                "part_id" => 12, //Sパーツ
            ],
            [
                'id' => 15,
                'detail' => "ひざ",
                "part_id" => 12, //Sパーツ
            ],
            
            
            [
                'id' => 16,
                'detail' => "お顔全体",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 17,
                'detail' => "ひじ下",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 18,
                'detail' => "二の腕",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 19,
                'detail' => "背中上部",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 20,
                'detail' => "背中下部",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 21,
                'detail' => "腰",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 22,
                'detail' => "バスト全体",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 23,
                'detail' => "腹部",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 24,
                'detail' => "ひざ下（ひざ含む）",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 25,
                'detail' => "太もも",
                "part_id" => 13, //Lパーツ
            ],
            [
                'id' => 26,
                'detail' => "ヒップ",
                "part_id" => 13, //Lパーツ
            ],
            
            [
                'id' => 27,
                'detail' => "両脇",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 28,
                'detail' => "鼻下 + 口周り",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 29,
                'detail' => "顎",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 30,
                'detail' => "頬",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 31,
                'detail' => "額",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 32,
                'detail' => "襟足",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 33,
                'detail' => "乳輪",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 34,
                'detail' => "手の甲 + 指",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 35,
                'detail' => "へそ周り",
                "part_id" => 22, //S parts
            ],
            [
                'id' => 36,
                'detail' => "膝",
                "part_id" => 22, //S parts
            ],
            
            [
                'id' => 37,
                'detail' => "ひじ下",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 38,
                'detail' => "二の腕",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 39,
                'detail' => "背中上",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 40,
                'detail' => "背中下",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 41,
                'detail' => "腰",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 42,
                'detail' => "バスト",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 43,
                'detail' => "腹部",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 44,
                'detail' => "膝下 + 膝",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 45,
                'detail' => "太もも",
                "part_id" => 23, //L parts
            ],
            [
                'id' => 46,
                'detail' => "ヒップ",
                "part_id" => 23, //L parts
            ],
            
        ]);

    }
}

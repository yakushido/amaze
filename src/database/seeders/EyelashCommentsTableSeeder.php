<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_comments')->insert([
            // フラットラッシュ（フラットマットラッシュ）
            [
                'id' => 1,
                'eyelash_course_id' => 1,
                'comment' => '安定感と持続力がほしい方'
            ],
            [
                'id' => 2,
                'eyelash_course_id' => 1,
                'comment' => '地まつ毛が弱く、負担をかけたくない方'
            ],
            [
                'id' => 3,
                'eyelash_course_id' => 1,
                'comment' => 'より軽いつけ心地がほしい方'
            ],
            [
                'id' => 4,
                'eyelash_course_id' => 1,
                'comment' => 'より自然に仕上げたい方'            
            ],
            [
                'id' => 5,
                'eyelash_course_id' => 1,
                'comment' => '目元をリフトアップしたい方'            
            ],

            // 3Dボリュームラッシュ（ベーシックコース）
            [
                'id' => 6,
                'eyelash_course_id' => 4,
                'comment' => 'まつ毛の負担が少ない'            
            ],
            [
                'id' => 7,
                'eyelash_course_id' => 4,
                'comment' => 'ハリやコシに不安がある方'            
            ],
            [
                'id' => 8,
                'eyelash_course_id' => 4,
                'comment' => 'フサフサとしたボリューム感'            
            ],

            // デザインパーマ
            [
                'id' => 9,
                'eyelash_course_id' => 10,
                'comment' => 'ナチュラルパッチリなどデザインが選べる'            
            ],
            [
                'id' => 10,
                'eyelash_course_id' => 10,
                'comment' => '毛元くるんっ'            
            ],
            [
                'id' => 11,
                'eyelash_course_id' => 10,
                'comment' => '優しく可愛らしい印象'            
            ],

            // パリジェンヌラッシュリフト
            [
                'id' => 12,
                'eyelash_course_id' => 11,
                'comment' => '根元から80°立ち上げる'            
            ],
            [
                'id' => 13,
                'eyelash_course_id' => 11,
                'comment' => 'まつ毛を長く見せたい方'            
            ],
            [
                'id' => 14,
                'eyelash_course_id' => 11,
                'comment' => 'パーマの落ち方も自然'            
            ],
            [
                'id' => 15,
                'eyelash_course_id' => 11,
                'comment' => 'まつ毛エクステも可能'            
            ],
        ]);
    }
}

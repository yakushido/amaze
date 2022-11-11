<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashLimitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_limits')->insert([
            // フラットマットラッシュ
            [
                'id' => 1,
                'eyelash_course_id' => 1,
                'limit' => '片目100本以内'
            ],
            // ゴージャスフラットラッシュ
            [
                'id' => 2,
                'eyelash_course_id' => 2,
                'limit' => '片目100本以上'
            ],
            // ベーシックコース
            [
                'id' => 3,
                'eyelash_course_id' => 4,
                'limit' => '100束まで'
            ],
            // ボリュームコース
            [
                'id' => 4,
                'eyelash_course_id' => 5,
                'limit' => '120~140束'
            ],
            // リペア
            [
                'id' => 5,
                'eyelash_course_id' => 6,
                'limit' => '2時間以内、片目30束以内'
            ],
        ]);
    }
}

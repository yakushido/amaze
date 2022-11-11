<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_courses')->insert([
            [
                'id' => 1,
                'name' => 'フラットマットラッシュ',
                'plice' => 4730
            ],
            [
                'id' => 2,
                'name' => 'ゴージャスフラットラッシュ',
                'plice' => 5830
            ],
            [
                'id' => 3,
                'name' => 'カラー2色以上',
                'plice' => 1430
            ],
            [
                'id' => 4,
                'name' => 'ベーシックコース',
                'plice' => 5830
            ],
            [
                'id' => 5,
                'name' => 'ボリュームコース',
                'plice' => 6930
            ],
            [
                'id' => 6,
                'name' => 'リペア',
                'plice' => 3300
            ],
            [
                'id' => 7,
                'name' => '付け替えオフ',
                'plice' => 550
            ],
            [
                'id' => 8,
                'name' => 'オフのみ',
                'plice' => 1650
            ],
            [
                'id' => 9,
                'name' => 'アイシャンプー',
                'plice' => 550
            ],
            [
                'id' => 10,
                'name' => 'デザインパーマ',
                'plice' => 4950
            ],
            [
                'id' => 11,
                'name' => 'パリジェンヌラッシュリフト',
                'plice' => 6600
            ],
            [
                'id' => 12,
                'name' => '下まつげパーマ単品',
                'plice' => 2750
            ],
            [
                'id' => 13,
                'name' => '上下セット',
                'plice' => 2200
            ],
        ]);
    }
}

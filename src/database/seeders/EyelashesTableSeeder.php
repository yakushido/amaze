<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelashes')->insert([
            [
                'name' => 'フラットマッシュラッシュ',
                'eyelash_genre_id' => 1, // フラットマッシュ
                'eyelash_part_id' => null,
                'pliceA' => 4730,
                'pliceB' => null
            ],
            [
                'name' => 'ゴージャスフラットラッシュ',
                'eyelash_genre_id' => 1, // フラットマッシュ
                'eyelash_part_id' => null,
                'pliceA' => 5830,
                'pliceB' => null
            ],
            [
                'name' => 'カラー2色以上',
                'eyelash_genre_id' => 1, // フラットマッシュ
                'eyelash_part_id' => null,
                'pliceA' => 1430,
                'pliceB' => null
            ],

            [
                'name' => 'ベーシックコース',
                'eyelash_genre_id' => 2, // 3Dボリュームラッシュ
                'eyelash_part_id' => null,
                'pliceA' => 5830,
                'pliceB' => null
            ],
            [
                'name' => 'ボリュームコース',
                'eyelash_genre_id' => 2, // 3Dボリュームラッシュ
                'eyelash_part_id' => null,
                'pliceA' => 6930,
                'pliceB' => null
            ],
            [
                'name' => 'リペア',
                'eyelash_genre_id' => 2, // 3Dボリュームラッシュ
                'eyelash_part_id' => null,
                'pliceA' => 3300,
                'pliceB' => null
            ],
            
            [
                'name' => '付け替えオフ',
                'eyelash_genre_id' => 3, // オフ・オプション
                'eyelash_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
            [
                'name' => 'オフのみ',
                'eyelash_genre_id' => 3, // オフ・オプション
                'eyelash_part_id' => null,
                'pliceA' => 1650,
                'pliceB' => null
            ],
            [
                'name' => 'アイシャンプー',
                'eyelash_genre_id' => 3, // オフ・オプション
                'eyelash_part_id' => null,
                'pliceA' => 550,
                'pliceB' => null
            ],
            
            [
                'name' => 'デザインパーマ',
                'eyelash_genre_id' => 4, // ラッシュリフト
                'eyelash_part_id' => null,
                'pliceA' => 4950,
                'pliceB' => null
            ],
            [
                'name' => 'パリジェンヌラッシュリフト',
                'eyelash_genre_id' => 4, // ラッシュリフト
                'eyelash_part_id' => null,
                'pliceA' => 6600,
                'pliceB' => null
            ],
            [
                'name' => '下まつげパーマ単品',
                'eyelash_genre_id' => 4, // ラッシュリフト
                'eyelash_part_id' => null,
                'pliceA' => 2750,
                'pliceB' => null
            ],
            [
                'name' => '上下セット',
                'eyelash_genre_id' => 4, // ラッシュリフト
                'eyelash_part_id' => null,
                'pliceA' => 2200,
                'pliceB' => null
            ],
        ]);
    }
}

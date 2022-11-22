<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstheticBsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esthetic_b_s')->insert([
            [
                'id' => 1,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 1,
                'name' => '1回コース',
                'plice' => 3850
            ],
            [
                'id' => 2,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 1,
                'name' => '3回コース',
                'plice' => 9900
            ],
            [
                'id' => 3,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 1,
                'name' => '10回コース',
                'plice' => 30800
            ],
                // 各Mパーツ
            [
                'id' => 4,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 2,
                'name' => '1回コース',
                'plice' => 4400
            ],
            [
                'id' => 5,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 2,
                'name' => '3回コース',
                'plice' => 11550
            ],
            [
                'id' => 6,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 2,
                'name' => '10回コース',
                'plice' => 36300
            ],
                // 各Lパーツ
            [
                'id' => 7,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 3,
                'name' => '1回コース',
                'plice' => 4950
            ],
            [
                'id' => 8,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 3,
                'name' => '3回コース',
                'plice' => 13200
            ],
            [
                'id' => 9,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 3,
                'name' => '10回コース',
                'plice' => 41800
            ],
                // フェイシャル
            [
                'id' => 10,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 4,
                'name' => '1回コース',
                'plice' => 4400
            ],
            [
                'id' => 11,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 4,
                'name' => '3回コース',
                'plice' => 12500
            ],
            [
                'id' => 12,
                'esthetic_genre_id' => 2,
                'esthetic_part_id' => 4,
                'name' => '10回コース',
                'plice' => 38500
            ],
        ]);

    }
}

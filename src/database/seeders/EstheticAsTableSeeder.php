<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstheticAsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esthetic_a_s')->insert([
            [
                'id' => 1,
                'esthetic_genre_id' => 1,
                'name' => '全身リンパマッサージ【60分】',
                'plice' => 5500
            ],
            [
                'id' => 2,
                'esthetic_genre_id' => 1,
                'name' => '全身リンパマッサージ【90分】',
                'plice' => 7480
            ],
            [
                'id' => 3,
                'esthetic_genre_id' => 1,
                'name' => '肩こり解消コース【60分】',
                'plice' => 5830
            ],
            [
                'id' => 4,
                'esthetic_genre_id' => 1,
                'name' => '美脚コース【60分】',
                'plice' => 5830
            ],
            [
                'id' => 5,
                'esthetic_genre_id' => 1,
                'name' => 'ヒートマットオプション【20分】',
                'plice' => 1100
            ],
            [
                'id' => 6,
                'esthetic_genre_id' => 1,
                'name' => 'ヒートマットオプション【30分】',
                'plice' => 1650
            ],
        ]);

    }
}

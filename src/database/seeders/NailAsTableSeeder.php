<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NailAsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nail_a_s')->insert([
            [
                'id' => 1,
                'nail_genre_id' => 1,
                'name' => '美爪ジェルネイル',
                'plice' => 5930
            ],
            [
                'id' => 2,
                'nail_genre_id' => 1,
                'name' => 'フットジェルネイル',
                'plice' => 6050
            ],
            [
                'id' => 3,
                'nail_genre_id' => 1,
                'name' => 'クリアジェルネイル',
                'plice' => 3630
            ],
            [
                'id' => 4,
                'nail_genre_id' => 1,
                'name' => 'ワンカラー・グラデーションのみ',
                'plice' => 5170
            ],
            [
                'id' => 5,
                'nail_genre_id' => 1,
                'name' => '1day~7dayジェルネイル',
                'plice' => 5500
            ],
            
        ]);
    }
}

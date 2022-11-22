<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstheticDsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esthetic_d_s')->insert([
            [
                'id' => 1,
                'esthetic_genre_id' => 4,
                'name' => 'ハーブピーリング',
                'plice' => 9130 
            ],
            [
                'id' => 2,
                'esthetic_genre_id' => 4,
                'name' => '小顔リンパマッサージ',
                'plice' => 4400 
            ],
            [
                'id' => 3,
                'esthetic_genre_id' => 4,
                'name' => '美肌フェイシャル',
                'plice' => 3850 
            ],
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstheticGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esthetic_genres')->insert([
            [
                'id' => 1,
                'name' => 'マッサージ'
            ],
            [
                'id' => 2,
                'name' => 'キャビテーション'
            ],
            [
                'id' => 3,
                'name' => 'ハイフ'
            ],
            [
                'id' => 4,
                'name' => 'フェイシャルエステ'
            ],
            
        ]);
    }
}

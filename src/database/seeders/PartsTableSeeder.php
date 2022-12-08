<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->insert([
            [
                'id' => 1,
                'part' => '各Sパーツ',
            ],
            [
                'id' => 2,
                'part' => '各Mパーツ',
            ],
            [
                'id' => 3,
                'part' => '各Lパーツ',
            ],
            [
                'id' => 4,
                'part' => 'フェイシャル',
            ],
            [
                'id' => 5,
                'part' => 'お腹【シングル】',
            ],
            [
                'id' => 6,
                'part' => 'お腹【ダブル】',
            ],
            [
                'id' => 7,
                'part' => '太もも【シングル】',
            ],
            [
                'id' => 8,
                'part' => '太もも【ダブル】',
            ],
            [
                'id' => 9,
                'part' => '腰【シングル】',
            ],
            [
                'id' => 10,
                'part' => '腰【ダブル】',
            ],
            [
                'id' => 11,
                'part' => '二の腕【シングル】',
            ],
            
            [
                'id' => 12,
                'part' => 'Sパーツ',
            ],
            [
                'id' => 13,
                'part' => 'Lパーツ',
            ],
            [
                'id' => 14,
                'part' => 'デリケートゾーン',
            ],

            [
                'id' => 15,
                'part' => 'オプション',
            ],

            // Men`s
            [
                'id' => 16,
                'part' => 'Face',
            ],
            [
                'id' => 17,
                'part' => 'VIO',
            ],
            [
                'id' => 18,
                'part' => 'VIO + ヒップ',
            ],
            [
                'id' => 19,
                'part' => 'ALL',
            ],
            [
                'id' => 20,
                'part' => 'ALL 顔 or VIO',
            ],
            [
                'id' => 21,
                'part' => 'ALL 顔 + VIO',
            ],
            [
                'id' => 22,
                'part' => 'S parts',
            ],
            [
                'id' => 23,
                'part' => 'L parts',
            ],
            
            [
                'id' => 24,
                'part' => '疲労＆リラクゼーション',
            ],
            [
                'id' => 25,
                'part' => '痩身＆疲労＆リラクゼーション',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'e-name' => 'Esthetic',
                'j-name' => 'エステ',
                'picture' => 'img/esthetic_01.jpg',
            ],
            [
                'id' => 2,
                'e-name' => 'Eyelashes Extensions & Perm',
                'j-name' => 'マツエク & まつげパーマ',
                'picture' => 'img/eyelash_01.jpg',
            ],
            [
                'id' => 3,
                'e-name' => 'Depilation',
                'j-name' => '脱毛',
                'picture' => 'img/depilation_01.jpg',
            ],
            [
                'id' => 4,
                'e-name' => 'Wormwood steaming',
                'j-name' => 'よもぎ蒸し',
                'picture' => 'img/wormwood_01.jpg',
            ],
            [
                'id' => 5,
                'e-name' => 'Bridal',
                'j-name' => 'ブライダル',
                'picture' => 'img/bridal_01.jpg',
            ],
            [
                'id' => 6,
                'e-name' => 'Nail',
                'j-name' => 'ネイル',
                'picture' => 'img/nail_01.jpg',
            ],
        ]);

    }
}

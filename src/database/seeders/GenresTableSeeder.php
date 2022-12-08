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
                'j-name' => 'エステ'
            ],
            [
                'id' => 2,
                'e-name' => 'Eyelashes Extensions & Perm',
                'j-name' => 'マツエク & まつげパーマ'
            ],
            [
                'id' => 3,
                'e-name' => 'Depilation',
                'j-name' => '脱毛'
            ],
            [
                'id' => 4,
                'e-name' => 'Wormwood steaming',
                'j-name' => 'よもぎ蒸し'
            ],
            [
                'id' => 5,
                'e-name' => 'Bridal',
                'j-name' => 'ブライダル'
            ],
            [
                'id' => 6,
                'e-name' => 'Nail',
                'j-name' => 'ネイル'
            ],
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstheticPartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esthetic_parts')->insert([
            [
                'id' => 1,
                'name' => '各Sパーツ'
            ],
            [
                'id' => 2,
                'name' => '各Mパーツ'
            ],
            [
                'id' => 3,
                'name' => '各Lパーツ'
            ],
            [
                'id' => 4,
                'name' => 'フェイシャル'
            ],
            [
                'id' => 5,
                'name' => 'お腹【シングル】'
            ],
            [
                'id' => 6,
                'name' => 'お腹【ダブル】'
            ],
            [
                'id' => 7,
                'name' => '太もも【シングル】'
            ],
            [
                'id' => 8,
                'name' => '太もも【ダブル】'
            ],
            [
                'id' => 9,
                'name' => '腰【シングル】'
            ],
            [
                'id' => 10,
                'name' => '腰【ダブル】'
            ],
            [
                'id' => 11,
                'name' => '二の腕【シングル】'
            ],
        ]);
    }
}

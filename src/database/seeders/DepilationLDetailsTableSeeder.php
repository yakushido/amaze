<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepilationLDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilation_l_details')->insert([
            [
                'id' => 1,
                'name' => 'お顔全体'
            ],
            [
                'id' => 2,
                'name' => 'ひじ下'
            ],
            [
                'id' => 3,
                'name' => '二の腕'
            ],
            [
                'id' => 4,
                'name' => '背中上部'
            ],
            [
                'id' => 5,
                'name' => '背中下部'
            ],
            [
                'id' => 6,
                'name' => '腰'
            ],
            [
                'id' => 7,
                'name' => 'バスト全体'
            ],
            [
                'id' => 8,
                'name' => '腹部'
            ],
            [
                'id' => 9,
                'name' => 'ひざ下（ひざ含む）'
            ],
            [
                'id' => 10,
                'name' => '太もも'
            ],
            [
                'id' => 11,
                'name' => 'ヒップ'
            ],
            
        ]);
    }
}

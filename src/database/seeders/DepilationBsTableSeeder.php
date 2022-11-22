<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepilationBsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilation_b_s')->insert([
            // Sパーツ
            [
                'id' => 1,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 1,
                'name' => '単品',
                'plice' => 4400
            ],
            [
                'id' => 2,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 1,
                'name' => '4回コース',
                'plice' => 9680
            ],
            [
                'id' => 3,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 1,
                'name' => '12回コース',
                'plice' => 26400
            ],
            
            // Lパーツ
            [
                'id' => 4,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 2,
                'name' => '単品',
                'plice' => 11000
            ],
            [
                'id' => 5,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 2,
                'name' => '4回コース',
                'plice' => 24200
            ],
            [
                'id' => 6,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 2,
                'name' => '12回コース',
                'plice' => 66000
            ],
            
            // デリケートゾーン
            [
                'id' => 7,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 3,
                'name' => '単品',
                'plice' => 17600
            ],
            [
                'id' => 8,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 3,
                'name' => '12回コース',
                'plice' => 105600
            ],
            [
                'id' => 9,
                'depilation_genre_id' => 2,
                'depilation_part_id' => 3,
                'name' => '24回コース',
                'plice' => 171600
            ],
            
        ]);
    }
}

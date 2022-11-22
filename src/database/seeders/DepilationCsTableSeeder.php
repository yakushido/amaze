<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepilationCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilation_c_s')->insert([
            [
                'id' => 1,
                'depilation_genre_id' => 3,
                'name' => 'SSS',
                'plice' => 39600
            ],
            [
                'id' => 2,
                'depilation_genre_id' => 3,
                'name' => 'SSSS',
                'plice' => 49500
            ],
            [
                'id' => 3,
                'depilation_genre_id' => 3,
                'name' => 'SSL',
                'plice' => 49500
            ],
            [
                'id' => 4,
                'depilation_genre_id' => 3,
                'name' => 'SSSL',
                'plice' => 60500
            ],
            [
                'id' => 5,
                'depilation_genre_id' => 3,
                'name' => 'SLL',
                'plice' => 60500
            ],
            [
                'id' => 6,
                'depilation_genre_id' => 3,
                'name' => 'SSLL',
                'plice' => 66000
            ],
            [
                'id' => 7,
                'depilation_genre_id' => 3,
                'name' => 'LLL',
                'plice' => 66000
            ],
            [
                'id' => 8,
                'depilation_genre_id' => 3,
                'name' => 'SLLL',
                'plice' => 77000
            ],
            [
                'id' => 9,
                'depilation_genre_id' => 3,
                'name' => 'LLLL',
                'plice' => 88000
            ],
            [
                'id' => 10,
                'depilation_genre_id' => 3,
                'name' => 'LLLLL',
                'plice' => 99000
            ],
            
        ]);
    }
}

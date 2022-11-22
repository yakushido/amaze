<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalAsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridal_a_s')->insert([
            [
                'id' => 1,
                'name' => null,
                'bridal_genre_id' => 1,
                'plice' => 55000
            ],
            [
                'id' => 2,
                'name' => null,
                'bridal_genre_id' => 1,
                'plice' => 110000
            ],
            [
                'id' => 3,
                'name' => null,
                'bridal_genre_id' => 1,
                'plice' => 165000
            ],
        ]);
    }
}

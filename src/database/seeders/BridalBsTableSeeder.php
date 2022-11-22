<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalBsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridal_b_s')->insert([
            [
                'id' => 1,
                'name' => null,
                'bridal_genre_id' => 2,
                'plice' => 16500
            ],
        ]);
    }
}

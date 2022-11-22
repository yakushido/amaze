<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridal_c_s')->insert([
            [
                'id' => 1,
                'name' => null,
                'bridal_genre_id' => 3,
                'plice' => 33000
            ],
            [
                'id' => 2,
                'name' => null,
                'bridal_genre_id' => 3,
                'plice' => 55000
            ],
            
        ]);
    }
}

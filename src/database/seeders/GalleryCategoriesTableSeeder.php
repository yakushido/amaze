<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_categories')->insert([
            [
                'id' => 1,
                'name' => 'ALL',
                'genre_id' => 6,
            ],
            [
                'id' => 2,
                'name' => 'ケア',
                'genre_id' => 6,
            ],

        ]);
    }
}

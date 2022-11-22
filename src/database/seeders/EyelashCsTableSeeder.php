<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_c_s')->insert([
            [
                'id' => 1,
                'eyelash_genre_id' => 3,
                'name' => '付け替えオフ',
                'plice' => 550
            ],
            [
                'id' => 2,
                'eyelash_genre_id' => 3,
                'name' => 'オフのみ',
                'plice' => 1650
            ],
            [
                'id' => 3,
                'eyelash_genre_id' => 3,
                'name' => 'アイシャンプー',
                'plice' => 550
            ],
            
        ]);
    }
}

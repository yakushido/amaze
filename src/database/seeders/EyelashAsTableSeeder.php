<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashAsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_a_s')->insert([
            [
                'id' => 1,
                'eyelash_genre_id' => 1,
                'name' => 'フラットマッシュラッシュ',
                'plice' => 4730
            ],
            [
                'id' => 2,
                'eyelash_genre_id' => 1,
                'name' => 'ゴージャスフラットラッシュ',
                'plice' => 5830
            ],
            [
                'id' => 3,
                'eyelash_genre_id' => 1,
                'name' => 'カラー2色以上',
                'plice' => 1430
            ],
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashDsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_d_s')->insert([
            [
                'id' => 1,
                'eyelash_genre_id' => 4,
                'name' => 'デザインパーマ',
                'plice' => 4950
            ],
            [
                'id' => 2,
                'eyelash_genre_id' => 4,
                'name' => 'パリジェンヌラッシュリフト',
                'plice' => 6600
            ],
            [
                'id' => 3,
                'eyelash_genre_id' => 4,
                'name' => '下まつげパーマ単品',
                'plice' => 2750
            ],
            [
                'id' => 4,
                'eyelash_genre_id' => 4,
                'name' => '上下セット',
                'plice' => 2200
            ],
            
        ]);
    }
}

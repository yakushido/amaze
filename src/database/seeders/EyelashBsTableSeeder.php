<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashBsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_b_s')->insert([
            [
                'id' => 1,
                'eyelash_genre_id' => 2,
                'name' => 'ベーシックコース',
                'plice' => 5830
            ],
            [
                'id' => 2,
                'eyelash_genre_id' => 2,
                'name' => 'ボリュームコース',
                'plice' => 6930
            ],
            [
                'id' => 3,
                'eyelash_genre_id' => 2,
                'name' => 'リペア',
                'plice' => 3300
            ],
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NailBsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nail_b_s')->insert([
            [
                'id' => 1,
                'nail_genre_id' => 2,
                'name' => 'スカルプチュア',
                'plice' => 11330
            ],
        ]);
    }
}

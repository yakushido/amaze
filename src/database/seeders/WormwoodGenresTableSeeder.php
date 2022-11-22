<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WormwoodGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wormwood_genres')->insert([
            [
                'id' => 1,
                'name' => 'よもぎ蒸し'
            ],

        ]);
    }
}

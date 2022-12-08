<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            [
                'id' => 1,
                'gender' => 'Men`s'
            ],
            [
                'id' => 2,
                'gender' => 'Women`s'
            ],
            [
                'id' => 3,
                'gender' => 'Both'
            ],
        ]);

    }
}

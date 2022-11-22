<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepilationPartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilation_parts')->insert([
            [
                'id' => 1,
                'name' => 'Sパーツ'
            ],
            [
                'id' => 2,
                'name' => 'Lパーツ'
            ],
            [
                'id' => 3,
                'name' => 'デリケートゾーン'
            ],
            
        ]);
    }
}

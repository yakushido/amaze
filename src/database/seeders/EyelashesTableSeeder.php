<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelashes')->insert([
            [
                'id' => 1,
                'eyelash_course_id' => 1,
                'eyelash_category_id' => 1
            ],
            [
                'id' => 2,
                'eyelash_course_id' => 2,
                'eyelash_category_id' => 1
            ],
            [
                'id' => 3,
                'eyelash_course_id' => 3,
                'eyelash_category_id' => 1
            ],
            [
                'id' => 4,
                'eyelash_course_id' => 4,
                'eyelash_category_id' => 2
            ],
            [
                'id' => 5,
                'eyelash_course_id' => 5,
                'eyelash_category_id' => 2
            ],
            [
                'id' => 6,
                'eyelash_course_id' => 6,
                'eyelash_category_id' => 2
            ],
            [
                'id' => 7,
                'eyelash_course_id' => 7,
                'eyelash_category_id' => 3
            ],
            [
                'id' => 8,
                'eyelash_course_id' => 8,
                'eyelash_category_id' => 3
            ],
            [
                'id' => 9,
                'eyelash_course_id' => 9,
                'eyelash_category_id' => 3
            ],
            [
                'id' => 10,
                'eyelash_course_id' => 10,
                'eyelash_category_id' => 4
            ],
            [
                'id' => 11,
                'eyelash_course_id' => 11,
                'eyelash_category_id' => 4
            ],
            [
                'id' => 12,
                'eyelash_course_id' => 12,
                'eyelash_category_id' => 4
            ],
            [
                'id' => 13,
                'eyelash_course_id' => 13,
                'eyelash_category_id' => 4
            ],
        ]);
    }
}

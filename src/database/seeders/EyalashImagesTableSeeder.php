<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyalashImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_images')->insert([
            [
                'id' => 1,
                'eyelash_course_id' => 1,
                'picture' => 'public/img/eyelash/test_フラットラッシュ.jpg'
            ],
            [
                'id' => 2,
                'eyelash_course_id' => 4,
                'picture' => 'public/img/eyelash/test_3Dボリューム.jpg'
            ],
            [
                'id' => 3,
                'eyelash_course_id' => 10,
                'picture' => 'public/img/eyelash/test_デザインパーマ.jpg'
            ],
            [
                'id' => 4,
                'eyelash_course_id' => 11,
                'picture' => 'public/img/eyelash/test_パリジェンヌスラッシュリフト.jpg'
            ],
        ]);

    }
}

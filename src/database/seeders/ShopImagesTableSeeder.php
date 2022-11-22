<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_images')->insert([
            [
                'id' => 1,
                'name' => 'test1',
                'picture' => 'public/img/shop_img_test1.jpg',
                'category_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'test2',
                'picture' => 'public/img/shop_img_test2.jpg',
                'category_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'test3',
                'picture' => 'public/img/shop_img_test3.jpg',
                'category_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'test4',
                'picture' => 'public/img/shop_img_test4.jpg',
                'category_id' => 1,
            ],
            
        ]);
    }
}

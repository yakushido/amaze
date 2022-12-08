<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin@example.com'),
                'picture' => 'img/stuff_image_02.jpg',
                'detail' => '趣味：testtesttest'
            ],
            [
                'id' => 2,
                'name' => 'スタッフA',
                'email' => 'stuffa@example.com',
                'password' => Hash::make('stuffa@example.com'),
                'picture' => 'img/stuff_image_02.jpg',
                'detail' => '趣味：testtesttest'
            ],
            [
                'id' => 3,
                'name' => 'スタッフB',
                'email' => 'stuffb@example.com',
                'password' => Hash::make('stuffb@example.com'),
                'picture' => 'img/stuff_image_02.jpg',
                'detail' => '趣味：testtesttest'
            ],
            [
                'id' => 4,
                'name' => 'スタッフC',
                'email' => 'stuffc@example.com',
                'password' => Hash::make('stuffc@example.com'),
                'picture' => 'img/stuff_image_02.jpg',
                'detail' => '趣味：testtesttest'
            ],
            [
                'id' => 5,
                'name' => 'スタッフD',
                'email' => 'stuffd@example.com',
                'password' => Hash::make('stuffd@example.com'),
                'picture' => 'img/stuff_image_02.jpg',
                'detail' => '趣味：testtesttest'
            ]
        ]);
    }
}

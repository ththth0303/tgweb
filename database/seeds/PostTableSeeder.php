<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [
            [
                'title' => 'Molestie at elementum eu facilisis sed odio',
                'user_id' => 1,
                'content' => $faker->realText(500, 2),
                'short_description' => $faker->realText(200, 2)
            ]
        ];

        DB::table('posts')->insert($data);
    }
}

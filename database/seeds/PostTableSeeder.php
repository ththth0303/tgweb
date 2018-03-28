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
                'title' => $faker->realText(100, 2),
                'user_id' => 1,
                'content' => $faker->realText(500, 2),
                'image' => 'plugins/creative-agency/img/blog1.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => $faker->realText(100, 2),
                'user_id' => 2,
                'content' => $faker->realText(500, 2),
                'image' => 'plugins/creative-agency/img/blog1.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => $faker->realText(100, 2),
                'user_id' => 3,
                'content' => $faker->realText(500, 2),
                'image' => 'plugins/creative-agency/img/blog1.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ];

        DB::table('posts')->truncate();
        DB::table('posts')->insert($data);
    }
}

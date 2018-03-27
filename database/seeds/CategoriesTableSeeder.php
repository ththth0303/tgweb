<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'App Development',
                'description' => $faker->realText(50),
                'image' => 'https://tgweb-dev.herokuapp.com/plugins/creative-agency/img/work1.jpg',
            ],
            [
                'name' => 'Graphic Design',
                'description' => $faker->realText(50),
                'image' => 'https://tgweb-dev.herokuapp.com/plugins/creative-agency/img/work2.jpg',
            ],
            [
                'name' => 'Creative Idea',
                'description' => $faker->realText(50),
                'image' => 'https://tgweb-dev.herokuapp.com/plugins/creative-agency/img/work3.jpg',
            ],
            [
                'name' => 'Ruby Developer',
                'description' => $faker->realText(50),
                'image' => 'https://tgweb-dev.herokuapp.com/plugins/creative-agency/img/work4.jpg',
            ],
            [
                'name' => 'PHP Developer',
                'description' => $faker->realText(50),
                'image' => 'https://tgweb-dev.herokuapp.com/plugins/creative-agency/img/work5.jpg',
            ],
            [
                'name' => 'Javascript Developer',
                'description' => $faker->realText(50),
                'image' => 'https://tgweb-dev.herokuapp.com/plugins/creative-agency/img/work6.jpg',
            ],
        ];

        DB::table('categories')->truncate();
        DB::table('categories')->insert($data);
    }
}

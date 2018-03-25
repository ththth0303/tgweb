<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
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
                'title' => 'App Development',
                'icon' => 'fa fa-diamond',
                'image' => 'image.img',
                'short_description' => $faker->realText(200, 2)
            ],
            [
               'title' => 'Brand Design',
                'icon' => 'fa fa-flask',
                'image' => 'image.img',
                'short_description' => $faker->realText(200, 2)
            ],
            [
                'title' => 'Graphic Design',
                'icon' => 'fa fa-rocket',
                'image' => 'image.img',
                'short_description' => $faker->realText(200, 2)
            ],
        ];

        DB::table('services')->insert($data);
    }
}

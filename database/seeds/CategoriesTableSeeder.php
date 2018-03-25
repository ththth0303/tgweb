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
                'description' => $faker->realText(200, 2),
                'image' => 'image.img',
            ],
            [
                'name' => 'Graphic Design',
                'description' => $faker->realText(200, 2),
                'image' => 'image.img',
            ],
            [
                'name' => 'Creative Idea',
                'description' => $faker->realText(200, 2),
                'image' => 'image.img',
            ],
        ];
        
        DB::table('categories')->insert($data);
      
    }
}

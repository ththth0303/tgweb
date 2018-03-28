<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
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
                'title' => 'Fully Customizible',
                'icon' => 'fa fa-cogs',
                'image' => 'image1.img',
                'short_description' => $faker->realText(200, 2)
            ],
            [
                'title' => 'Awesome Features',
                'icon' => 'fa fa-magic',
                'image' => 'image2.img',
                'short_description' => $faker->realText(200, 2)
            ],
            [
                'title' => 'Fully Responsive',
                'icon' => 'fa fa-mobile',
                'image' => 'image3.img',
                'short_description' => $faker->realText(200, 2)
            ],
        ];

        DB::table('abouts')->truncate();
        DB::table('abouts')->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;

class WhyChooseUsTable extends Seeder
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
                'title' => 'Why Choose Us',
                'image' => json_encode([
                    $faker->imageUrl(640, 450),
                    $faker->imageUrl(640, 450),
                    $faker->imageUrl(640, 450),
                    $faker->imageUrl(640, 450),
                ], JSON_FORCE_OBJECT),
                'step' => json_encode([
                    $faker->realText(100),
                    $faker->realText(100),
                    $faker->realText(100),
                    $faker->realText(100),
                ], JSON_FORCE_OBJECT),
                'description' => $faker->realText(200, 2)
            ],
        ];

        DB::table('why_choose_us')->truncate();
        DB::table('why_choose_us')->insert($data);
    }
}

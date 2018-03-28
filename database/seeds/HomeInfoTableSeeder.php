<?php

use Illuminate\Database\Seeder;
use App\Models\HomeInfo;
use Faker\Factory as Faker;

class HomeInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        HomeInfo::truncate();
        HomeInfo::create([
            'title' => 'WE ARE CREATIVE AGENCY',
            'content' => $faker->realText(200),
            'get_start_link' => '#',
            'learn_more_link' => '#',
            'background' => 'https://tgweb-dev.herokuapp.com/plugins/creative-agency/img/background1.jpg',
        ]);
    }
}

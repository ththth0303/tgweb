<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $data = [
            [
                'name' => 'Nguyễn Văn Giang',
                'email' => 'giang@gmail.com',
                'address' => 'Hà Nội',
                'birthday' => '20/10/1991',
                'sex' => 1,
                'role_id' => 1,
                'status' => 1,
                'password' => bcrypt('123456'),
                'job' => $faker->jobTitle,
                'description' => $faker->realText(100),
                'avatar' => 'plugins/creative-agency/img/team1.jpg',
            ],
            [
                'name' => 'Ngô Trung Thắng',
                'email' => 'thang@gmail.com',
                'address' => 'Vô gia cư',
                'birthday' => '20/10/1994',
                'sex' => 1,
                'role_id' => 1,
                'status' => 1,
                'password' => bcrypt('123456'),
                'job' => $faker->jobTitle,
                'description' => $faker->realText(100),
                'avatar' => 'plugins/creative-agency/img/team2.jpg',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'address' => 'Hà Nội',
                'birthday' => '20/10/1994',
                'sex' => 1,
                'role_id' => 0,
                'status' => 1,
                'password' => bcrypt('123456'),
                'job' => $faker->jobTitle,
                'description' => $faker->realText(100),
                'avatar' => 'plugins/creative-agency/img/team3.jpg',
            ],
        ];

        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            ],
        ];

        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}

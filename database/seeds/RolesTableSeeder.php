<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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
                'name' => 'Admin',
                'access_admin' => true,
                'permission'=> json_encode(['user.add', 'user.edit', 'user.delete'])
            ],
            [
                'name' => 'User',
                'access_admin' => false,
                'permission'=> json_encode(['user.show'])
            ]
        ];

        DB::table('roles')->insert($data);
    }
}

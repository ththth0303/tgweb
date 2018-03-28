<?php

use Illuminate\Database\Seeder;
use App\Models\SocialNetwork;

class SocialNetworksTableSeeder extends Seeder
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
                'user_id' => 1,
                'type' => 1,
                'social_id' => 'giangnv1'
            ],
            [
                'user_id' => 1,
                'type' => 2,
                'social_id' => 'nvg'
            ],
            [
                'user_id' => 1,
                'type' => 3,
                'social_id' => 'giangkk'
            ],
        ];

        SocialNetwork::truncate();
        SocialNetwork::insert($data);
    }
}

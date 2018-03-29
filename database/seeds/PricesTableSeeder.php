<?php

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
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
               'title' => 'Graphic Design',
                'price' => 50,
                'unit' => '$/month',
                'price_content' => json_encode([
                    '1GB Disk Space',
                    '100 Email Account',
                    '24/24 Support',
                ]),
            ],
            [
                'title' => 'SILVER PLAN',
                'price' => 60,
                'unit' => '$/month',
                'price_content' => json_encode([
                    '10GB Disk Space',
                    '1000 Email Account',
                    '24/24 Support',
                ]),
            ],
            [
                'title' => 'GOLD PLAN',
                'price' => 69,
                'unit' => '$/month',
                'price_content' => json_encode([
                    '100GB Disk Space',
                    '10000 Email Account',
                    '24/24 Support',
                ]),
            ],
        ];

        DB::table('prices')->truncate();
        DB::table('prices')->insert($data);
    }
}

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
            ],
            [
                'title' => 'SILVER PLAN',
                'price' => 60,
                'unit' => '$/month',
            ],
            [
                'title' => 'GOLD PLAN',
                'price' => 69,
                'unit' => '$/month',
            ],
        ];

        DB::table('prices')->truncate();
        DB::table('prices')->insert($data);
    }
}

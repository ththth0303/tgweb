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
        DB::table('prices')->insert([
            'title' => 'Graphic Design',
            'price' => 50,
            'unit' => '$/month',
        ]);

        DB::table('prices')->insert([
            'title' => 'SILVER PLAN',
            'price' => 60,
            'unit' => '$/month',
        ]);
        
        DB::table('prices')->insert([
            'title' => 'GOLD PLAN',
            'price' => 69,
            'unit' => '$/month',
        ]);
    }
}

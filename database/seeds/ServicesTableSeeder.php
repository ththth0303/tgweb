<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'App Development',
            'icon' => 'fa fa-diamond',
            'image' => 'image.img',
            'short_description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.'
        ]);

        DB::table('services')->insert([
            'title' => 'Brand Design',
            'icon' => 'fa fa-flask',
            'image' => 'image.img',
            'short_description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.'
        ]);

        DB::table('services')->insert([
            'title' => 'Graphic Design',
            'icon' => 'fa fa-rocket',
            'image' => 'image.img',
            'short_description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.'
        ]);
    }
}

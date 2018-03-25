<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'Fully Customizible',
            'icon' => 'fa fa-cogs',
            'image' => 'image1.img',
            'short_description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.',
        ]);

        DB::table('abouts')->insert([
            'title' => 'Awesome Features',
            'icon' => 'fa fa-magic',
            'image' => 'image2.img',
            'short_description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.',
        ]);

        DB::table('abouts')->insert([
            'title' => 'Fully Responsive',
            'icon' => 'fa fa-mobile',
            'image' => 'image3.img',
            'short_description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.',
        ]);
    }
}

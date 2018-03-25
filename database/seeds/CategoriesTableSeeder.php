<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'App Development',
            'description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.',
            'image' => 'image.img',
        ]);
        DB::table('categories')->insert([
            'name' => 'Graphic Design',
            'description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.',
            'image' => 'image.img',
        ]);
        DB::table('categories')->insert([
            'name' => 'Creative Idea',
            'description' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.',
            'image' => 'image.img',
        ]);
    }
}

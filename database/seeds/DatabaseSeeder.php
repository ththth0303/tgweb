<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([
            UsersTableSeeder::class,
            PostTableSeeder::class,
            AboutsTableSeeder::class,
            CategoriesTableSeeder::class,
            ContactsTableSeeder::class,
            PricesTableSeeder::class,
            ServicesTableSeeder::class,
            RolesTableSeeder::class,
            HomeInfoTableSeeder::class,
            WhyChooseUsTable::class,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

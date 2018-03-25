<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'title' => 'Phone',
            'content' => '0167-560-5976',
            'icon' => 'fa fa-phone',
        ]);

        DB::table('contacts')->insert([
            'title' => 'Email',
            'content' => 'tgweb_support@gmail.com',
            'icon' => 'fa fa-envelope',
        ]);
        
        DB::table('contacts')->insert([
            'title' => 'Address',
            'content' => '13F KeangNam Landmark 72',
            'icon' => 'fa fa-map-marker',
        ]);
    }
}

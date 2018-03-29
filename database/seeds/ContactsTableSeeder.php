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
        $data = [
            [
                'title' => 'Phone',
                'content' => '0167-560-5976',
                'icon' => 'fa fa-phone',
                'link' => null,
                'social' => null,
            ],
            [
                'title' => 'Email',
                'content' => 'tgweb_support@gmail.com',
                'icon' => 'fa fa-envelope',
                'link' => null,
                'social' => null,
            ],
            [
                'title' => 'Address',
                'content' => '13F KeangNam Landmark 72',
                'icon' => 'fa fa-map-marker',
                'link' => null,
                'social' => null,
            ],
            [
                'title' => 'Facebook',
                'content' => 'Facebook',
                'icon' => 'fa fa-facebook',
                'social' => 1,
                'link' => 'https://www.facebook.com/phuong.thu.nguyen2210',
            ],
            [
                'title' => 'Twitter',
                'content' => 'Twitter',
                'icon' => 'fa fa-twitter',
                'link' => 'https://www.facebook.com/phuong.thu.nguyen2210',
                'social' => 2,
            ],
            [
                'title' => 'Google plus',
                'content' => 'Google plus',
                'icon' => 'fa fa-google-plus',
                'link' => 'https://www.facebook.com/phuong.thu.nguyen2210',
                'social' => 3,
            ],
            [
                'title' => 'Instagram',
                'content' => 'Instagram',
                'icon' => 'fa fa-instagram',
                'link' => 'https://www.facebook.com/phuong.thu.nguyen2210',
                'social' => 4,
            ],
            [
                'title' => 'Linkedin',
                'content' => 'Linkedin',
                'icon' => 'fa fa-linkedin',
                'link' => 'https://www.facebook.com/phuong.thu.nguyen2210',
                'social' => 5,
            ],
            [
                'title' => 'Youtube',
                'content' => 'Youtube',
                'icon' => 'fa fa-youtube',
                'link' => 'https://www.facebook.com/phuong.thu.nguyen2210',
                'social' => 6,
            ],
        ];

        DB::table('contacts')->truncate();
        DB::table('contacts')->insert($data);
    }
}

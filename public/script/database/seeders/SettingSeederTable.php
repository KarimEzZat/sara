<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('settings')->insert([
            'logo' => 'S A,R A',
            'favicon' => 'favicon.ico',
            'site_name' => 'Sara Laravel Portfolio',
            'skill_title' => 'I Got The Skills,',
            'skill_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quasi mollitia rem quisquam atque pariatur, a ut, amet illum quibusdam facere vitae delectus reiciendis fugit tempora esse sint deserunt dolorum.',
            'service_main_title' => 'I can make this awesome things,',
            'service_up_title' => 'MY SERVICES',
            'hire_title' => "I'm <span>avilable</span> for freelance.",
            'contact_title' => 'Say Hello <span>:)</span>',
            'contact_image' => 'contact-img.jpg',
            'phone' => '+22 12345 9012',
            'email' => 'Sara@gmail.com',
            'web_site' => 'Sara.net'
        ]);
    }
}

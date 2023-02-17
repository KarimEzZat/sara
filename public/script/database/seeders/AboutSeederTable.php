<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'title' => 'A UI/UX Designer & Developer Based in Mansoura',
                'description' => 'Hello! I’m Sara Doe. Web developer from Egypt, Mansoura. I have rich experience in web site design and building, also I am good at wordpress.',
                'image' => 'about.jpg',
                'name' => 'Sara Doe',
                'experience_year' => 10,
                'is_active' => '1',
                'city' => 'Mansoura',
                'freelance' => 'Available',
                'address' => 'Mansoura, Egypt',
            ],
        ]);
    }
}

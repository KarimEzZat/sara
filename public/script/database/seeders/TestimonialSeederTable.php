<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testimonials')->insert([
            [
                'name' => 'Ahmed EzZat',
                'image' => 'c3.jpg',
                'position' => 'CEO',
                'review' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero explicabo aut, ipsam ab sit dolore repellat modi nesciunt nihil tempora saepe quas soluta repudiandae? Et sapiente similique cumque autem ab!'
            ],
            [
                'name' => 'Sara Doe',
                'image' => 'c2.jpg',
                'position' => 'Web Designer',
                'review' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero explicabo aut, ipsam ab sit dolore repellat modi nesciunt nihil tempora saepe quas soluta repudiandae? Et sapiente similique cumque autem ab!'
            ],
            [
                'name' => 'Amr Doe',
                'image' => 'c1.jpg',
                'position' => 'Web Developer',
                'review' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero explicabo aut, ipsam ab sit dolore repellat modi nesciunt nihil tempora saepe quas soluta repudiandae? Et sapiente similique cumque autem ab!'
            ],

        ]);
    }
}

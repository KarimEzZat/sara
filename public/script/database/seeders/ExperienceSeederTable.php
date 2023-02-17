<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('experiences')->insert([
            [
                'date' => '2009 - 2010',
                'title' => 'Senior Developer',
                'icon' => 'fa fa-map-marker fa-fw',
                'organisation' => 'ABC Co.',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ],
            [
                'date' => '2011 - 2012',
                'title' => 'Front-End Developer',
                'icon' => 'fa fa-map-marker fa-fw',
                'organisation' => 'Twitter Co.',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ],
            [
                'date' => '2013 - Present',
                'title' => 'Art Director',
                'icon' => 'fa fa-map-marker fa-fw',
                'organisation' => 'Facebook Co.',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ],

        ]);
    }
}

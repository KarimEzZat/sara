<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('education')->insert([
            [
                'date' => '2004 - 2005',
                'title' => 'Web Design Course',
                'icon' => 'fa fa-map-marker fa-fw',
                'organisation' => 'Egypt.',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ],
            [
                'date' => '2005 - 2006',
                'title' => 'Programming Course',
                'icon' => 'fa fa-map-marker fa-fw',
                'organisation' => 'Nabaroh',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ],
            [
                'date' => '2006 - 2008',
                'title' => 'Art University',
                'icon' => 'fa fa-map-marker fa-fw',
                'organisation' => 'Mansoura',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ],

        ]);
    }
}

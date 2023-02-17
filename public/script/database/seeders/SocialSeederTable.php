<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('socials')->insert([
            [
                'icon' => 'fa fa-facebook',
                'link' => '#'
            ],
            [
                'icon' => 'fa fa-twitter',
                'link' => '#'
            ],
            [
                'icon' => 'fa fa-linkedin',
                'link' => '#'
            ], [
                'icon' => 'fa fa-pinterest',
                'link' => '#'
            ],
            [
                'icon' => 'fa fa-github',
                'link' => '#'
            ],

        ]);
    }
}

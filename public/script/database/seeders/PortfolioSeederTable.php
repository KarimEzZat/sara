<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('works')->insert([
            [
                'title' => 'Wildlife',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'category_id' => 1,
                'image' => '1.jpg'
            ],
            [
                'title' => 'Snow Adventure',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'category_id' => 2,
                'image' => '2.jpg'
            ],
            [
                'title' => 'Boats Trip',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'category_id' => 3,
                'img' => '3.jpg'
            ],
            [
                'title' => 'Web Design',
                'description' => 'Lorem ipsum dolor sit amet, consectcing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'category_id' => 4,
                'image' => '4.jpg'
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
            [
                'title' => 'Development',
                'description' => 'Lorem ipsum dolor sit amet, consectetr adipisicing elit, sed do eiusmod tempor incididunt.'
            ],
            [
                'title' => 'Site Optimization',
                'description' => 'Lorem ipsum dolor sit amet, consectetr adipisicing elit, sed do eiusmod tempor incididunt.'
            ],
            [
                'title' => 'Responsive',
                'description' => 'Lorem ipsum dolor sit amet, consectetr adipisicing elit, sed do eiusmod tempor incididunt.'
            ],
        ]);
    }
}

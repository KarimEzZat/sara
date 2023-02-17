<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('seo')->insert([
            [
                'name' => 'author',
                'content' => 'Karim Ezzat'
            ],
            [
                'name' => 'description',
                'content' => 'One Page Creative Personal Portfolio Laravel Script'
            ],
            [
                'name' => 'keywords',
                'content' => 'onepage, responsive, cv, resume, business, html5, css3, css3 animation, laravel, portfolio'
            ]
        ]);
    }
}

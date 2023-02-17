<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'hero_title' => 'Sara Doe',
                'animated_text' => 'Designer, Developer, photographer',
                'image' => 'avatar.jpg',
                'cv' => 'cv.html',
                'is_active' => '1'
            ],
        ]);
    }
}

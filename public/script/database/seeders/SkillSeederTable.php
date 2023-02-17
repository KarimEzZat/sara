<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skills')->insert([
            [
                'skill' => 'Mysql',
                'percent' => 40
            ],
            [
                'skill' => 'Php',
                'percent' => 55
            ],
            [
                'skill' => 'JQuery',
                'percent' => 70
            ],
            [
                'skill' => 'CSS3',
                'percent' => 65
            ],
            [
                'skill' => 'HTML5',
                'percent' => 80
            ],

        ]);
    }
}

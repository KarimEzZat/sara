<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounterSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('counters')->insert([
            [
                'title' => 'Innovation',
                'icon' => 'im im-idea',
                'number' => 370,
            ],
            [
                'title' => 'New Projects',
                'icon' => 'im im-coffee',
                'number' => 450,
            ],
            [
                'title' => 'Happy Customers',
                'icon' => 'im im-smiley-o',
                'number' => 50,
            ],
            [
                'title' => 'Awards Win',
                'icon' => 'im im-trophy',
                'number' => 90,
            ],
        ]);
    }
}

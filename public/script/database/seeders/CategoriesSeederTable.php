<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['name' => 'photography'],
            ['name' => 'Craetive Shot'],
            ['name' => 'Web Design'],
            ['name' => 'Traveling'],
        ]);
    }
}

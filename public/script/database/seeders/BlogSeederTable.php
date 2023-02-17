<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            [
                'title' => 'Ocean Discovery',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.',
                'image' => 'b3.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d')
            ],
            [
                'title' => 'Travel Abroad',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.',
                'image' => 'b2.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d')
            ],
            [
                'title' => 'Work For Success',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.',
                'image' => 'b1.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d')
            ],

        ]);
    }
}

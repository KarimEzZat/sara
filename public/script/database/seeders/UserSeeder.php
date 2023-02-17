<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role_id' => '1',
                'password' => Hash::make('password'),
                'image' => 'admin.png'
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@gmail.com',
                'role_id' => '2',
                'password' => Hash::make('password'),
                'image' => 'guest.png'
            ],
        ]);
    }
}

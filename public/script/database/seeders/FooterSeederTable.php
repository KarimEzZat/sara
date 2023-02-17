<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('footers')->insert([
            [
                'owner' => 'Sara Doe',
                'copyright' => 'Copyright ©',
                'url' => '#',
                'is_active' => 1,
            ]
        ]);
    }
}

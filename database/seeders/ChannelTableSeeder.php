<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            [
                'name' => 'php',
                'type' => 'skill',
            ],
            [
                'name' => '音楽',
                'type' => 'hobby',
            ],
        ]);
    }
}

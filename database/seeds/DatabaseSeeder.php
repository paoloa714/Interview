<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'email' => 'paolo1@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'email' => 'paolo2@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}

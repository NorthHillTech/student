<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(50),
            'email' => str_random(100).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}

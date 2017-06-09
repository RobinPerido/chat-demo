<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Robin',
            'email' => 'ledungsbacken@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'test@test.se',
            'password' => bcrypt('test123'),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            'notification' => 'test notify',
            'user_id' => 1,
            'timestamp' => time()-2,
            'read' => 0,
        ]);
        DB::table('notifications')->insert([
            'notification' => 'test',
            'user_id' => 1,
            'timestamp' => time()+4000,
            'read' => 0,
        ]);
    }
}

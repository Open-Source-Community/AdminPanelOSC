<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        \App\User::create([
            'name' => "OSC",
            'email' => "osc_geeks@osc.com",
            'password' => bcrypt("oscgeeks"),
            'phone' => 011,
            'role' => 1,
            'position_id' => 011,
        ]);
    }
}

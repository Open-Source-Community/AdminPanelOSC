<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        \App\User::create([
            'name' => "OSC",
            'email' => "oscgeeks@osc.com",
            'password' => bcrypt("oscgeeks"),
            'phone' => "",
            'role' => 1,
            'position_id' => 1,
        ]);
    }
}

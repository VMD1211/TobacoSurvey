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
        //
        factory(App\Models\User::class)->create([
            'us_firstname' => 'Admin',
            'us_lastname' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456'),
            'us_status' => 1,
            'us_role' => 1
        ]);

        factory(App\Models\User::class)->create([
            'us_firstname' => 'User Manager',
            'us_lastname' => 'User Manager',
            'username' => 'manager',
            'email' => 'user_manager@example.com',
            'password' => bcrypt('123456'),
            'us_status' => 1,
            'us_role' => 2
        ]);

        factory(App\Models\User::class)->create([
            'us_firstname' => 'User Employee',
            'us_lastname' => 'User Employee',
            'username' => 'staff',
            'email' => 'member@example.com',
            'password' => bcrypt('123456'),
            'us_status' => 1,
            'us_role' => 3
        ]);
    }
}

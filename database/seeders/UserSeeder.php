<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'Public User',
            'email' => 'user@user.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('password'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-20',
        ]);
    }
}

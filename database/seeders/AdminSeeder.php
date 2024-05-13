<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            // admin login credentials
            'name' => 'ADMINISTRATOR',
            'email' => 'admin@admin.com',
            'phone_num' => '012-3456789',
            'password' => bcrypt('admin'),
            'gender' => 'Male',
            'usertype' => 1,
            'dob' => '1980-12-08',
        ]);
    }
}

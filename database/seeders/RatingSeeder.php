<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rating::factory()->create([
            'car_id' => '10',
            'user_id' => '3',
            'rating' => '5',
            'feedback' => 'Good Car',
        ]);

        \App\Models\Rating::factory()->create([
            'car_id' => '7',
            'user_id' => '3',
            'rating' => '3',
            'feedback' => 'A lot could be improved',
        ]);

        \App\Models\Rating::factory()->create([
            'car_id' => '7',
            'user_id' => '4',
            'rating' => '5',
            'feedback' => 'Will definitely rent this car again',
        ]);

        \App\Models\Rating::factory()->create([
            'car_id' => '7',
            'user_id' => '7',
            'rating' => '5',
            'feedback' => 'The car is so clean and comfy',
        ]);
    }
}

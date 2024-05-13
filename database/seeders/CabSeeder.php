<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cab::factory()->create([
            'car_id' => NULL,
            'user_id' => '6',
            'passenger_name' => 'MUTHU A/L KUMAR',
            'passenger_email' => 'muthu@gmail.com',
            'passenger_phone_num' => '0123456789',
            'pickup_location' => 'Kuala Pahang, Pekan, Pahang',
            'pickuplatlng' => 'LatLng(3.533032, 103.459841)',
            'dropoff_location' => 'Universiti Malaysia Pahang',
            'dropofflatlng' => 'LatLng(3.541174, 103.431259)',
            'status' => 'Waiting',
            'total_distance' => 3.19,
            'total_cab_fare' => NULL,
            'created_at' => '2023-01-19 06:24:36',
            'updated_at' => '2023-01-19 06:24:36',
        ]);

        \App\Models\Cab::factory()->create([
            'car_id' => NULL,
            'user_id' => '3',
            'passenger_name' => 'KALAIVANI A/P RAMANI',
            'passenger_email' => 'kalai@gmail.com',
            'passenger_phone_num' => '01161601650',
            'pickup_location' => 'C100, Kampung Tanjung Agas, Pekan, 26600, Pahang',
            'pickuplatlng' => 'LatLng(3.495971, 103.455249)',
            'dropoff_location' => 'C106, Kampung Pahang Tua, Pulau Rusa, Pekan, 26620, Pahang',
            'dropofflatlng' => 'LatLng(3.570039, 103.344184)',
            'status' => 'Waiting',
            'total_distance' => 12.5,
            'total_cab_fare' => NULL,
            'created_at' => '2023-01-19 06:24:36',
            'updated_at' => '2023-01-19 06:24:36',
        ]);

        \App\Models\Cab::factory()->create([
            'car_id' => NULL,
            'user_id' => '4',
            'passenger_name' => 'NURAQILA BINTI ROHANAN',
            'passenger_email' => 'qila@gmail.com',
            'passenger_phone_num' => '0137709817',
            'pickup_location' => 'SAR KAFA',
            'pickuplatlng' => 'LatLng(3.511079, 103.396885)',
            'dropoff_location' => 'Royal Pahang Polo Club',
            'dropofflatlng' => 'LatLng(3.478188, 103.375341)',
            'status' => 'Waiting',
            'total_distance' => 2.53,
            'total_cab_fare' => NULL,
            'created_at' => '2023-01-19 06:24:36',
            'updated_at' => '2023-01-19 06:24:36',
        ]);
    }
}

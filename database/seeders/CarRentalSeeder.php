<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CarRental::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'car_id' => '7',
            'user_id' => '3',
            'renter_name' => 'KALAIVANI A/P RAMANI',
            'renter_phone_num' => '01161601650',
            'renter_email' => 'kalai@gmail.com',
            'rental_duration' => '3',
            'start_date' => '2023-01-18 12:05:00',
            'end_date' => '2023-01-20 12:05:00',
            'rental_status' => 'Ongoing',
            'rental_amount' => '120',
            'created_at' => '2023-01-17 04:05:20',
        ]);

        \App\Models\CarRental::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'car_id' => '5',
            'user_id' => '2',
            'renter_name' => 'NUR HASYA BINTI MOHD NORDIN',
            'renter_phone_num' => '01114909117',
            'renter_email' => 'nurhasyamohdnordin@gmail.com',
            'rental_duration' => '3',
            'start_date' => '2023-01-18 12:05:00',
            'end_date' => '2023-01-20 12:05:00',
            'rental_status' => 'Ongoing',
            'rental_amount' => '200',
            'created_at' => '2023-01-17 04:05:20',
        ]);

        \App\Models\CarRental::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'car_id' => '7',
            'user_id' => '2',
            'renter_name' => 'NUR HASYA BINTI MOHD NORDIN',
            'renter_phone_num' => '01114909117',
            'renter_email' => 'nurhasyamohdnordin@gmail.com',
            'rental_duration' => '3',
            'start_date' => '2023-02-12 12:05:00',
            'end_date' => '2023-02-13 12:05:00',
            'rental_status' => 'Completed',
            'rental_amount' => '200',
            'created_at' => '2023-01-17 04:05:20',
        ]);

        \App\Models\CarRental::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'car_id' => '9',
            'user_id' => '2',
            'renter_name' => 'NUR HASYA BINTI MOHD NORDIN',
            'renter_phone_num' => '01114909117',
            'renter_email' => 'nurhasyamohdnordin@gmail.com',
            'rental_duration' => '3',
            'start_date' => '2023-01-18 12:05:00',
            'end_date' => '2023-01-20 12:05:00',
            'rental_status' => 'Completed',
            'rental_amount' => '200',
            'created_at' => '2023-01-17 04:05:20',
        ]);

        \App\Models\CarRental::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'car_id' => '10',
            'user_id' => '2',
            'renter_name' => 'NUR HASYA BINTI MOHD NORDIN',
            'renter_phone_num' => '01114909117',
            'renter_email' => 'nurhasyamohdnordin@gmail.com',
            'rental_duration' => '3',
            'start_date' => '2023-03-13 12:05:00',
            'end_date' => '2023-03-20 12:05:00',
            'rental_status' => 'Completed',
            'rental_amount' => '200',
            'created_at' => '2023-01-17 04:05:20',
        ]);

        \App\Models\CarRental::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'car_id' => '15',
            'user_id' => '2',
            'renter_name' => 'NUR HASYA BINTI MOHD NORDIN',
            'renter_phone_num' => '01114909117',
            'renter_email' => 'nurhasyamohdnordin@gmail.com',
            'rental_duration' => '3',
            'start_date' => '2023-05-18 12:05:00',
            'end_date' => '2023-05-20 12:05:00',
            'rental_status' => 'Completed',
            'rental_amount' => '200',
            'created_at' => '2023-01-17 04:05:20',
        ]);
    }
}

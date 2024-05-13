<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '2',
            'car_color' => 'Silver',
            'car_model' => 'Perodua Axia',
            'cab_fare' => '34',
            'rental_fare' => '45',
            'car_image' => '1673760285.png',
            'cab' => 'Cab Service',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'DEF5310',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '3',
            'car_color' => 'Red',
            'car_model' => 'Perodua Myvi',
            'cab_fare' => '54',
            'rental_fare' => '100',
            'car_image' => '1673760440.png',
            'cab' => 'Cab Service',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABC1234',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '4',
            'car_color' => 'Blue',
            'car_model' => 'Proton Iriz',
            'cab_fare' => '53',
            'rental_fare' => '123',
            'car_image' => '1673759904.png',
            'cab' => 'Cab Service',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABX3321',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '5',
            'car_color' => 'Cream',
            'car_model' => 'Proton Saga',
            'cab_fare' => '53',
            'rental_fare' => '123',
            'car_image' => '1673760323.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Waiting For Approval',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '6',
            'car_color' => 'Cream',
            'car_model' => 'Perodua Alza',
            'cab_fare' => '54',
            'rental_fare' => '100',
            'car_image' => '1673759639.png',
            'rental' => 'Car Rental',
            'status' => 'Booked',
            'reg_status' => 'Approved',
            'plate_num' => 'ABC1234',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '7',
            'car_color' => 'Maroon',
            'car_model' => 'Proton Exora',
            'cab_fare' => '53',
            'rental_fare' => '125',
            'car_image' => '1673759801.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Waiting For Approval',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '8',
            'car_color' => 'Metallic Blue',
            'car_model' => 'Proton Iriz',
            'cab_fare' => '53',
            'rental_fare' => '213',
            'car_image' => '1673759904.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '9',
            'car_color' => 'White',
            'car_model' => 'Perodua Ativa',
            'cab_fare' => '53',
            'rental_fare' => '222',
            'car_image' => '1673759987.png',
            'cab' => 'Cab Service',
            'status' => 'Vacant',
            'reg_status' => 'Waiting For Approval',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '10',
            'car_color' => 'Blue',
            'car_model' => 'Perodua Myvi',
            'cab_fare' => '53',
            'rental_fare' => '50',
            'car_image' => '1673759987.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '11',
            'car_color' => 'Metallic Red',
            'car_model' => 'Perodua Aruz',
            'cab_fare' => '53',
            'rental_fare' => '80',
            'car_image' => '1673760114.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '12',
            'car_color' => 'Silver',
            'car_model' => 'Honda Civic',
            'cab_fare' => '53',
            'rental_fare' => '98',
            'car_image' => '1673760189.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Waiting For Approval',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '13',
            'car_color' => 'Silver',
            'car_model' => 'Perodua Axia',
            'cab_fare' => '53',
            'rental_fare' => '123',
            'car_image' => '1673760285.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '14',
            'car_color' => 'Cream',
            'car_model' => 'Proton Saga',
            'cab_fare' => '53',
            'rental_fare' => '123',
            'car_image' => '1673760323.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Waiting For Approval',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '15',
            'car_color' => 'Red',
            'car_model' => 'Perodua Myvi',
            'cab_fare' => '54',
            'rental_fare' => '100',
            'car_image' => '1673760440.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABC1234',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '16',
            'car_color' => 'Silver',
            'car_model' => 'Perodua Bezza',
            'cab_fare' => '53',
            'rental_fare' => '67',
            'car_image' => '1673760504.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '17',
            'car_color' => 'White',
            'car_model' => 'Honda Odyssey',
            'cab_fare' => '53',
            'rental_fare' => '300',
            'car_image' => '1673760785.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '18',
            'car_color' => 'Black',
            'car_model' => 'Honda Jazz',
            'cab_fare' => '53',
            'rental_fare' => '244',
            'car_image' => '1673760853.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '19',
            'car_color' => 'Black',
            'car_model' => 'Honda Accord',
            'cab_fare' => '53',
            'rental_fare' => '277',
            'car_image' => '1673760919.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

        \App\Models\Car::factory()->create([
            'drivers_license' => '1673942526.png',
            'ic' => '1674029362.png',
            'user_id' => '20',
            'car_color' => 'Silver',
            'car_model' => 'Perodua Axia',
            'cab_fare' => '53',
            'rental_fare' => '100',
            'car_image' => '1673760285.png',
            'rental' => 'Car Rental',
            'status' => 'Vacant',
            'reg_status' => 'Approved',
            'plate_num' => 'ABY3221',
        ]);

    }
}

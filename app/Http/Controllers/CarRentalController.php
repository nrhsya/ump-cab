<?php

namespace App\Http\Controllers;
use \App\Models\Car;
use \App\Models\CarRental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarRentalController extends Controller
{
    // rent car (insert into car rental booking)
    public function rentCarBooking(Request $request)
    {
        // add car rental booking
        CarRental::create([
            'user_id' => Auth::id(),
            'car_id' => $request->car_id,
            'drivers_license' => $request->drivers_license,
            'ic' => $request->ic,
            'renter_name' => $request->renter_name,
            'renter_email' => $request->renter_email,
            'renter_phone_num' => $request->renter_phone_num,
            'rental_amount' => $request->rental_amount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'rental_status' => $request->rental_status,
            'rental_duration' => $request->rental_duration,
        ]);

        // update status for car
        // Car::find($request->car_id)
        // ->update(['status' => "Booked"]);

        return redirect('/myBooking')->with('success', 'You have successfully booked this car!');

    }

    // display car rental details again
    public function displayConfirmDetails()
    {
        $rent_car = CarRental::whereUserId(Auth::id())->get();

        return view('user/pages/ConfirmPage', ['rent_car' => $rent_car]);
    }

    // *************************************************************
    // Sort by price
    // *************************************************************
    // highest to lowest
    public function highLow()
    {
        $data_car = Car::where('rental', '=', 'Car Rental')
        ->where('reg_status', '=', 'Approved')
        ->where('status', '=', 'Vacant')
        ->orderBy('rental_fare', 'desc')
        ->paginate(8);

        return view('user/pages/carList', ['data_car' => $data_car]);
    }

    // lowest to highest
    public function lowHigh()
    {
        $data_car = Car::where('rental', '=', 'Car Rental')
        ->where('reg_status', '=', 'Approved')
        ->where('status', '=', 'Vacant')
        ->orderBy('rental_fare', 'asc')
        ->paginate(8);

        return view('user/pages/carList', ['data_car' => $data_car]);
    }
}

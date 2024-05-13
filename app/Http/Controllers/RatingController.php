<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use App\Models\Car;
use App\Models\CarRental;
use Illuminate\Http\Request;
use \App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    // ***************************************************
    //                  CAR RENTAL
    // ***************************************************
    // display car rental details before rating
    public function displayRentalDetails($id)
    {
        $data_car = CarRental::find($id);

        return view('user/pages/RentalReview', ['data_car' => $data_car]);
    }

    // rate car rental
    public function rateRental(Request $request)
    {
        // add rating for car rental
        Rating::create([
            'car_id' => $request->car_id,
            'car_rental_id' => $request->car_rental_id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'feedback' => $request->feedback,
        ]);

        // change car rental status
        CarRental::find($request->car_rental_id)
        ->update(['rental_status' => "Completed"]);

        // change status of car rental to vacant
        Car::find($request->car_id)
        ->update(['status' => "Vacant"]);
        
        return redirect('/myBooking')->with('success', 'Thank you for rating this car!');
    }

    // ***************************************************
    //                  CAB SERVICE
    // ***************************************************

    // display cab details before rating
    public function displayCabServiceDetails($id)
    {
        $data_cab = Cab::find($id);

        return view('user/pages/CabReview', ['data_cab' => $data_cab]);
    }

    // rate cab service
    public function rateCab(Request $request)
    {
        // add rating for cab service
        Rating::create([
            'car_id' => $request->car_id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'feedback' => $request->feedback,
        ]);

        // change status of cab service to vacant
        Car::find($request->car_id)
        ->update(['status' => "Vacant"]);

        return redirect('/myBooking')->with('success', 'Thank you for rating this car');
    }

    // ***************************************************
    //                 DISPLAY RATING 
    // ***************************************************
    // display rating (on mainpage)

    // display rating (in cab booking detail)
}

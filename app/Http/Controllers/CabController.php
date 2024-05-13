<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cab;
use \App\Models\Car;
use Illuminate\Support\Facades\Auth;

class CabController extends Controller
{
    // book new cab
    public function cabBook(Request $request)
    {
        Cab::create([
            'user_id' => Auth::id(),
            'passenger_name' => $request->passenger_name,
            'passenger_email' => $request->passenger_email,
            'passenger_phone_num' => $request->passenger_phone_num,
            'pickup_location' => $request->pickup_location,
            'pickuplatlng' => $request->pickuplatlng,
            'dropoff_location' => $request->dropoff_location,
            'dropofflatlng' => $request->dropofflatlng,
            'total_distance' => $request->total_distance,
            'status' => $request->status,
        ]);

        return redirect('/myBooking')->with('success', 'Please wait for a driver to accept your request');
    }

    // book new cabs
    public function bookCab(Request $request)
    {
        // add cab booking
        Cab::create([
            'user_id' => Auth::id(),
            'car_id' => $request->car_id,
            'pickup_location' => $request->pickup_location,
            'dropoff_location' => $request->dropoff_location,
        ]);

        return view('user/pages/CabDetails')->with('success', 'You have successfully book a cab ride');
    }
}

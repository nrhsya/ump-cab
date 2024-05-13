<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rating;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    //display rental list on mainpage
    public function rentalList()
    {
        $data_car = Car::where('rental', '=', 'Car Rental')
        ->where('reg_status', '=', 'Approved')
        ->where('status', '=', 'Vacant')
        ->get();

        return view('user/mainpage/carrental', ['data_car' => $data_car]);
    }

    // display car review on mainpage
    public function reviewList()
    {
        $data_rating = Rating::all();

        return view('user/mainpage', ['data_rating' => $data_rating]);
    }
}

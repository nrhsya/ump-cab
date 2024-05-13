<?php

namespace App\Http\Controllers;

use \App\Models\Cab;
use \App\Models\Car;
use App\Models\User;
use \App\Models\Booking;
use \App\Models\CarRental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // display list of bookings for particular user
    public function displayBooking()
    {        
        $data_booking = CarRental::join('users', 'users.id', '=', 'car_rentals.user_id')
        ->join('cars', 'cars.id', '=', 'car_rentals.car_id')
        ->where('rental_status', '=', 'Waiting')
        ->orwhere('rental_status', '=', 'Ongoing')
        ->where('car_rentals.user_id', '=', Auth::id())
        ->select('car_rentals.*')
        ->get();

        $rental_history = CarRental::join('users', 'users.id', '=', 'car_rentals.user_id')
        ->join('cars', 'cars.id', '=', 'car_rentals.car_id')
        ->where('rental_status', '=', 'Completed')
        ->where('car_rentals.user_id', '=', Auth::id())
        ->select('car_rentals.*')
        ->get();
        
        $data_cab = Cab::whereUserId(Auth::id())
        ->where('status', '<>', 'Completed')
        ->get();
        // $data_cab = Cab::join('users', 'users.id', '=', 'cabs.user_id')
        // ->join('cars', 'cars.id', '=', 'cabs.car_id')
        // ->where('cabs.status', '<>', 'Completed')
        // ->where('cabs.user_id', '=', Auth::id())
        // ->select('cabs.*')
        // ->get();

        $driver_detail = Cab::join('users', 'users.id', '=', 'cabs.user_id')
        ->join('cars', 'cars.id', '=', 'cabs.car_id')
        ->where('cabs.user_id', '=', Auth::id())
        ->where('cabs.status', '=', 'Accepted')
        ->select('cabs.*')
        ->first();

        // $driver_detail = Cab::all();

        $cab_history = Cab::join('users', 'users.id', '=', 'cabs.user_id')
        ->join('cars', 'cars.id', '=', 'cabs.car_id')
        ->where('cabs.status', '=', 'Completed')
        ->where('cabs.user_id', '=', Auth::id())
        ->select('cabs.*')
        ->get();

        return view('user/pages/myBooking', compact('data_booking', 'data_cab', 'rental_history', 'driver_detail', 'cab_history'));
    }

    // *********************************************************************************
    //                           CAR OWNER
    // *********************************************************************************
    // display car rental request
    public function displayRentalRequest()
    {
        $data_rental = CarRental::join('cars', 'cars.id', '=', 'car_rentals.car_id')
        ->join('users', 'users.id', '=', 'car_rentals.user_id')
        ->where('cars.user_id', '=', Auth::id())
        // ->where('cars.status', '=', 'Booked')
        ->where('car_rentals.rental_status', '=', 'Waiting')
        ->get();

        $car_list = Car::whereUserId(Auth::id())
        ->select('cars.*')
        ->first();

        $data_cab = Cab::where('user_id', '<>', Auth::id())
        ->where('status', '=', 'Waiting')
        ->paginate(2);

        $rental_history = CarRental::join('cars', 'cars.id', '=', 'car_rentals.car_id')
        ->join('users', 'users.id', '=', 'car_rentals.user_id')
        ->where('cars.user_id', '=', Auth::id())
        ->where('car_rentals.rental_status', '=', 'Completed')
        ->get();

        $cab_history = Cab::join('cars', 'cars.id', '=', 'cabs.car_id')
        ->join('users', 'users.id', '=', 'cabs.user_id')
        ->where('cabs.user_id', '<>', Auth::id())
        ->where('cabs.status', '<>', 'Waiting')
        ->select('cabs.*')
        ->get();

        return view('user/pages/carRequest', compact('data_rental', 'data_cab', 'rental_history', 'car_list', 'cab_history'));
    }

    // accept rental request
    public function acceptRental(Request $request, $id)
    {
        // $data_rental = CarRental::find($id);

        CarRental::find($id)
        ->update([
            'rental_status' => $request->rental_status,
        ]);

        // update status for car
        Car::find($request->car_id)
        ->update(['status' => "Booked"]);

        // return view('user/pages/myBooking', ['data_rental' => $data_rental]);
        return redirect('/myBooking')->with('success', 'Car Rental Request Accepted.');
    }

    // accept cab request
    public function acceptCab(Request $request, $id)
    {
        $data_cab = Cab::find($id);
        
        Cab::find($id)
        ->update([
            'car_id' => $request->car_id,
            'total_cab_fare' => $request->total_cab_fare,
            'status' => $request->status,
        ]);

        // update status for car
        // Car::find($id)
        Car::find($request->car_id)
        ->update(['status' => "Booked"]);

        return view('user/pages/requestDetail', ['data_cab' => $data_cab])
        ->with('success', 'Do not forget to mark this ride as completed as soon as you have dropped off passenger at their destination');
        // return redirect('/requestDetail')->with('success', 'The passenger will be notified of your departure');
    }

    // complete cab request (driver)
    public function completeCab(Request $request, $id)
    {
        $data_cab = Cab::find($id);

        Cab::find($id)
        ->update([
            'status' => $request->status,
        ]);

        // Car::find($request->car_id)
        // ->update(['status' => "Vacant"]);

        // dd($carid);

        return redirect('/carRequest')->with('success', 'You have completed your ride');
        // return redirect()->back();
        // return view('user/pages/carRequest', ['data_cab' => $data_cab])->with('success', 'You have completed your ride');
    }
}

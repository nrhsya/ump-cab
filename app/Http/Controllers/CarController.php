<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Car;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /*********************************************************/
    /*                      CAR RENTAL                       */
    /*********************************************************/
    // register car for rental
    public function registerRental($id)
    {
        $data_car = Car::find($id);
        $data_car->rental='Car Rental';
        $data_car->cab=NULL;
        $data_car->save();

        return redirect()->back()->with('success', 'Your car is registered for rental');
    }

    public function viewCarRentalList()
    {
        $data_car = Car::where('rental', '=', 'Car Rental')
        ->where('reg_status', '=', 'Approved')
        ->where('status', '=', 'Vacant')
        ->paginate(8);

        return view('user/pages/carList', ['data_car' => $data_car]);
    }

    // view details of selected car
    public function viewCarDetails($id)
    {
        $data_car = Car::find($id);

        $data_rating = Rating::join('cars', 'ratings.car_id', '=', 'cars.id')
        ->join('users', 'ratings.user_id', '=', 'users.id')
        ->where('ratings.car_id', '=', $id)
        // ->select('ratings.*')
        ->paginate(2);

        // $rating_sum = Rating::join('cars', 'ratings.car_id', '=', 'cars.id')
        // ->join('users', 'ratings.user_id', '=', 'users.id')
        // ->where('ratings.car_id', '=', $id)
        // ->sum();

        // $rating_value = $rating_sum / $data_rating->count();

        // return view('user/pages/carRentalDetails', ['data_car' => $data_car]);
        // return view('user/pages/carRentalDetails', compact('data_car', 'data_rating', 'rating_value'));
        return view('user/pages/carRentalDetails', compact('data_car', 'data_rating'));
    }

    /*********************************************************/
    /*                CARPOOL (CAB SERVICE)                  */
    /*********************************************************/

    // register car for carpool (cab)
    public function registerCab($id)
    {
        $data_car = Car::find($id);
        $data_car->cab='Cab Service';
        $data_car->rental=NULL;
        $data_car->save();

        return redirect()->back()->with('success', 'Your car is registered for cab service');
    }

    // display nearby cars available for carpool
    // public function nearbyCar()
    // {
    //     $data_car = Car::where('cab', '=', 'Cab Service')
    //     ->where('reg_status', '=', 'Approved')
    //     ->where('status', '=', 'Vacant')
    //     ->paginate(2);

    //     return view('user/pages/cabServiceHomepage', ['data_car' => $data_car]);
    // }

    // display details of chosen cab
    public function displayCabDetails($id)
    {
        $data_car = Car::find($id);

        return view('user/pages/CabDetails', ['data_car' => $data_car]);
    }

    // view registered car for any particular user
    public function viewCar()
    {
        $data_car = Car::whereUserId(Auth::id())->get();
        // dd($data_car);

        return view('user/pages/DriverDashboard', ['data_car' => $data_car]);
    }
    
    // register new car into the system
    public function registerCar(Request $request)
    {
        $car = new car();

        // upload car image
        $car_image = $request->car_image;
        $carImagename = time().'.'.$car_image->getClientOriginalExtension();
        $request->car_image->move('carimage',$carImagename);
        $car->car_image = $carImagename;

        // other fields
        $car->user_id = Auth::id();

        // $car->drivers_license = $request->drivers_license;
        $drivers_license = $request->drivers_license;
        $licenseImageName = time().'.'.$drivers_license->getClientOriginalExtension();
        $request->drivers_license->move('licenseimage',$licenseImageName);
        $car->drivers_license = $licenseImageName;

        // upload ic
        $ic = $request->ic;
        $icImageName = time().'.'.$ic->getClientOriginalExtension();
        $request->ic->move('icimage',$icImageName);
        $car->ic = $icImageName;

        $car->status = $request->status;
        $car->car_model = $request->car_model;
        $car->car_color = $request->car_color;
        $car->cab_fare = $request->cab_fare;
        $car->rental_fare = $request->rental_fare;
        $car->plate_num = $request->plate_num;
        $car->reg_status = $request->reg_status;

        $car->save();

        return redirect('/DriverDashboard')->with('success', 'Please wait for your car to be Approved before making any car rental or cab service');
    }

    // edit registered cars (form)
    public function editCar($id)
    {
        $data_car = Car::find($id);        

        return view('user/pages/EditCar', ['data_car' => $data_car]);
    }

    // update car details into the DB
    public function updateCar(Request $request, $id)
    {
        $data_car = Car::find($id);

        $carImagename = '';
        if ($request->hasFile('car_image')) {
            $carImagename = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->storeAs('public/carimage', $carImagename);
        if ($data_car->image) {
            Storage::delete('public/carimage/' . $data_car->image);
        }
        } else {
            $carImagename = $data_car->image;
        }

        $data_car->update($request->all());

        return redirect('/DriverDashboard')->with('success', 'Car Details Successfully Updated');
    }

    // delete car
    public function deleteCar($id)
    {
        $data_car = Car::find($id);
        $data_car -> delete($data_car);

        return redirect('/DriverDashboard')->with('success', 'Car Successfully Deleted');
    }
}

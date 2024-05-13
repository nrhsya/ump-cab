<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use App\Models\Car;
use App\Models\CarRental;
use Illuminate\Http\Request;
use \App\Models\Fare;
use App\Models\User;

class AdminController extends Controller
{
    // *******************************************************************************
    //                           Manage Report
    // *******************************************************************************

    // calculate report
    public function calcReport()
    {
        $total_user = User::all()
        ->count();

        $total_rental = CarRental::all()
        ->count();

        $total_cab = Cab::all()
        ->count();

        return view('admin/pages/ReportInterface', compact('total_user', 'total_rental', 'total_cab'));
    }

    // *******************************************************************************
    //                             Manage User
    // *******************************************************************************

    // view list of registered cars
    function registeredCar()
    {
        $cars = Car::where('reg_status', '=', 'Approved')
        ->paginate(5);

        return view('admin/pages/CarList', ['cars' => $cars]);
    }

    function editRegisteredCar($id)
    {
        $cars = Car::find($id);

        return view('admin/pages/EditCarList', ['cars' => $cars]);
    }

    function updateRegisteredCar(Request $request, $id)
    {
        $cars = Car::find($id);
        $cars->update($request->all());

        return redirect('/CarList')->with('success', 'Car Details Updated Successfully');
    }

    function deleteRegisteredCar($id)
    {
        $cars = Car::find($id);
        $cars->delete($cars);

        return redirect('/CarList')->with('success', 'Car Successfully Deleted');
    }

    // *******************************************************************************
    //                           Manage Car Registration
    // *******************************************************************************

    // view car registration list
    public function registerList()
    {
        // $cars = Car::all()
        // ->where('reg_status', '=', 'Waiting For Approval');

        $cars = Car::where('reg_status', '=', 'Waiting For Approval')
        ->paginate(5);

        return view('admin/pages/manageCar', ['cars' => $cars]);
    }

    // approve car registration
    public function approveCar($id)
    {
        $cars = Car::find($id);
        $cars->reg_status = 'Approved';
        $cars->save();

        return redirect('/manageCar')->with('success', 'Car Registration Approved!');
    }

    // reject car registration
    public function rejectCar($id)
    {
        $cars = Car::find($id);
        $cars->reg_status = 'Rejected';
        $cars->save();

        return redirect('/manageCar')->with('failed', 'Car Registration Rejected!');
    }
}

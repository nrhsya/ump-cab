<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// redirect all users to this page (before login) - landing page
Route::get('/',[HomeController::class,'index']);

// redirect users to pages based on their user type
Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => ['auth']], function() {
    /* *********************************************************************** */
    /*                                CAR RENTAL                               */
    /* *********************************************************************** */

    //route to car rental details page
    Route::get('carRentalDetails', function () {
        return view('user/pages/carRentalDetails');
    });

    //route to Driver Details page
    Route::get('DriverDetails', function () {
        return view('user/pages/DriverDetails');
    });

    //route to rental details page
    Route::get('RentalDetails', function () {
        return view('user/pages/RentalDetails');
    });

    //route to payment details page
    Route::get('PaymentDetails', function () {
        return view('user/pages/PaymentDetails');
    });

    //route to car rental confirmation page
    Route::get('ConfirmPage', function () {
        return view('user/pages/ConfirmPage');
    });

    //route to car rental payment page
    Route::get('carRentalPayment', function () {
        return view('user/pages/carRentalPayment');
    });

    //route to car list page
    Route::get('carList', function () {
        return view('user/pages/carList');
    });

    // display car rental list
    Route::get('/carList','App\Http\Controllers\CarController@viewCarRentalList');

    // display details for selected car
    Route::get('/carRentalDetails/{id}/viewCarDetails','App\Http\Controllers\CarController@viewCarDetails');
    // Route::get('/carList/{id}/viewCarDetails','App\Http\Controllers\CarController@viewCarDetails');

    // display car details for confirmation
    Route::get('/ConfirmPage','App\Http\Controllers\CarRentalController@displayConfirmDetails');

    // book car rental
    Route::post('/ConfirmPage/rentCarBooking', 'App\Http\Controllers\CarRentalController@rentCarBooking');

    //route to myBookings page
    Route::get('myBooking', function () {
        return view('user/pages/myBooking');
    });
    
    Route::middleware(['auth', 'hasCar'])->group(function() {
        // route to car request page
        Route::get('carRequest', function () {
            return view('user/pages/carRequest');
        });
    });

    // route to request detail page
    Route::get('requestDetail', function () {
        return view('user/pages/requestDetail');
    });

    //route to myPayment page
    Route::get('myPayment', function () {
        return view('user/pages/myPayment');
    });

    // sort by price
    Route::get('highLow','App\Http\Controllers\CarRentalController@highLow');
    Route::get('lowHigh','App\Http\Controllers\CarRentalController@lowHigh');

    /* *********************************************************************** */
    /*                                CAB SERVICE                              */
    /* *********************************************************************** */

    //route to cab service homepage
    Route::get('cabServiceHomepage', function () {
        return view('user/pages/cabServiceHomepage');
    });

    // route to display nearby cars for the selected location    
    // Route::get('/cabServiceHomepage','App\Http\Controllers\CarController@nearbyCar');

    // route to display details of chosen cab
    Route::get('/CabDetails/{id}/displayCabDetails','App\Http\Controllers\CarController@displayCabDetails');

    // book new cab
    Route::post('/cabServiceHomepage/cabBook', 'App\Http\Controllers\CabController@cabBook');

    //route to Cab Details page
    Route::get('CabDetails', function () {
        return view('user/pages/CabDetails');
    });

    //route to Cab Payment page
    Route::get('CabPayment', function () {
        return view('user/pages/CabPayment');
    });

    /* *********************************************************************** */
    /*                                DRIVER                                   */
    /* *********************************************************************** */

    //route to driver dashboard page
    Route::get('DriverDashboard', function () {
        return view('user/pages/DriverDashboard');
    });

    //route to edit car rental list
    Route::get('EditCar', function () {
        return view('user/pages/EditCar');
    });

    //route to view car rental list
    Route::get('CarRentalListUser', function () {
        return view('user/pages/CarRentalList');
    });

    // register car for rental service
    Route::get('/registerRental/{id}',[CarController::class,'registerRental']);

    // register car for carpool (cab) service
    Route::get('/registerCab/{id}',[CarController::class,'registerCab']);

    // display list of cars in register car form
    // Route::get('/DriverDashboard','App\Http\Controllers\CarController@displayCarList');

    // display cars on mainpage
    // Route::get('/carrental','App\Http\Controllers\CarController@displayCar');

    // display registered car list (view)
    Route::get('/DriverDashboard','App\Http\Controllers\CarController@viewCar');

    // insert new car (register car)
    Route::post('/DriverDashboard/registerCar', 'App\Http\Controllers\CarController@registerCar');

    //edit car form
    Route::get('/DriverDashboard/{id}/editCar','App\Http\Controllers\CarController@editCar');

    //update car details to DB
    Route::post('/DriverDashboard/{id}/updateCar','App\Http\Controllers\CarController@updateCar');

    //delete
    Route::get('/DriverDashboard/{id}/deleteCar','App\Http\Controllers\CarController@deleteCar');

    /* *********************************************************************** */
    /*                                ADMIN ONLY                               */
    /* *********************************************************************** */

    // Route::middleware(['adminrestricted:admin@gmail.com'])->group(function(){
        // route to dashboard
        Route::get('AdminDashboard', function () {
            return view('admin/dashboard');
        });

        //route to report page
        Route::get('ReportInterface', function () {
            return view('admin/pages/ReportInterface');
        });

        //route to view user list
        Route::get('UserList', function () {
            return view('admin/pages/UserList');
        });

        //route to edit user list
        Route::get('EditUserList', function () {
            return view('admin/pages/EditUserList');
        });

        //route to view car rental list
        Route::get('CarList', function () {
            return view('admin/pages/CarList');
        });

        //route to edit car rental list
        Route::get('EditCarList', function () {
            return view('admin/pages/EditCarList');
        });

        //route to view cab list
        Route::get('CabList', function () {
            return view('admin/pages/CabList');
        });

        //route to edit cab list
        Route::get('EditCabList', function () {
            return view('admin/pages/EditCabList');
        });

        //route to manage cars
        Route::get('manageCar', function () {
            return view('admin/pages/manageCar');
        });

        // *****************
        // reports
        //  ****************
        // total users
        Route::get('/ReportInterface','App\Http\Controllers\AdminController@calcReport');

        // total car rental
        // Route::get('/ReportInterface','App\Http\Controllers\AdminController@calcRental');

        // total cab
        // Route::get('/ReportInterface','App\Http\Controllers\AdminController@calcCab');

        // **************
        // manage registered cars
        // **************

        // display car list
        Route::get('/CarList','App\Http\Controllers\AdminController@registeredCar');

        // edit car
        Route::get('/CarList/{id}/editRegisteredCar','App\Http\Controllers\AdminController@editRegisteredCar');

        // update car details
        Route::post('/CarList/{id}/updateRegisteredCar','App\Http\Controllers\AdminController@updateRegisteredCar');

        // delete car details
        Route::get('/CarList/{id}/deleteRegisteredCar','App\Http\Controllers\AdminController@deleteRegisteredCar');

        // **************
        // manage users
        // **************
        // display user list
        Route::get('/UserList','App\Http\Controllers\UserController@viewUserList');

        // edit user
        Route::get('/UserList/{id}/editUser','App\Http\Controllers\UserController@editUser');

        // update user details
        Route::post('/UserList/{id}/updateUser','App\Http\Controllers\UserController@updateUser');

        // delete user details
        Route::get('/UserList/{id}/deleteUser','App\Http\Controllers\UserController@deleteUser');

        // **************
        // manage car registration
        // **************
        // display list of registration for approval
        Route::get('/manageCar','App\Http\Controllers\AdminController@registerList');

        // approve car registration
        Route::get('/approveCar/{id}',[AdminController::class,'approveCar']);

        // reject car registration
        Route::get('/rejectCar/{id}',[AdminController::class,'rejectCar']);

    // });

    /* *********************************************************************** */
    /*                                  BOOKINGS                               */
    /* *********************************************************************** */

    // display list of bookings
    Route::get('/myBooking','App\Http\Controllers\BookingController@displayBooking');

    /* *********************************************************************** */
    /*                                 CAR REQUESTS                            */
    /* *********************************************************************** */
    // display car rental requests for logged in user
    Route::get('/carRequest','App\Http\Controllers\BookingController@displayRentalRequest');

    // accept rental request
    Route::post('/myBooking/{id}/acceptRental', 'App\Http\Controllers\BookingController@acceptRental');

    // accept cab requests
    // Route::post('/carRequest/{id}/acceptCab', 'App\Http\Controllers\CabController@acceptCab');
    Route::post('/requestDetail/{id}/acceptCab', 'App\Http\Controllers\BookingController@acceptCab');

    // complete cab ride (driver)
    Route::post('/carRequest/{id}/completeCab', 'App\Http\Controllers\BookingController@completeCab');
    // Route::get('/completeCab/{id}',[BookingController::class,'completeCab']);

    // display pickup and dropoff location from DB to map
    Route::get('leaflect',[BookingController::class, 'displayLocation']);

    /* *********************************************************************** */
    /*                               CAR REVIEW                                */
    /* *********************************************************************** */
    
    //route to car rental review
    Route::get('RentalReview', function () {
        return view('user/pages/RentalReview');
    });

    //route to cab review
    Route::get('CabReview', function () {
        return view('user/pages/CabReview');
    });

    // display car rental details before rating
    Route::get('/RentalReview/{id}/displayRentalDetails','App\Http\Controllers\RatingController@displayRentalDetails');

    // add car rental rating
    Route::post('/RentalReview/rateRental', 'App\Http\Controllers\RatingController@rateRental');

    // display cab service details before rating
    Route::get('/CabReview/{id}/displayCabServiceDetails','App\Http\Controllers\RatingController@displayCabServiceDetails');

    // add cab rating
    Route::post('/CabReview/rateCab', 'App\Http\Controllers\RatingController@rateCab');

    /* *********************************************************************** */
    /*                            DISPLAY ON MAINPAGE                          */
    /* *********************************************************************** */
    // display car rental list
    // Route::get('/carrental','App\Http\Controllers\MainpageController@rentalList');

    // display review list
    // Route::get('/mainpage','App\Http\Controllers\MainpageController@reviewList');
 });


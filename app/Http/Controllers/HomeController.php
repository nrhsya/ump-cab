<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    // function to redirect users to homepage based on the user type
    public function redirect()
    {
        if(Auth::id())
        {
            // for regular users (UMP students)
            if(Auth::user()->usertype=='0')
            {
                return view('user.dashboard.dashboard');
            }

            // for ADMIN
            else
            {
                // return view('admin.dashboard');
                // return view('admin.pages.ReportInterface');
                return view('admin.dashboard');
            }
        }

        else
        {
            return redirect()->back();
        }
    }

    // function to redirect everyone to this page (before login)
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
            // redirect to landing page
            return view('user.mainpage');
        }

        // return view('user.dashboard');
    }

}

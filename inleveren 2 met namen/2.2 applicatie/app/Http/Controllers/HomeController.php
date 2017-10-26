<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *return the right view on basis of auth user
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->name == 'admin')
        {
            return redirect()->route('admin');
        }
        else if (Auth::user()->name == 'sales')
        {

            return redirect()->route('sales');

        }
        else if (Auth::user()->name == 'finance')
        {
            return redirect()->route('finance');
        }
        else if(Auth::user()->name == 'development')
        {
            return redirect('development');
        }


        else {
            return view('home');
        }
    }
}

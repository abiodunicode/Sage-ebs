<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
//The controller is for Platform as a service
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function platform()
    {
        return view('users.home');
    }
    public function vps()
    {
        return view('users.vessel-planning');
    }
      public function shippinginv()
    {
        return view('users.shipping-invoice');
    }
    
      public function customer()
    {
        return view('users.customer-service');
    }

    
    
    
}

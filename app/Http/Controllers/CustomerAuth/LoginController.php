<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'customer/CargoTracking';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('admin',['except' =>['customershipschedule']]);
        $this->middleware('guest:customer')->except('logout');
        
    }
    

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route('customer.login'));
    }

    protected function guard(){
        return auth()->guard('customer');
    }
    
    public function showLoginForm()
    {
        return view('customer-auth.login');
    }
}

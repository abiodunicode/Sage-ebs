<?php

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

// Route::get('/', function () {
//     return view('landing.index');
// });

Route::view('/', 'landing/index');
Route::view('/panel', 'ebs/index');
Route::view('/two', 'welcome');


//Route::view('/customer', 'customer.index');


//Route::view('/vps', 'users.vessel-planning');


Auth::routes(['verify' => true]);

Route::get('profile', function () {
  
})->middleware('verified');



//Platform Services 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/platform', 'HomeController@platform')->name('platform')->middleware('verified');
Route::get('/vps', 'HomeController@vps')->name('vps')->middleware('verified');
Route::get('/platform/customer', 'HomeController@customer')->name('customer-p')->middleware('verified');
Route::get('/platform/shipping-invoice', 'HomeController@shippinginv')->name('shipping-invoice-p')->middleware('verified');



// Authentication Routes for admin...
Route::group(['prefix'=>'admin'], function() {

    
    // Login Routes admin...
Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
Route::post('login', ['uses' => 'AdminAuth\LoginController@login']);
Route::post('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);


// Registration Routes...
 Route::get('register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm'])->middleware('admin');
 Route::post('register', ['uses' => 'AdminAuth\RegisterController@register']);
    
// Password Reset Routes...
 Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
 Route::post('password/email', ['as' => 'password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
 Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
 Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'AdminAuth\ResetPasswordController@reset']);


 
 // Ship schedule route Route...

    });
// Authentication Routes for customer...
Route::group(['prefix'=>'customer'], function() {

    
    // Login Routes customer...
Route::get('login', ['as' => 'customer.login', 'uses' => 'CustomerAuth\LoginController@showLoginForm']);
Route::post('login', ['uses' => 'CustomerAuth\LoginController@login']);
Route::post('logout', ['as' => 'customer.logout', 'uses' => 'CustomerAuth\LoginController@logout']);


// Registration customer...
Route::get('register', ['as' => 'customer.register', 'uses' => 'CustomerAuth\RegisterController@showRegistrationForm']);
 Route::post('register', ['uses' => 'CustomerAuth\RegisterController@register']);
    
// Password Reset Routes...
 Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'CustomerAuth\ForgotPasswordController@showLinkRequestForm']);
 Route::post('password/email', ['as' => 'password.email', 'uses' => 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail']);
 Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'CustomerAuth\ResetPasswordController@showResetForm']);
 Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'CustomerAuth\ResetPasswordController@reset']);


 


    });
    Route::resource('shipschedule', 'ShipscheduleController')->middleware('admin');
    //Route::resource('admin', 'AdminController');




    Route::post('/shipschedule/update', 'ShipscheduleController@update');
    
    Route::get('/admin/home', 'AdminController@index')->middleware('admin');
    Route::get('/admin/users', 'AdminController@showusers')->middleware('admin');
    //Route::get('admin.destroy', 'AdminController@destroy')->middleware('admin');
    Route::get('/admin/admins', 'AdminController@showadmins')->middleware('admin');
    Route::get('/customer/shipschedule', 'ShipscheduleController@customershipschedule');
    //Route::get('/customer/showshipschedule', 'ShipscheduleController@customershow');
    //Route::view('/admin/createschedule', 'admin.createschedule');
   // Route::get('/admin/createschedule', 'AdminController@store');

//   Route::view('/admin/test', '.showschedule');



//customer routes
Route::view('customer/CargoTracking', 'customer/cargo-tracking');  
Route::view('customer/Ship-Arrival-Departure', 'customer/Ship-Arrival-Departure');
Route::view('customer/Invoice-estimate-online-payment', 'customer/Invoice-estimate-online-payment');
Route::view('customer/Get-invoices-Estimates', 'customer/Get-invoices-Estimates');
//customer routes with middleware->customer
Route::view('customer/Request-Cargo-Examination', 'customer/Request-Cargo-Examination')->middleware('customer');
Route::view('customer/Request-Cargo-Joint-Inspection', 'customer/Request-Cargo-Joint-Inspection')->middleware('customer');
Route::view('customer/Request-Cargo-Transfer', 'customer/Request-Cargo-Transfer')->middleware('customer');
Route::view('customer/Request-Cargo-Stepdown', 'customer/Request-Cargo-Stepdown')->middleware('customer');
Route::view('customer/Request-VGM', 'customer/Request-VGM')->middleware('customer');
Route::view('customer/Pay-my-invoice-online', 'ccustomer/Pay-my-invoice-online')->middleware('customer');



    
  



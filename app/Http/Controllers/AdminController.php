<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class AdminController extends Controller
{
    //

    public function index()
    {
        $users = DB::table('users')->get();

        return view('admin.home', ['users' => $users]);
    }

    public function showusers()
    {
        $users = DB::table('users')->paginate(10);

        return view('admin.users-table', ['users' => $users]);
    }

    public function showadmins()
    {
        $admins = DB::table('admins')->paginate(10);

        return view('admin.admin-table', ['admins' => $admins]);
    }

    
    
    public function createschedule()
    {
      

        return view('admin.createschedule');
    }

    public function destroy(Admin $admin)
    {
        //
        $findadmin = Admins::find( $admin->id);
		if($findadmin->delete()){
            
            //redirect
            return redirect()->route('admin.admin-table')
            ->with('success' , 'Company deleted successfully');
        }
        return back()->withInput()->with('error' , 'Company could not be deleted');
    
    }

}

<?php

namespace App\Http\Controllers;

use App\Shipschedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShipscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $shipschedules = DB::table('shipschedules')->paginate(5);

        return view('admin.scheduledb', ['shipschedules' => $shipschedules]); 
       
    }

    public function customershipschedule()
    {
       
        $shipschedules = DB::table('shipschedules')->orderBy('updated_at','desc')->paginate(10);

        return view('customer.index', ['shipschedules' => $shipschedules]); 
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Shipschedule $shipschedule)
    {
        //admin.createschedule
        return view( 'admin.createschedule',['shipschedule'=>$shipschedule]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    if (!Auth::guard('admin')->check()){
        $shipschedule = shipschedule::create([
            'vessel_name' => $request->input('vessel_name'),
            'vessel_voyage' => $request->input('vessel_voyage'),
            'vessel_line' => $request->input('vessel_line'),
            'vessel_status' => $request->input('vessel_status'),
            'vessel_port' => $request->input('vessel_port'),
            'vessel_terminal' => $request->input('vessel_terminal'),
            'vessel_arrival_date' => $request->input('vessel_arrival_date'),
            'vessel_berthing_time' => $request->input('vessel_berthing_time'),
            'vessel_departure_time' => $request->input('vessel_departure_time'),
           
        ]);
        if($shipschedule){
            return redirect()->route('shipschedule.index', ['shipschedule'=> $shipschedule->id])
            ->with('success' , 'Schedule created successfully');
        }
    
    
        return back()->withInput()->with('errors', 'Error creating new company');
    // }
    // return redirect()->route('admin/login', ['shipschedule'=> $shipschedule->id])
    //         ->with('success' , 'kindly Login here');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Shipschedule  $shipschedule
     * @return \Illuminate\Http\Response
     */
    public function show(Shipschedule $shipschedule)
    {
        //
        $shipschedule = Shipschedule::find($shipschedule->id );
        //$company = Company::find($company->id );
        return view( 'admin.showschedule',['shipschedule'=>$shipschedule]);
    }
    // public function customershow(Shipschedule $shipschedule)
    // {
    //     //
    //     $shipschedule = Shipschedule::find($shipschedule->id );
    //     //$company = Company::find($company->id );
    //     return view( 'customer.showschedule',['shipschedule'=>$shipschedule]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipschedule  $shipschedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipschedule $shipschedule)
    {
        $company = Shipschedule::find($shipschedule->id );
        //$company = Company::find($company->id );
        return view( 'admin.updateschedule',['shipschedule'=>$shipschedule]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipschedule  $shipschedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipschedule $shipschedule)
    {
        //
         //
         $scheduleUpdate = Shipschedule::where('id', $shipschedule->id)
         ->update([
             'vessel_name' => $request->input('vessel_name'),
             'vessel_voyage' => $request->input('vessel_voyage'),
             'vessel_line' => $request->input('vessel_line'),
             'vessel_status' => $request->input('vessel_status'),
             'vessel_port' => $request->input('vessel_port'),
             'vessel_terminal' => $request->input('vessel_terminal'),
             'vessel_arrival_date' => $request->input('vessel_arrival_date'),
             'vessel_berthing_time' => $request->input('vessel_berthing_time'),
             'vessel_departure_time' => $request->input('vessel_departure_time'),
         ]);
 if($scheduleUpdate){
 return redirect()->route('shipschedule.index', ['shipschedule'=> $shipschedule->id])
 ->with('success' , 'Company updated successfully');
 }
 //redirect
 return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipschedule  $shipschedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipschedule $shipschedule)
    {
        //
        $findshipschedule = Shipschedule::find( $shipschedule->id);
		if($findshipschedule->delete()){
            
            //redirect
            return redirect()->route('shipschedule.index')
            ->with('success' , 'Company deleted successfully');
        }
        return back()->withInput()->with('error' , 'Company could not be deleted');
    
    }
}

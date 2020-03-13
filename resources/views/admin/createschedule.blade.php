@extends('layouts.admin-custom')

@section('content')

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    




                    @include('admin.inc.sidebar')

        <div id="page-wrapper">
        <style>
        input{
          text-transform:uppercase;
        }
       
        </style>
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Create Ship Schedule</h3>
  	    <div class="well1 white ">
        
        <div class="row">
        <div class="col-md-8 col-lg-8 ">

        <form method="post" action="{{route('shipschedule.store')}}" class="form-horizontal">
        {{csrf_field()}}
							
        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Vessel Name</label>
									<div class="col-sm-8">
										<input 
                    type="text" 
                    class="form-control1"
                    required
                    id="vessel_name"
                    name="vessel_name"
                    required
                    spellcheck="false" 
                    
                    placeholder=" Enter Vessel name e.g COSCO PISCES">
									</div>
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Voyage #</label>
									<div class="col-sm-8">
										<input type="text" 
                    class="form-control1"
                    id="vessel_voyage"
                    required
                    name="vessel_voyage"
                    spellcheck="false" 
                    
                    placeholder="Enter Voyage number e.g V.284">
									</div>
									
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Line</label>
									<div class="col-sm-8">
										<input type="text" 
                    class="form-control1"
                    id="vessel_line"
                    required
                    name="vessel_line"
                    spellcheck="false" 
                    
                    placeholder="">
									</div>
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
										<input type="text" 
                    class="form-control1" 
                    id="vessel_status"
                    required
                    name="vessel_status"
                    spellcheck="false"
                    
                    placeholder="">
									</div>
								</div>


              	<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Port</label>
									<div class="col-sm-8">
										<input type="text" 
                    class="form-control1"
                    id="vessel_port"
                    required
                    name="vessel_port"
                    spellcheck="false"
                     
                    placeholder="">
									</div>	
								</div>

              

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Terminal</label>
									<div class="col-sm-8">
										<input type="text" 
                    id="vessel_terminal"
                    required
                    name="vessel_terminal"
                    spellcheck="false"
                    class="form-control1" 
                    
                    placeholder="">
									</div>
									
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ETA</label>
									<div class="col-sm-8">
									<input type="date" 
                  class="form-control1 ng-invalid ng-invalid-required" 
                  ng-model="model.date" 
                  id="vessel_arrival_date"
                    name="vessel_arrival_date"
                  required="">
									</div>
									
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Berthing Time</label>
									<div class="col-sm-8">
										<input type="time" 
                    class="form-control1" 
                    name="vessel_berthing_time"
                    placeholder="">
									</div>
									
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Depature Time</label>
									<div class="col-sm-8">
										<input type="time" 
                    class="form-control1" 
                    name="vessel_departure_time"
                    id="focusedinput" 
                    placeholder="">
									</div>
									
								</div>
							
                <div style="margin-left:125px;" class="form-group ">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
							
							
							
							</form>
        </div>
        <div class="col-md-4 col-lg-4 ">
       
        </div>

      </div>
    </div>
 
   </div>
      </div>
              
      
       


@endsection


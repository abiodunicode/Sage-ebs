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
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 
    
     <div class="grid_3 grid_5">
     <h3>{{$shipschedule->vessel_name}} {{$shipschedule->vessel_voyage}} </h3>
       <div class="but_list">
	    <div class="col-md-6 page_1">
			
              <table class="table table-bordered">
				<thead>
					<tr>
						<th width="50%">Line</th>
						<th width="50%">{{$shipschedule->vessel_line}}</th>
					</tr>
				</thead>
				<tbody>
				<th width="50%">Status</th>
						<th width="50%">{{$shipschedule->vessel_status}}</th>
					<tr>
					<th width="50%">Port</th>
						<th width="50%">{{$shipschedule->vessel_port}}</th>
					</tr>
					<tr>
          <th width="50%">Terminal</th>
						<th width="50%">{{$shipschedule->vessel_terminal}}</th>
					</tr>
					<tr>
						<th width="50%">Date</th>
						<th width="50%" >{{$shipschedule->vessel_arrival_date}}</th>
					</tr>
					<tr>
						<th width="50%">Berthing Time</th>
						<th width="50%">{{$shipschedule->vessel_berthing_time}}</th>
					</tr>
					<tr>
						<th width="50%">Depature Time</th>
						<th width="50%"> {{$shipschedule->vessel_departure_time}}</th>
					</tr>
				</tbody>
			  </table>                    
		</div>
		
	   </div>
	   <div class="clearfix"> </div>
	   </div>
     </div>
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


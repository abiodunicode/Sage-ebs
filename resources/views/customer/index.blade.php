@extends('layouts.customer-app')

@section('content')

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    




                    @include('customer.inc.sidebar')

		<div id="page-wrapper">
        <div style="background-image: url(https://sebsone.com/img/blur1.jpg);" class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Ship Schedule</h3>
  	
   <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>#</th>
          <th>Vessel & Voyage</th>
          <th>Arriving At</th>
          <th>Liner</th>
          
          <th>Arrival (ETA)</th>
          
          
        </tr>
      </thead>
      <tbody>
	  @foreach ($shipschedules as $shipschedule)
		        <tr>
            
        </i>
		          <th scope="row">{{$shipschedule->id}}</th>
              <td scope="row">{{$shipschedule->vessel_name}} {{$shipschedule->vessel_voyage}}</td>
		         
		          <td>{{$shipschedule->vessel_terminal}}</td>
		          <td>{{$shipschedule->vessel_line}}</td>
              
              <td>{{$shipschedule->vessel_arrival_date}} {{$shipschedule->vessel_berthing_time}}</td>
              
			     
		        </tr>
            @endforeach
      </tbody>
    </table>
    {{ $shipschedules->links() }}
    </div>
    
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


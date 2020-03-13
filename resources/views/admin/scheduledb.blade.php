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
          <th><a href="/shipschedule/create"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></a></th>
          
        </tr>
      </thead>
      <tbody>
	  @foreach ($shipschedules as $shipschedule)
		        <tr>
            
        </i>
		          <th scope="row">{{$shipschedule->id}}</th>
              <td scope="row"><a href="/shipschedule/{{$shipschedule->id}}">{{$shipschedule->vessel_name}} {{$shipschedule->vessel_voyage}}</a></td>
		         
		          <td>{{$shipschedule->vessel_terminal}}</td>
		          <td>{{$shipschedule->vessel_line}}</td>
              
              <td>{{$shipschedule->vessel_arrival_date}} {{$shipschedule->vessel_berthing_time}}</td>
              
			  <td>
        <span><a style="color:blue; margin-right:10px;" href="shipschedule/{{$shipschedule->id}}/edit"><i class="fa fa-pencil-square-o  fa-lg " aria-hidden="true"></i></a>
        
        <a style="color:red;"  
href="#"
    onclick="
    var result = confirm('Are you sure you wish to delete this Company?');
        if( result ){
                event.preventDefault();
                document.getElementById('delete-form').submit();
        }
            "
            >
        <i class="fa fa-times fa-lg " aria-hidden="true">
        </i>
        </a>
        <form id="delete-form" action="{{ route('shipschedule.destroy',[$shipschedule->id]) }}" 
  method="POST" style="display: none;">
          <input type="hidden" name="_method" value="delete">
          {{ csrf_field() }}
</form>
        
        </span>
       
         </td>     
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


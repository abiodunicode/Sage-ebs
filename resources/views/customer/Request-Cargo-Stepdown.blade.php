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
  	 <h3>Request Cargo Stepdown</h3>
  	<h1>
  </h1>
   <div class="panel-body1">
   
    </div>
    
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


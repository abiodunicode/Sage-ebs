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
  	 <h3>Ship Arrival/Departure</h3>
  	<h1>
  </h1>
   <div class="panel-body1">
   <iframe height='500px' width='100%' frameborder='0' allowTransparency='true' scrolling='auto' src='https://creator.zohopublic.com/sageplatform/ebs/report-embed/web_view_vsl_arrival_departure_embed/h7XRN0OdhvPe3AOxKnv63v2ZzOuZvbmC8Nk7pnsOGX8AMR8GunSTzMj16RC03hemNEZXbKVOfjDOA9B825a4jw8OvzUhX6ZGbUOw'></iframe>

</div>
    
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


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
  	 <h3>Request Cargo Transfer</h3>
  	<h1>
  </h1>
   <div class="panel-body1">
   <iframe height='500px' width='100%' frameborder='0' allowTransparency='true' scrolling='auto' src='https://creator.zohopublic.com/sageplatform/ebs/form-embed/Cargo_Transfer_Request_Form/mN4xC7Dd0YuZaUuZRfnjYuwTfP5xHqbHjrmG7afMtK3tQVV2M89WuFfFsCeUUaXjkRphAsFRYaNaqDwUk9b2aCRVGCzar20B32kG'></iframe>
    </div>
    
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


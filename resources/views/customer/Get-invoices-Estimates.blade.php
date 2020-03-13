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
  	 <h3>Invoice Estimates</h3>
  	<h1>
  </h1>
   <div class="panel-body1">
 <iframe height='500px' width='100%' frameborder='0' allowTransparency='true' scrolling='auto' src='https://creator.zohopublic.com/sageplatform/ebs/form-embed/Get_Estimated_Invoice/KAwNkOUZABrC8DQUC3jSOKmqQsah2RS84QbKgFOGQ0hpn7kkZxC0SrxAK2uOyE67Ch0mdAOnuZmt0r8HfsBWWbf1yFJ3XJOrBQyX'></iframe>
</div>
    
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


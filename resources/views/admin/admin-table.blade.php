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
  	 <h3>Admins Tables</h3>
  	
   <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>#</th>
          <th>User</th>
          <th>Email</th>
          <th>Created at</th>
         
        </tr>
      </thead>
      <tbody>
	  @foreach ($admins as $admin)
		        <tr>
           
		          <th scope="row">{{$admin->id}}</th>
		          <td>{{$admin->name}}</td>
		          <td>{{$admin->email}}</td>
              <td>{{$admin->created_at}}</td>
            
		
		        
           
		        </tr>
            @endforeach
      </tbody>
    </table>
    {{ $admins->links() }}
    </div>
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


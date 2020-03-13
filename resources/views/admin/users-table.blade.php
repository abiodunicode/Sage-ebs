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
  	 <h3>Platform Users</h3>
  	
   <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>#</th>
          <th>Full Name</th>
          <th>Company</th>
          <th>Department</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
	  @foreach ($users as $user)
		        <tr>
           
		          <th scope="row">{{$user->id}}</th>
		          <td>{{$user->fullname}}</td>
		          <td>{{$user->company}}</td>
              <td>{{$user->department}}</td>
              <td>{{$user->email}}</td>
			  
		        
           
		        </tr>
            @endforeach
      </tbody>
    </table>
    {{ $users->links() }}
    </div>
   

   
  </div>
  
   </div>
   
   
      </div>

      
              
      
       


@endsection


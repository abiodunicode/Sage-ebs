@extends('layouts.custom')

@section('content')

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    




 @include('users.inc.sidebar')
          <!-- /.sidebar-collapse -->
        </div>

              
      
        <div id="page-wrapper">
       <div class="graphs-2">
       <div class="xs">
         <h3>Customer Service Module Training</h3>
            <div class="col-md-12 email-list1">
             <ul class="collection">
                  
                  
                      
             <li class="collection-item avatar email-unread">
                     <div class="row">
                     <div class="col-md-4">
                      <i class="icon_4"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">CSM 101 FULL COURSE(How to Register, Add, Print, Queue and Verify an Agent) </span>
                        <p class="truncate grey-text ultra-small">Sage EBS</p>
               
                      </div>
                      
                      </div>

                      <div class="col-md-8">
                    <iframe width="740" height="315" src="https://www.youtube.com/embed/9SWGAKYesOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="clearfix"> </div>
                      </div>
                </li>

                
                 
              </ul>
      
        </div>

        
        
        
        
       
            </div>
           
            

        

       

        

        

            <div class="clearfix"> </div>
            
       </div>
     
   </div>



@endsection


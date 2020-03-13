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
         <h3>Sage Intacct Training</h3>
            <div class="col-md-6 email-list1">
             <ul class="collection">
                  
                  
                      
             <li class="collection-item avatar email-unread">
                      <i class="icon_4"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 300</span>
                        <p class="truncate grey-text ultra-small">Sage Intacct Overview</p>
                      </div>
                      <a href="http://pcebs.com/sage_ebs_app/ebs_training_videos/PIIS_Course_300_Sage_Intacct_Overview.mp4" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 301</span>
                        <p class="truncate grey-text ultra-small">Sage Intacct Dashboard</p>
                      </div>
                      <a href="http://pcebs.com/sage_ebs_app/ebs_training_videos/PIIS_Course_301_Sage_Intacct_Dashboard.mp4" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li  class=" collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 303 </span>
                        <p class="truncate grey-text ultra-small">Dimension</p>
                      </div>
                      <a href="http://pcebs.com/sage_ebs_app/ebs_training_videos/PIIS_Course_302_Dimensions.mp4" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                      <li style="margin-top:20px;" class=" collection-item avatar email-unread">
                      <i class="icon_4"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 401 </span>
                        <p class="truncate grey-text ultra-small">AP Payment Accelerator</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                   
                    
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 402</span>
                        <p class="truncate grey-text ultra-small">AR Payment Accelerator</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li class="collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 403 </span>
                        <p class="truncate grey-text ultra-small">Cash Bank Reconcialitaion</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                     <li style="margin-top:20px;" class=" collection-item avatar email-unread">
                      <i class="icon_4"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 404 </span>
                        <p class="truncate grey-text ultra-small">Purchase Order</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                      <li style="margin-top:20px;" class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 405</span>
                        <p class="truncate grey-text ultra-small">Inventory</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li class="collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 406 </span>
                        <p class="truncate grey-text ultra-small">Qoute To Cash Projects</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
              </ul>
      
        </div>
        
        
        
        <div class="col-md-6 inbox_right">
         
  <ul class="collection">
                  
                  
  <li class="collection-item avatar email-unread">
                      <i class="icon_4"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 407</span>
                        <p class="truncate grey-text ultra-small">Collection</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 408</span>
                        <p class="truncate grey-text ultra-small">Fixed Assects</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li  class=" collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 409 </span>
                        <p class="truncate grey-text ultra-small">VAT</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                      <li style="margin-top:20px;" class=" collection-item avatar email-unread">
                      <i class="icon_4"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">PIIS Course 410</span>
                        <p class="truncate grey-text ultra-small">Closing Account Month End</p>
                      </div>
                      <a href=" "onclick="myFunction()""" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">SI 101</span>
                        <p class="truncate grey-text ultra-small">Sage Intacct Product Part 1</p>
                      </div>
                      <a href="http://pcebs.com/sage_ebs_app/ebs_training_videos/Sage_Intacct_Product_Part_1.mp4 " class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li class="collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">SI 102 </span>
                        <p class="truncate grey-text ultra-small">Sage Intacct Product Part 2</p>
                      </div>
                      <a href=" http://pcebs.com/sage_ebs_app/ebs_training_videos/Sage_Intacct_Product_Part_2.mp4" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                     <li style="margin-top:20px;" class=" collection-item avatar email-unread">
                      <i class="icon_4"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">SI 103 </span>
                        <p class="truncate grey-text ultra-small">Sage Intacct Product Part 3</p>
                      </div>
                      <a href="http://pcebs.com/sage_ebs_app/ebs_training_videos/Sage_Intacct_Product_Part_3.mp4" class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                      <li style="margin-top:20px;" class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">SI 104</span>
                        <p class="truncate grey-text ultra-small">Sage Intacct Product Part 4</p>
                      </div>
                      <a href=" http://pcebs.com/sage_ebs_app/ebs_training_videos/Sage_Intacct_Product_Part_4.mp4"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
                    <li class="collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6"><i class="fa fa-video-camera" aria-hidden="true"></i></i>
                      <div class="avatar_left">
                        <span class="email-title">VAT</span>
                        <p class="truncate grey-text ultra-small">On Demand</p>
                      </div>
                      <a href=" "onclick="myFunction()"" " class="secondary-content"><span class="blue-text ultra-small">view now >></span></a>
                      <div class="clearfix"> </div>
                    </li>
                    
              </ul>
               </div>
            </div>
            <div class="clearfix"> </div>
       </div>
     
   </div>



@endsection


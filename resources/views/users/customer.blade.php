@extends('layouts.customtemp')

@section('content')
<div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul style="margin-top: -32px;" class="nav menu-css" id="side-menu">
              <li>
                <a style="color: #fff;" href=""
                  ><i class="fa fa-user fa-fw nav_icon"></i>Customer Portal</a
                >
              </li>
              <li>
                <a style="color: #fff;" href="#"
                  ><i class="fa fa-laptop nav_icon"></i>Services<span
                    class="fa arrow"
                  ></span
                ></a>
                <ul class="nav nav-second-level">
                  <li style="color: #fff;">
                    <a style="color: #fff;" href="grids.html"
                      >Ship Arrival/Departure</a
                    >
                   
                    <a style="color: #fff;" href="grids.html"
                      >Cargo Tracking
                    </a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a style="color: #fff;" href="#"
                  ><i class="fa fa-users nav_icon"></i>Customer Requests<span
                    class="fa arrow"
                  ></span
                ></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a style="color: #fff;" href="grids.html"
                      >Request VGM (Weighbridge)</a
                    >
                    <a style="color: #fff;" href="grids.html"
                      > Request Cargo Examination</a
                    >
                    <a style="color: #fff;" href="grids.html"
                      >Request Cargo Joint Inspection</a
                    >
                    <a style="color: #fff;" href="grids.html">Request Cargo Transfer</a>
                    <a style="color: #fff;" href="grids.html"
                      > Request Cargo Stepdown</a
                    >
                  </li>
                   
  
   
   
  
                
                </ul>
                <!-- /.nav-second-level -->
              </li>
               <li>
                <a style="color: #fff;" href="#"
                  ><i class="fa fa-user fa-fw nav_icon"></i>Login</a
                >
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>

              
      
        <div id="page-wrapper">
        <div class="graphs-2">
	     <div class="xs">
  	   
  	        



        <div class="col-md-12 inbox_right">
            <h4>Ship Arrival/Departure</h4>
         	<form action="#" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control1 input-search" placeholder="Vessel Name...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- Input Group -->
            </form>
            <div class="mailbox-content">
               
                <table class="table">
                    <tbody>
                      <tr class="unread checked">
                        <td class="">
                            Vessel Name :
                        </td>
                        
                        
                        <td>
                            
                        </td>
                        
                       
                    </tr>
                    <tr class="unread checked">
                        <td class="">
                            Lane :
                        </td>
                        
                        
                        <td>
                            
                        </td>
                        
                       
                    </tr>
                    <tr class="unread checked">
                        <td class="">
                            Status :
                        </td>
                        
                        
                        <td>
                            
                        </td>
                        
                       
                    </tr>
                        
                    </tbody>
                </table>
                
               </div>

               <div style="margin-top: 10px;" class="mailbox-content">
               
                  <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                         
                        </thead>
                        <tbody>
                          <p style="font-size: 13px;"> Full Schedule</p>
                          <tr>
                            <th scope="row">Port</th>
                            <td>Voyage #</td>
                            <td>Terminal</td>
                            <td>Arrival Time</td>
                            <td>Berthing Time</td>
                            <td>Departure Time</td>
                            
                          </tr>
                         
                        
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                
               </div>

               <div style="margin-top: 10px;" class="mailbox-content">

                <p id="preview"  style="font-size: 13px;"> <i class="fa fa-arrow-down"></i>Tracking</p>
               
                <div iclass="table-responsive">
                    <table    id="div1" class="table table-bordered">
                      <thead>
                       
                      </thead>
                      <tbody>
                       
                        <tr >
                          <th scope="row">Port</th>
                          <td>B/L Number </td>
                          <td>Ship ID</td>
                          <td>Arrival Date</td>
                          <td>Cargo Status</td>
                          <td>Cargo Location</td>
                          <td>Container</td>
                          <td>No of units</td>
                          <td>Description</td>
                          <td>Release Status</td>
                          <td>Delivery Status</td>
                          <td>Transaction Code</td>
                          
                        </tr>
                       
                      
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
              
             </div>
            
               
            </div>
            <div class="clearfix"> </div>
       </div>
  
   </div>
      </div>



@endsection


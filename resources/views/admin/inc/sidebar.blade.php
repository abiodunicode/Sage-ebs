<div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul style="margin-top: -32px;" class="nav menu-css" id="side-menu">
			<li>
                <a style="color: #fff;" href="{{ url('/admin/users') }}"
                  ><i class="fa fa-user fa-fw nav_icon"></i>Admin Panel</a
                >
              </li>
                    <li>
                <a style="color: #fff;" href="{{ url('/admin/users') }}"
                  ><i class="fa fa-video-camera fa-fw nav_icon"></i>Platform Services Users</a
                >
              </li>
			  <li>
                            <a style="color: #fff;" href="#"><i class="fa fa-ship nav_icon"></i>Ship Arrival/Depature<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a style="color: #fff;" href="{{ url('/shipschedule/create') }}">Create new</a>
                                </li>
                               
								<li>
                                    <a style="color: #fff;" href="{{ url('/shipschedule')}}">Table</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a style="color: #fff;" href="#"><i class="fa fa-user nav_icon"></i>Admin Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a style="color: #fff;" href="{{ url('/admin/register') }}">Create new</a>
                                </li>
                               
								<li>
                                    <a style="color: #fff;" href="{{ url('/admin/admins')}}">Table</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
           
            
               
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
<nav
        class="top1 navbar navbar-default navbar-static-top"
        role="navigation"
        style="margin-bottom: 0"
      >

      @include('users.inc.app')

        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul style="margin-top: -32px;" class="nav menu-css" id="side-menu">
              <li>
                <a style="color: #fff;" href="#"
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
                <a style="color: #fff;" href="logout.php"
                  ><i class="fa fa-user fa-fw nav_icon"></i>Logout</a
                >
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>
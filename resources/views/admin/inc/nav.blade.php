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
                    <a style="color: #fff;" href="welcome.php"
                      >Ship Arrival/Departure</a
                    >
                   
                    <a style="color: #fff;" href="welcome.php"
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
                    <a style="color: #fff;" href="home.php"
                      >Request VGM (Weighbridge)</a
                    >
                    <a style="color: #fff;" href="home.php"
                      > Request Cargo Examination</a
                    >
                    <a style="color: #fff;" href="home.php"
                      >Request for Cargo Joint Inspection</a
                    >
                    <a style="color: #fff;" href="home.php">   Request Cargo Joint Inspection</a>
                    <a style="color: #fff;" href="home.php"
                      > Request Cargo Transfer</a
                    >
                     <a style="color: #fff;" href="home.php"
                      > Request Cargo Stepdown</a
                    >
                  </li>
                
                </ul>
                <!-- /.nav-second-level -->
              </li>
               <li>
                <a style="color: #fff;" href="home.php"
                  ><i class="fa fa-user fa-fw nav_icon"></i>Login</a
                >
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>

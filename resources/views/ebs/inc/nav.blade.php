<nav
        class="top1 navbar navbar-default navbar-static-top"
        role="navigation"
        style="margin-bottom: 0"
      >
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="{{ url('/') }}"
            ><h3>
              <span style="color: green;">Sage</span>
              <span style="color: rgb(23, 230, 23);">EBS Platform</span>
            </h3></a
          >
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a
              href="#"
              class="dropdown-toggle avatar"
              data-toggle="dropdown"
            ></a>
          </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul style="margin-top: -32px;" class="nav menu-css" id="side-menu">
              <li>
                <a style="color: #fff;" href="#"
                  ><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a
                >
              </li>
              <li>
                <a style="color: #fff;" href="{{ url('/admin/users') }}"
                  ><i class="fa fa-user fa-fw nav_icon"></i>Admin</a
                >
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
       
        <!-- /.navbar-static-side -->
      </nav>
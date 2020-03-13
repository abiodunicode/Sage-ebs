
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Customer') }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
    $('#div1').hide();
    $('#preview').on('click', function() {
            $('#div1').toggle(300);
    });
});

    
      </script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name=""
    />
    <style>
      .list-p {
        font-size: 20px;
        color: green;
      }
    </style>
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('ebs') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('ebs') }}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ebs') }}/css/font-awesome.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="{{ asset('ebs') }}/js/jquery.min.js"></script>

    <style>
      p {
        color: black;
      }
    </style>
    <!----webfonts--->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900"
      rel="stylesheet"
      type="text/css"
    />
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('ebs') }}/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <!-- Navigation -->

      <!-- start menu bar -->
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
          <a class="navbar-brand " href="{{ url('/panel') }}"
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
          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           
                       
           <li class="dropdown">
              <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">{{ Auth::user()->fullname }}<span class="badge">*</span></a>
              <ul class="dropdown-menu">
            <li class="dropdown-menu-header text-center">
              <strong>Account</strong>
            </li>
            <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> {{ Auth::user()->company }}, {{ Auth::user()->department }}   <span class="label label-info">*</span></a></li>
          
            <li class="dropdown-menu-header text-center">
              <strong>Settings</strong>
            </li>
            <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
 
            <li class="divider"></li>
          
            <li class="m_2"><a href="{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"> <i class="fa fa-lock"></i> {{ __('Logout') }}</a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>  
              </ul>
            </li>
            @endguest
        </ul>
<!-- /.end menu bar -->
       
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>

      
      @yield('content')
    <!-- /#wrapper -->
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
    <link href="{{ asset('ebs') }}/css/custom.css" rel="stylesheet" />
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('ebs') }}/js/metisMenu.min.js"></script>
    <script src="{{ asset('ebs') }}/js/custom.js"></script>
  </body>
</html>
<script>
function myFunction() {
  alert("Available on Demand!");
}
</script>


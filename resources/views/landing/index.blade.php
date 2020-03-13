<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style>
      #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

</style>

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sage EBS Platform</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('frontend')}}/css/coming-soon.css" rel="stylesheet">

  </head>

  <body style="background:url({{asset('frontend')}}/img/bg-mobile-fallback.jpg)">
  <video autoplay muted loop id="myVideo">
  <source src="{{asset('frontend')}}/mp4/bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

    <div class="overlay"></div>

    <div class="masthead">
      
      <div class="masthead-bg"><h1 style="font-family:Arial, Helvetica, sans-serif, serif;color:white;padding-left: 25px;padding-top: 40px;font-style: normal;font-size: 26pt;">
        <p style="font-size:11pt;">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
        Sage EBS Platform
        <p style="font-size:11pt;">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
        </h1>
        <style>
        @media only screen and (max-width: 768px) {
          .masthead-bg h1 {
              transform: rotate(-4deg);
              font-size: 20pt !important;
          }
          .masthead-bg p {
              font-size: 7pt !important;
            }
            } 
        </style>
      </div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 style="margin-top:650px ;margin-top:650px;"  class="mb-3">

                 
                  <img src="{{asset('frontend')}}/img/1.png" class="responsive-img" />
              </h1>
              <style>
              @media screen only and (max-width:2560px;) and (min-width:1000){
                .responsive-img{
                  margin-top:-500px !important;
                }
              }
              </style>
              <p class="mb-5">
                <strong></p>
                  
            </div>

          </div>

        </div>
       
      </div>
      
    </div>

    <div class="social-icons">
           <ul class="list-unstyled text-center mb-0">
       
       
        <li class="list-unstyled-item">
          <a href="{{ url('/panel') }}">
            <i class="fa fa-user"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{URL::asset('frontend/vendor/vide/jquery.vide.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ URL::asset('frontend/js/coming-soon.min.js') }}"></script>
    
    <script>
var video = document.getElementById("myVideo");


function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
  </body>

</html>



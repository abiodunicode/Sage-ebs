

<!DOCTYPE html>

<html>
  <head>
    <title>Customer Portal| EBS</title>
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
    <link href="{{asset('ebs')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{asset('ebs')}}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('ebs')}}/css/font-awesome.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="{{asset('ebs')}}/js/jquery.min.js"></script>

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
    <script src="{{asset('ebs')}}/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrapper">
     
    @include ('users.inc.nav')

      <!-- Navigation -->
     








      <div id="page-wrapper">
       
      @include ('users.inc.menu')

       
   <!-- /#cut here -->
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
    <link href="{{asset('ebs')}}/css/custom.css" rel="stylesheet" />
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('ebs')}}/js/metisMenu.min.js"></script>
    <script src="{{asset('ebs')}}/js/custom.js"></script>
  </body>
</html>


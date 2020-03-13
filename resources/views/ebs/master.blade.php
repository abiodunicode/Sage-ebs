<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title_area')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="keywords"
      content=""
    />
    <style>
      .list-p {
        font-size: 20px;
        color: green;
      }
    </style>
@yield ('css_js')

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
    <script src="{{asset('ebs')   }}js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <!-- Navigation -->
      @include ('ebs.inc.nav')
      <div id="page-wrapper">
      @include ('ebs.inc.menu')
        </div>
      </div>
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
    <link href="{{asset('ebs')   }}/css/custom.css" rel="stylesheet" />
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('ebs')   }}/js/metisMenu.min.js"></script>
    <script src="{{asset('ebs')   }}/js/custom.js"></script>
  </body>
</html>

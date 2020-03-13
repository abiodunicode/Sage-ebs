@extends('ebs.master')

@section('title_area')
SAGE| EBS
@endsection

@section('css_js')
<script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('ebs')   }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{asset('ebs')   }}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('ebs')   }}/css/font-awesome.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="{{asset('ebs')   }}/js/jquery.min.js"></script>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$settings->site_name}} | {{$title}}</title>
    <link rel="icon" href="{{ asset('storage/app/public/photos/'.$settings->favicon)}}" type="image/png"/>
   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <!-- Bootstrap CSS File -->
    <link href="{{ asset ('temp/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
        <link href="{{ asset ('temp/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('temp/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('temp/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('temp/lib/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset ('temp/lib/icofont/icofont.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('temp/lib/jquery/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{ asset ('temp/lib/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset ('temp/lib/venobox/venobox.css')}}" rel="stylesheet">
        <link href="{{ asset ('temp/lib/icofont/icofont.min.css')}}" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link href="{{asset('temp/css/frontend_style_blue.css')}}" rel="stylesheet">
        
        <!-- JavaScript Libraries -->
        
        <script src="{{ asset('temp/lib/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('temp/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('temp/lib/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('temp/lib/php-email-form/validate.js')}}"></script>
        <script src="{{ asset('temp/lib/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('temp/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{ asset('temp/lib/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('temp/lib/venobox/venobox.min.js')}}"></script>
        <script src="{{ asset('temp/lib/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('temp/lib/aos/aos.js')}}"></script>

        <!-- Template Main Javascript File -->
        <script src="{{ asset('temp/js/main.js')}}"></script>
  <style>
   
    .omb_login .omb_socialButtons a {
      color: white; // In yourUse @body-bg 
      opacity:0.9;
    }
    .omb_login .omb_socialButtons a:hover {
        color: white;
      opacity:1;    	
    }
    .omb_login .omb_socialButtons .omb_btn-facebook {background: #3b5998;}
    .omb_login .omb_socialButtons .omb_btn-google {background: #c32f10;}


    .omb_login .omb_loginOr {
      position: relative;
      font-size: 1.5em;
      color: #aaa;
      margin-top: 1em;
      margin-bottom: 1em;
      padding-top: 0.5em;
      padding-bottom: 0.5em;
    }
    .omb_login .omb_loginOr .omb_hrOr {
      background-color: #cdcdcd;
      height: 1px;
      margin-top: 0px !important;
      margin-bottom: 0px !important;
    }
    .omb_login .omb_loginOr .omb_spanOr {
      display: block;
      position: absolute;
      left: 50%;
      top: -0.6em;
      margin-left: -1.5em;
      background-color: white;
      width: 3em;
      text-align: center;
    }	
    
    .omb_login .omb_loginForm .input-group.i {
      width: 2em;
    }
    .omb_login .omb_loginForm  .help-block {
        color: red;
    }

      
    @media (min-width: 768px) {
        .omb_login .omb_forgotPwd {
            text-align: right;
        margin-top:10px;
      }		
    }	
  </style>

</head>
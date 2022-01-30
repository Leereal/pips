<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{$settings->site_name}} | @yield('title')</title>
        
        
        <link rel="icon" href="{{ asset('storage/app/public/photos/'.$settings->favicon)}}" type="image/png"/>
        @section('styles')
           
            <link href="{{ asset('temp/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- Icons -->
            <link href="{{ asset('temp/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        
            <link rel="stylesheet" href="{{ asset('temp/css/line.css')}}">
            
            <!-- Main Css -->
            <link href="{{ asset('temp/css/style.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('temp/css/colors/default.css')}}" rel="stylesheet">
        @show
    </head>
    <body class="h-100 bg-soft-primary">
       @yield('content')

       @section('scripts')
          <script src="{{ asset('temp/js/jquery-3.5.1.min.js')}}"></script>
            <script src="{{ asset('temp/js/bootstrap.bundle.min.js')}}"></script>
            
            <!-- SLIDER -->
            <script src="{{ asset('temp/js/owl.carousel.min.js')}}"></script>
            <script src="{{ asset('temp/js/owl.init.js')}}"></script>
            <!-- Icons -->
            <script src="{{ asset('temp/js/feather.min.js')}}"></script>
            <script src="{{ asset('temp/js/bundle.js')}}"></script>
            
            <script src="{{ asset('temp/js/app.js')}}"></script>
            <script src="{{ asset('temp/js/widget.js')}}"></script>
       @show
    </body>
</html>

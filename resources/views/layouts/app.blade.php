<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default Page Title')</title>


    <meta name="description" content="@yield('meta-description', 'BriskBrain.')">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- style -->
   
    <link rel="icon" href="{{ asset('assets/frontend/img/favicon.png') }}" type="image/png">
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">
    


</head>

<body>

    <div id="app">

        @include('layouts.inc.frontend-navbar')

        <main class="">
            @yield('content')


        </main>

        @include('layouts.inc.frontend-footer')
    </div>
    <!-- Scripts -->

    <script type="text/javascript" src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/bxslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.easypiechart.min.js') }}"></script>

    
    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");
    </script>
</body>

</html>

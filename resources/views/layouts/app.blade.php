<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="@yield('meta-title', 'BriskBrain')">
    <meta name="description" content="@yield('meta-description', 'BriskBrain.')">
    <title>@yield('title', 'BriskBrain')</title>

     <!-- Styles -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito">
    <link rel="icon" href="{{ asset('assets/frontend/img/favicon.png') }}" type="image/png">
    
     <!-- Bootstrap and custom styles -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfEgM4oAAAAALDWpJG5Q-2Sen21W0037I_zwUnp" async defer></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5WG5Q6J');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Analytics (gtag.js) code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WZLRWZ535F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WZLRWZ535F');
    </script>    

    <!-- Other meta tags, title, and styles go here -->

</head>

<body>

    <div id="app">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WG5Q6J" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
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
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>


    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");
    </script>
    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable();
        });
    </script>
</body>

</html>

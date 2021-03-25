<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{  asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{  asset('css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{  asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{  asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{  asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{  asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{  asset('css/style.css')}}" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('extra-css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    @include('partials.header')
     
     @yield('content')
    
    @include('partials.footer')
    @yield('extra-js')
    <!-- Js Plugins -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{  asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{  asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{  asset('js/jquery.dd.min.js')}}"></script>
    <script src="{{  asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>
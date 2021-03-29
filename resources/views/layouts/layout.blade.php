<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm Project</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">  
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">  
    <link rel="stylesheet" href="{{asset('css/default.css')}}">  
    <link rel="stylesheet" href="{{asset('css/switcher.css')}}">  
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">  
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">  
</head>
<body>
<div class="opening-animation-1"></div>
<div class="opening-animation-2"></div>
<div class="opening-animation-3"></div>

{{View::make('components.header')}}
@yield('content')
{{View::make('components.footer')}}
    

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/navigation.js')}}"></script>
    <script src="{{asset('js/navigation.fixed.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/tabs.min.js')}}"></script>
    <script src="{{asset('js/slick-plugin.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/switcher.js')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
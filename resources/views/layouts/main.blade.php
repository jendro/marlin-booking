
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Marlin Booking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">	 -->
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo">
                                <a href="{{ route('test1.index') }}">
                                    <img src="{{ asset('images/logo.png') }}" style="height:50px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            @include('layouts.component.navigations')
                        </div>
                    </div>
                    
                </div>
            </div>
        </nav>

        
        @yield('content')
	

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>


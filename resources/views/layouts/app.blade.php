<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('layouts.meta')

    <!-- Bootstrap Css -->
	<link href="/builtup/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="/builtup/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="/builtup/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="/builtup/css/all.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="/builtup/css/animate.css" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="/builtup/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/builtup/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="/builtup/css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="/builtup/images/loader.png" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- Jquery Library File -->
    <script src="/builtup/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/builtup/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/builtup/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/builtup/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/builtup/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/builtup/js/jquery.waypoints.min.js"></script>
    <script src="/builtup/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/builtup/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/builtup/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/builtup/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/builtup/js/gsap.min.js"></script>
    <script src="/builtup/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/builtup/js/SplitText.js"></script>
    <script src="/builtup/js/ScrollTrigger.min.js"></script>
    <!-- Wow js file -->
    <script src="/builtup/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="/builtup/js/function.js"></script>
	<script src="../../assets/js/theme-panel.js"></script>
</body>
</html>
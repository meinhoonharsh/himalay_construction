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

    <!-- Footer Start -->
	<footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <figure>
                                <img src="/builtup/images/footer-logo.svg" alt="">
                            </figure>
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Content Start -->
                        <div class="footer-content">
                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                        </div>
                        <!-- Footer Content End -->
                    </div>

                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Footer Quick Links Start -->
                    <div class="footer-links">
                        <h3>our services</h3>
                        <ul>                            
                            <li><a href="#">building construction</a></li>
                            <li><a href="#">architecture design</a></li>
                            <li><a href="#">building renovation</a></li>
                            <li><a href="#">flooring & roofing</a></li>
                            <li><a href="#">building maintenance</a></li>
                        </ul>
                    </div>
                    <!-- Footer Quick Links End -->
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>company</h3>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">faqs</a></li>
                            <li><a href="#">contact us</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Footer Contact Info Box Start -->
                    <div class="footer-links footer-contact-box">
                        <h3>contact us</h3>
                        <!-- Info Box Start -->
                        <div class="footer-info-box">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="/builtup/images/icon-phone.svg" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <p>+1 809 120 6705</p>
                        </div>
                        <!-- Info Box End -->

                        <!-- Info Box Start -->
                        <div class="footer-info-box">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="/builtup/images/icon-mail.svg" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <p>info@domain.com</p>
                        </div>
                        <!-- Info Box End -->

                        <!-- Info Box Start -->
                        <div class="footer-info-box">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="/builtup/images/icon-location.svg" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <p>37 San Juan Lane Graaf Florisstraat 22A,3021 CH</p>
                        </div>
                        <!-- Info Box End -->
                    </div>
                    <!-- Footer Contact Info Box End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2024 BuiltUp. All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-6 col-md-5">
                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
	</footer>
	<!-- Footer End -->

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
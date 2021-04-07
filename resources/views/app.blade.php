<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/bundle.css?v='.time()) }}">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <header class="res-header-sm">
        <div class="header-top-wrapper theme-bg-2">
            <div class="container">
                <div class="header-top">
                    <div class="header-info">
                        <span>Contact us - 00 221 225 123-30  or  <a href="#">info@domain.com</a></span>
                    </div>
                    <div class="book-login-register">
                        <ul>
                            <li><a href="#"><i class="ti-user"></i>login</a></li>
                            <li><a href="#"><i class="ti-settings"></i>register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom clearfix">
            <div class="container">
                <div class="header-bottom-wrapper">
                    <div class="logo-2 ptb-40">
                        <a href="{{ url('/') }}">
                            <h1> FERRETERIA ANTONIO</h1>
                        </a>
                    </div>
                    <div class="menu-style-2 book-menu menu-hover">
                        <nav>
                            <ul>
                                <li><a href="{{ url('/') }}">home</a>
                                    
                                </li>
                                <li><a href="{{ url('/add') }}">agregar</a>
                                    
                                </li>
                                <li><a href="{{ url('/listar') }}">listar</a>
                                    
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    <!-- header end -->
    @yield('content')
    
    <footer class="footer-area">
        <div class="footer-top-area gray-bg-5 pt-105 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-2">Ezone Boos</h3>
                            <div class="footer-info-wrapper">
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p>77 Seventh Streeth, Banasree.
                                            <br>USA -215568</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-headphone-alt"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p>+880 1124 22365 2223
                                            <br>+880 1124 22365 5455</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p><a href="#">domain@company.com</a>
                                            <br><a href="#">company@domain.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40 pl-70">
                            <h3 class="footer-widget-title-2">USeful Links</h3>
                            <div class="footer-widget-content-2">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="#">Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-2">Shopping</h3>
                            <div class="footer-widget-content-2">
                                <ul>
                                    <li><a href="#">How to buy</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Shipment</a></li>
                                    <li><a href="#">Tracking</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-40 pl-30">
                            <h3 class="footer-widget-title-2">Find US</h3>
                            <div id="footer-map" class="footer-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>
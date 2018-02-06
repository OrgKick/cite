<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fugiat - Material Design HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- FontsOnline -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>

    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- LOADER -->
<div id="loader">
    <div class="loader">
        <div class="position-center-center"> <img src="images/logo.png" alt="" >
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
</div>

<!-- Page Wrapper -->
<div id="wrap">

    <!-- Top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="col-md-6">
                <ul class="row">
                    <li class="margin-right-20">
                        <p><i class="fa fa-envelope-o margin-right-10"></i>Info@Domain.com</p>
                    </li>
                    <li class="margin-right-20">
                        <p><i class="fa fa-phone margin-right-10"></i> +01 123 456 78</p>
                    </li>
                    <li>
                        <p><i class="fa fa-user margin-right-10"></i> Account</p>
                    </li>
                </ul>
            </div>

            <!-- Social Icon -->
            <div class="col-md-6 text-right social-top">
                <!-- Social Icon -->
                <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                    <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header coporate-header">
        <div class="sticky">
            <div class="container">
                <div class="logo"> <a href="/"><img src="images/logo.png" alt=""></a> </div>

                <!-- Nav -->
                <nav>
                    <ul id="ownmenu" class="ownmenu">
                        <li class="active"><a href="/">HOME</a>
                        </li>

                        <li><!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown" role="menu">
                                    <li>
                                        <a href="/user">
                                            User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            </li>
                    </ul>
                </nav>
                <a href="#." class="waves-effect waves-ripple any-help z-depth-1">any help?</a> </div>
        </div>
    </header>
    <!-- End Header -->

    @yield('content')
    <footer>
        <div class="container">
            <div class="row">

                <!-- About -->
                <div class="col-md-3"> <img class="margin-bottom-20" src="images/logo-footer.png" alt="" >
                    <p>Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly. Hills that is.</p>

                    <!-- Social Icon -->
                    <ul class="social-icons">
                        <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#."><i class="fa fa-google"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>

                <!-- Our Services -->
                <div class="col-md-3">
                    <h5>Our Services</h5>
                    <ul class="links">
                        <li><a href="#.">Wed Design</a></li>
                        <li><a href="#."> Wed Development</a></li>
                        <li><a href="#."> SEO Optimization</a></li>
                        <li><a href="#."> Web Analytics</a></li>
                        <li><a href="#."> Digital Marketing</a></li>
                    </ul>
                </div>

                <!-- useful links -->
                <div class="col-md-3">
                    <h5>useful links</h5>
                    <ul class="links">
                        <li><a href="#.">About us</a></li>
                        <li><a href="#."> Why Choose Us</a></li>
                        <li><a href="#."> Our Services</a></li>
                        <li><a href="#."> Contact Us</a></li>
                        <li><a href="#."> Site Map</a></li>
                        <li><a href="#."> Partners</a></li>
                        <li><a href="#."> Help Topics</a></li>
                    </ul>
                </div>

                <!-- flickr -->
                <div class="col-md-3">
                    <h5>flickr</h5>
                    <ul class="flicker">
                        <li><a href="#."><img class="img-responsive" src="images/flicker-1.jpg" alt="" ></a></li>
                        <li><a href="#."><img class="img-responsive" src="images/flicker-2.jpg" alt="" ></a></li>
                        <li><a href="#."><img class="img-responsive" src="images/flicker-3.jpg" alt="" ></a></li>
                        <li><a href="#."><img class="img-responsive" src="images/flicker-4.jpg" alt="" ></a></li>
                        <li><a href="#."><img class="img-responsive" src="images/flicker-5.jpg" alt="" ></a></li>
                        <li><a href="#."><img class="img-responsive" src="images/flicker-6.jpg" alt="" ></a></li>
                    </ul>
                </div>
            </div>

            <!-- Links -->
            <ul class="bottom-links">
                <li><a href="#.">Home </a></li>
                <li><a href="#."> about us </a></li>
                <li><a href="#."> services </a></li>
                <li><a href="#."> Portfolio</a></li>
                <li><a href="#."> blog </a></li>
                <li><a href="#."> contact us</a></li>
            </ul>

            <!-- Rights -->
            <div class="rights">
                <p>© 2015 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</div>
<!-- End Page Wrapper -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<!-- JavaScripts -->
<script src="js/vendors/jquery/jquery.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/vendors/bootstrap.min.js"></script>
<script src="js/vendors/materialize.min.js"></script>
<script src="js/vendors/own-menu.js"></script>
<script src="js/vendors/jquery.prettyPhoto.js"></script>
<script src="js/vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="js/vendors/jquery.isotope.min.js"></script>
<script src="js/vendors/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

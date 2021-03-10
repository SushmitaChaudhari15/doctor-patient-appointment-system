<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-style.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-responsive.css')}}">
    <title>HealthCare - Telemedicine &amp; Telehealth Services</title>
    <link rel="icon" type="image/png" href="{{asset('front_assets/favicons/img-favicon.png')}}">
</head>

<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>


    <header class="header-area">
        <div class="top-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-list">
                            <li>
                                <i class="flaticon-clock"></i>
                                Mon-Fri 09-18.00
                            </li>
                            <li>
                                <i class="flaticon-phone-call"></i>
                                <a href="tel:821-456-241">Call Us: +821-456-241</a>
                            </li>
                            <li>
                                <i class="flaticon-paper-plane"></i>
                                <a href="/cdn-cgi/l/email-protection#2a424f4646456a43444c4504494547"><span
                                        class="__cf_email__"
                                        data-cfemail="573f323b3b38173e3931387934383a">[email&nbsp;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="top-social">  
                         @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                
                    @auth
                    <span class="text-white">
                    
                     {{ Auth::user()->name }}
                     </span>
                    <li>
                    <form method="POST" action="{{ route('logout') }}" style=" padding: 15px 18px;">
                            @csrf
                            
                            <a href="{{ route('logout') }}" class="sign-in"  onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Logout') }}
								<!-- Logout -->
                            </a>
                        </form>
                               
                            </li>
                            <li>
                         
                           <a href="{{url('patient/manage_patient_profile')}}/{{Auth::user()->id}}"> <span class="text-white ">Profile</span>  </a> 
                            </li>
                        <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> -->
                    @else
                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> -->

                        @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> -->
                            <li>
                                <a href="{{ route('login') }}" class="log-in">
                                   Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}" class="sign-in">
                                   Register
                                </a>
                            </li>
                        @endif
                        
                    @endauth
                </div>
            @endif 
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{url('user/dashboard')}}">
                                <!-- <img src="images/img-logo.png" alt="logo"></a> -->
                                <h2>HealthCare</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light"><a class="navbar-brand" href="{{url('/user/dashboard')}}">
                            <!-- <img src="images/img-logo.png" alt="logo"> -->
                            <h2>HealthCare</h2>

                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{url('user/dashboard')}}" class="nav-link @yield('home_select')">
                                        Home                                       
                                    </a>                                   
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('about')}}" class="nav-link @yield('about_select')">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('services')}}" class="nav-link @yield('services_select')">
                                        Services
                                        <!-- <i class="fa fa-angle-down"></i> -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('contact')}}" class="nav-link @yield('contact_select')">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <div class="others-options">
                                <a href="{{url('appointment')}}" class="default-btn">
                                    Get a Quote
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    @section('container')
     @show
    
    <section class="footer-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>HealthCare</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore aliqua.</p>
                        <ul class="footer-social">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Photos</h3>
                        <ul class="instagram">
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/instagram-1.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/instagram-2.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/instagram-3.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/instagram-4.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/instagram-1.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/instagram-2.jpg')}}" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Useful Links</h3>
                        <ul class="footer-quick-links">
                            <li>
                                <a href="{{url('heathcare')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">About</a>
                            </li>
                           
                            <li>
                                <a href="{{url('services')}}">Services</a>
                            </li>
                           
                            <li>
                                <a href="{{url('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact</h3>
                        <div class="footer-info-contact">
                            <i class="flaticon-call"></i>
                            <h3>Phone</h3>
                            <span><a href="tel:123456123">+123(456)123</a></span>
                        </div>
                        <div class="footer-info-contact">
                            <i class="flaticon-email"></i>
                            <h3>Email</h3>
                            <span><a href="/cdn-cgi/l/email-protection#8de4e3ebe2cdf9e4e3f7e8ffa3eee2e0"><span
                                        class="__cf_email__"
                                        data-cfemail="2940474f46695d4047534c5b074a4644">[email&nbsp;protected]</span></a></span>
                        </div>
                        <div class="footer-info-contact">
                            <i class="flaticon-pin"></i>
                            <h3>Address</h3>
                            <span>3254-425 NW-2nd Ave, Miami USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <div class="copyright-area">
        <div class="container">
            <p>
                Copyright &copy; 2021 HealthCare. All Rights Reserved. 
            </p>
        </div>
    </div>


    <div class="go-top">
        <i class="fa fa-chevron-up"></i>
        <i class="fa fa-chevron-up"></i>
    </div>


    <script data-cfasync="false" src="{{asset('front_assets/js/cloudflare-static-email-decode.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-jquery.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-popper.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-bootstrap.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-jquery.meanmenu.js')}}"></script>
    <script src="{{asset('front_assets/js/js-jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-odometer.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-jquery.appear.js')}}"></script>
    <script src="{{asset('front_assets/js/js-datepicker.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-form-validator.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-contact-form-script.js')}}"></script>
    <script src="{{asset('front_assets/js/js-main.js')}}"></script>
</body>

</html>
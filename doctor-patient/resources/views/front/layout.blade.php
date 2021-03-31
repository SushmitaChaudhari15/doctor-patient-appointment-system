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
    <link rel="stylesheet" href="{{asset('front_assets/css/css-magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-style.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css-responsive.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title>Medlife</title>
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
                                Mon-sun 10-22.00
                            </li>
                            <li>
                                <i class="flaticon-phone-call"></i>
                                <a href="tel:91 9876543211">Call Us: +91 9876543211</a>
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
                                <li>

                                <img class="rounded-circle" src="{{asset('front_assets/images/user.jpg')}}" width="30">

                                <span class="text-white pl-2">
                                    
                                    {{ Auth::user()->name }}
                                </span>
                                </li>

                                <li>
                               <a href="{{url('patient/patient_profile')}}/{{Auth::user()->id}}"> <span class="profile">Profile</span>  </a> 
                                </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            
                            <a href="{{ route('logout') }}" class="sign-in"  onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                               
                            </li>
                            
                    @else

                        @if (Route::has('register'))
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
                        @if (Route::has('login'))
                                @auth
                                <a href="{{url('user/dashboard')}}">
                                <h2>Medlife</h2></a>
                                    @else
                                    <a href="{{url('/')}}">
                                <h2>Medlife</h2></a>
                                    @endauth
                                   @endif
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                @if (Route::has('login'))
                                @auth
                                <a class="navbar-brand" href="{{url('/user/dashboard')}}">
                               
                                    @else
                                    <a class="navbar-brand" href="{{url('/')}}">
                             
                                    @endauth
                                   @endif
                       
                            <h2>Medlife</h2>

                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                @if (Route::has('login'))
                                @auth
                                    <a href="{{url('user/dashboard')}}" class="nav-link @yield('home_select')">
                                        Home                                       
                                    </a>
                                    @else
                                    <a href="{{url('/')}}" class="nav-link @yield('home_select')">
                                        Home                                       
                                    </a>
                                    @endauth
                                   @endif
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('about')}}" class="nav-link @yield('about_select')">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('services')}}" class="nav-link @yield('services_select')">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('contact')}}" class="nav-link @yield('contact_select')">
                                        Contact
                                    </a>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                <li class="nav-item">
                                <a class="nav-link @yield('show_select')" href="{{url('patient/appointment')}}/{{Auth::user()->id}}">
                                   Appointment</a> 

                                </li>
                                @endauth
                                   @endif

                            </ul>
                            <div class="others-options">
                           
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{url('appointment')}}/{{Auth::user()->id}}" class="default-btn">
                                    Book Appointment
                                        <span></span>
                                    </a>
                                  @else
                                   <a href="{{url('appointment')}}" class="default-btn">
                                   Book Appointment
                                        <span></span>
                                    </a>
                                    @endauth
                                   @endif
                              
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
                        <h3>Medlife</h3>
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
                                    <img src="{{asset('front_assets/images/foot1.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/foot2.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/foot3.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/foot4.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/foot5.jpg')}}" alt="image"></a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('front_assets/images/foot6.jpg')}}" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Useful Links</h3>
                        <ul class="footer-quick-links">
                            <li>
                                <a href="{{url('Medlife')}}">Home</a>
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
                            <span><a href="tel:91 9876543211">+91 9876543211</a></span>
                        </div>
                        <div class="footer-info-contact">
                            <i class="flaticon-email"></i>
                            <h3>Email</h3>
                            <span>  <a href="/cdn-cgi/l/email-protection#2a424f4646456a43444c4504494547"><span
                                        class="__cf_email__"
                                        data-cfemail="573f323b3b38173e3931387934383a">[email&nbsp;protected]</span></a>
                               </div>
                        <div class="footer-info-contact">
                            <i class="flaticon-pin"></i>
                            <h3>Address</h3>
                            <span>3254-425 NW-2nd Ave,Pune ,India</span>
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
                Copyright &copy; 2021 Medlife. All Rights Reserved. 
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
    <script src="{{asset('front_assets/js/js-jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js-main.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
     $(document).ready( function () {
    $('#table_id').DataTable();
    ordering: true;
} );

    </script>
</body>

</html>
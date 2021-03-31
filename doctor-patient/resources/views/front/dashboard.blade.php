@extends('front/layout')
@section('container')
@section('home_select','active')

    <div class="main-banner">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                   
                        <div class="col-lg-7">
                    
                           
                      
                        @if (Route::has('login'))
                                    @auth
                                    @if( is_null(Auth::user()->user_number)  || is_null(Auth::user()->user_address)  || is_null(Auth::user()->user_age)  || is_null(Auth::user()->user_gender ))
                                   <div class="text-center">
                                    <div class="alert alert-success"style="width: 60%; margin-left: 20%;" role="alert">
                                    <h4 class="alert-heading">Please!</h4>
                             
                                    <p class="mb-0">Update your Profile</p>
                                    </div>
                                    </div>
                                   
                                    @endif
                                  
                                   <h2 class="font-weight-bold"> <u>Welcome {{ Auth::user()->name }}</u></h2> 
                                   @endauth
                                   @endif
                            <div class="main-banner-content">

                                <h1>Book Your Appointment Now with Medlife</h1>
                                
                                
                                <div class="banner-btn">
                                @if (Route::has('login'))
                                @auth
                                    <a href="{{url('appointment')}}/{{Auth::user()->id}}" class="default-btn">
                                        Make An Appointment
                                        <span></span>
                                    </a>
                                  @else
                                   <a href="{{url('appointment')}}" class="default-btn">
                                        Make An Appointment
                                        <span></span>
                                    </a>
                                    @endauth
                                   @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="banner-image">
                                <img src="{{asset('front_assets/images/img-doctor.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
                <img src="{{asset('front_assets/images/shape-shape-1.png')}}" alt="image">
            </div>
            <div class="shape-2 rotateme">
                <img src="{{asset('front_assets/images/shape-shape-3.png')}}" alt="image">
            </div>
            <div class="shape-3">
                <img src="{{asset('front_assets/images/shape-shape-3.png')}}" alt="image">
            </div>
            <div class="shape-4">
                <img src="{{asset('front_assets/images/shape-1.png')}}" alt="image">
            </div>
            <div class="shape-5">
                <img src="{{asset('front_assets/images/shape-shape-2.png')}}" alt="image">
            </div>
            <div class="shape-6">
                <img src="{{asset('front_assets/images/shape-shape-5.png')}}" alt="image">
            </div>
            <div class="shape-10">
                <img src="{{asset('front_assets/images/shape-shape-7.png')}}" alt="image">
            </div>
        </div>
    </div>


    <section class="top-services-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="top-services-content two">
                        <div class="icon">
                            <i class="flaticon-relationship"></i>
                        </div>
                        <h3>Reduce Helth Care Cost</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="top-services-content">
                        <div class="icon">
                            <i class="flaticon-insurance"></i>
                        </div>
                        <h3>Reduce Pressure on Medical Staff</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="top-services-content">
                        <div class="icon">
                            <i class="flaticon-clinic"></i>
                        </div>
                        <h3>Continuum Of Care</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-wrap">
                        <a href="https://www.youtube.com/watch?v=cOT6DjgER2Y" class="video-btn popup-youtube">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>About Us</span>
                        <h3>About Medlife</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
                        <p>stay home &amp; safe for you and others, and maintain all the safety measures by medical
                            professionals to defeat it!</p>
                        <p>know the symptoms of the coronavirus(covid-19) and inform others, follow the safety steps
                            instructed by world health organization (WHO).</p>
                        <ul class="about-features two">
                            <li>
                                <span>
                                    <i class="flaticon-doctor"></i>
                                    Person to Person
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-worm"></i>
                                    Infected Person Coughs
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-cough"></i>
                                    Close Contact Another
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-blood-test"></i>
                                    Wash Your Hands
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-family"></i>
                                    Avoid Close Contact
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-insurance"></i>
                                    Stay at Home
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Services</span>
                <h2>Our Medlife Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-bacteria"></i>
                        </div>
                          
                            <h3>COVID-19 Consulting</h3>
                       
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-shield"></i>
                        </div>
                          
                            <h3>Special Follow Up  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-beauty-treatment"></i>
                        </div>
                          
                            <h3>Dermatology  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    

    <section class="solutions-area mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="solutions-content">
                        <span>About Doctor</span>
                        @foreach($data as $list)
                        <h3>{{$list->doctor_name}}</h3>
                        <p>{{$list->doctor_department}}</p>
                        <ul class="solutions-features">
                            <li>
                                <span> <b>Email</b>-
                                {{$list->doctor_email}}
                                </span>
                            </li>
                            <li>
                                <span><b>Address</b>-
                                {{$list->doctor_address}}
                                </span>
                            </li>
                            <li>
                                <span><b>Mobile No.</b>-
                                {{$list->doctor_number}}
                                </span>
                            </li>
                            <li>
                                <span><b>Gender</b>-
                                {{$list->doctor_gender}}
                                </span>
                            </li>
                            <li>
                                <span><b>Age</b>-
                                {{$list->doctor_age}}
                                </span>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solutions-image">
                        <!-- <img src="{{asset('front_assets/images/img-treatment.png')}}" alt="image"> -->
                        <!-- <div class="col-lg-4 col-md-6"> -->
                    <div class="doctor-item">
                        <div class="image">
                        @foreach($data as $list)
                            <img src="{{asset('storage/media/'.$list->doctor_image)}}" width="70%" alt="image">
                         @endforeach
                        </div>
                        <div class="content">
                            <!-- <h3>Dr. Peter Adlock</h3>
                            <span>Neurologiest</span> -->
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consult-area ptb-100">
        <div class="container-fluid pl-0">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="consult-image">
                        <img src="{{asset('front_assets/images/img-consult.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="consult-content">
                        <span>Online Consult</span>
                        <h3>Get 24/7 Care Right </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy</p>
                        <ul class="list">
                            <li>
                                <i class="flaticon-check-1"></i>
                                Get unlimited 24/7 contact with a provider at no extra cost
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                Easily book appointments 
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                Skip unnecessary trips to the ER or urgent care
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                Have a Remote Visit with your primary care provider 
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                A message with your provider
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @endsection
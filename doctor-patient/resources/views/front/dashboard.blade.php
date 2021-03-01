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
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Welcome!</strong> You have successfully Loged in :)
                            </div>
                                   @endauth
                                   @endif
                            <div class="main-banner-content">
                                <h1>TeleHealth Services Rapid Response to Coronavirus Pandemic</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                                <div class="banner-form">
                                    <form>
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <select>
                                                        <option>Specialist</option>
                                                        <option value="">Dr. James Adult</option>
                                                        <option value="">Dr. James Alison</option>
                                                        <option value="">Dr. Peter Adlock</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <select>
                                                        <option>Category</option>
                                                        <option value="">Cardiologists</option>
                                                        <option value="">Dermatologists</option>
                                                        <option value="">Endocrinologists</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-3 col-md-6">
                                                <div class="form-group">
                                                    <select>
                                                        <option>Condition</option>
                                                        <option>Fever</option>
                                                        <option>Allergies</option>
                                                        <option>Morbidity</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" class="banner-form-btn">
                                                        Search
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="banner-btn">
                                    <a href="{{url('appointment')}}" class="default-btn">
                                        Make An Appointment
                                        <span></span>
                                    </a>
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
                        <h3>About Coronavirus Disease</h3>
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
                <h2>Our Healthcare Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-bacteria"></i>
                        </div>
                        <a href="single-services.html">
                            <h3>COVID-19 Consulting</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                        <a href="single-services.html" class="read-btn">Read More +</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-shield"></i>
                        </div>
                        <a href="single-services.html">
                            <h3>Special Follow Up</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                        <a href="single-services.html" class="read-btn">Read More +</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-beauty-treatment"></i>
                        </div>
                        <a href="single-services.html">
                            <h3>Dermatology</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                        <a href="single-services.html" class="read-btn">Read More +</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-mental-health"></i>
                        </div>
                        <a href="single-services.html">
                            <h3>Mental Health</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                        <a href="single-services.html" class="read-btn">Read More +</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-crutches"></i>
                        </div>
                        <a href="single-services.html">
                            <h3>Orthopedics</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                        <a href="single-services.html" class="read-btn">Read More +</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item bg-1">
                        <div class="icon">
                            <i class="flaticon-pregnancy"></i>
                        </div>
                        <a href="single-services.html">
                            <h3>Gynecological</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                        <a href="single-services.html" class="read-btn">Read More +</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="solutions-area mt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="solutions-content">
                        <span>Solutions</span>
                        <h3>Telehealth Virtual Health Care Solutions</h3>
                        <p>Many healthcare systems around the world together with government agencies and startup
                            companies are building and delivering Telehealth solutions.</p>
                        <ul class="solutions-features">
                            <li>
                                <span>
                                    Tinger eConsult Program
                                </span>
                            </li>
                            <li>
                                <span>
                                    Provide More Potential Video
                                </span>
                            </li>
                            <li>
                                <span>
                                    Remote Monitoring
                                </span>
                            </li>
                            <li>
                                <span>
                                    Mental Health Solutions
                                </span>
                            </li>
                            <li>
                                <span>
                                    Surgical Transition Solutions
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solutions-image">
                        <img src="{{asset('front_assets/images/img-treatment.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doctor-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <div class="section-title">
                    <span>Our Doctors</span>
                    <h2>Specialized Doctors</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-item">
                        <div class="image">
                            <img src="{{asset('front_assets/images/team-image1.jpg')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3>Dr. James Adult</h3>
                            <span>Cardiologist</span>
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
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-item">
                        <div class="image">
                            <img src="{{asset('front_assets/images/team-image2.jpg')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3>Dr. James Alison</h3>
                            <span>Medicine</span>
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
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-item">
                        <div class="image">
                            <img src="{{asset('front_assets/images/team-image3.jpg')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3>Dr. Peter Adlock</h3>
                            <span>Neurologiest</span>
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
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="doctor-item">
                        <div class="image">
                            <img src="images/team-image4.jpg" alt="image">
                        </div>
                        <div class="content">
                            <h3>Dr. Jelin Alis</h3>
                            <span>Medicine</span>
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
                </div> -->
            </div>
        </div>
    </section>
    <section class="appointment-area ptb-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-fun-fact">
                                <h3>
                                    <span class="odometer" data-count="2700">00</span>
                                    <span class="sign-icon">+</span>
                                </h3>
                                <p>Care Locations</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-fun-fact">
                                <h3>
                                    <span class="odometer" data-count="2.7">00</span>
                                    <span class="sign-icon">K</span>
                                </h3>
                                <p>Virtual Care Solutions</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-fun-fact">
                                <h3>
                                    <span class="odometer" data-count="99.60">00</span>
                                    <span class="sign-icon">%</span>
                                </h3>
                                <p>Connections Success Rate</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-fun-fact">
                                <h3>
                                    <span class="odometer" data-count="30">00</span>
                                    <span class="sign-icon">+</span>
                                </h3>
                                <p>Award Winning</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="appointment-form">
                        <div class="content">
                            <span>Call to Action</span>
                            <h3>Make An Appointment</h3>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Name"
                                            placeholder="Enter Your Name"><i class="flaticon-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Email" placeholder="Enter Email"><i
                                            class="flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Phone"
                                            placeholder="Enter Phone Number"><i class="flaticon-call"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="">Select Category</option>
                                            <option value="">Cardiologists</option>
                                            <option value="">Dermatologists</option>
                                            <option value="">Endocrinologists</option>
                                            <option value="">Gastroenterologists</option>
                                            <option value="">Allergists</option>
                                            <option value="">Immunologists</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="">Select Doctor</option>
                                            <option value="">Dr. James Adult</option>
                                            <option value="">Dr. James Alison</option>
                                            <option value="">Dr. Peter Adlock</option>
                                            <option value="">Dr. Jelin Alis</option>
                                            <option value="">Dr. Josh Taylor</option>
                                            <option value="">Dr. Steven Smith</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker">
                                            <input type="text" class="form-control" placeholder="Date"><span
                                                class="input-group-addon"></span>
                                        </div>
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="appointment-btn">
                                        <button type="submit" class="default-btn">
                                            Confirm Appointment
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
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
                        <h3>Get 24/7 Care Right From Your Phone</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy</p>
                        <ul class="list">
                            <li>
                                <i class="flaticon-check-1"></i>
                                Get unlimited 24/7 Video Chat with a provider at no extra cost
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                Easily book appointments and renew prescriptions
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                Skip unnecessary trips to the ER or urgent care
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                Have a Remote Visit with your primary care provider over video
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
@extends('front/layout')
@section('container')
@section('about_select','active')

    <div class="page-title-area item-bg-6">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-area pb-100 mt-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>About Us</span>
                        <h3>Medlife</h3>
                        <p>Many Medlife systems around the world together with government agencies and startup
                            companies are building and delivering Telehealth solutions the future of non-emergency and
                            routine Medlife delivery</p>
                        <ul class="about-features two">
                            <li>
                                <span>
                                    <i class="flaticon-doctor"></i>
                                    Orthopedic Solutions
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-worm"></i>
                                    Chronic Disease
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-cough"></i>
                                    COVID-19 Test
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-blood-test"></i>
                                    Diabetic Test
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-family"></i>
                                    Family Solutions
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-insurance"></i>
                                    Medical Questions
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{asset('front_assets/images/img-about-3.jpg')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section class="partner-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Partners</span>
                <h2>Featured Customer & Partners</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse</p>
            </div>
            <div class="partner-list">
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/1.jpg')}}"   alt="image">
                </div>
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/2.jpg')}}"   alt="image">
                </div>
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/3.jpg')}}"   alt="image">
                </div>
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/4.jpg')}}"   alt="image">
                </div>
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/5.jpg')}}"   alt="image">
                </div>
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/5 (1).jpg')}}"   alt="image">
                </div>
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/6.jpg')}}"   alt="image">
                </div>
                <div class="partner-item">
                     
                        <img src="{{asset('front_assets/images/7.jpg')}}"   alt="image">
                </div>
            </div>
        </div>
    </section>

    <section class="solutions-area mt-5 mb-5">
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
                            <img src="{{asset('storage/media/'.$list->doctor_image)}}" width="70%" alt="image">
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
    @endsection
@extends('front/layout')
@section('container')
@section('services_select','active')

    <div class="page-title-area item-bg-6">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="services-section bg-f4f6fe pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span>Our Services</span>
                <h2>Our Medlife Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="services-item-two">
                        <div class="icon">
                            <i class="flaticon-bacteria"></i>
                        </div>
                         
                            <h3>COVID-19 Consulting  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item-two">
                        <div class="icon">
                            <i class="flaticon-shield"></i>
                        </div>
                         
                            <h3>Special Follow Up  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item-two">
                        <div class="icon">
                            <i class="flaticon-beauty-treatment"></i>
                        </div>
                         
                            <h3>Dermatology  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item-two">
                        <div class="icon">
                            <i class="flaticon-mental-health"></i>
                        </div>
                         
                            <h3>Mental Health  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item-two">
                        <div class="icon">
                            <i class="flaticon-crutches"></i>
                        </div>
                         
                            <h3>Orthopedics  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item-two">
                        <div class="icon">
                            <i class="flaticon-pregnancy"></i>
                        </div>
                         
                            <h3>Gynecological  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore</p>
                          
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <section class="step-three ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="step-three-image">
                        <img src="{{asset('front_assets/images/img-step-three-image.png')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="step-three-content">
                      
                        <h3>Book your appointment to Your Local Doctor.</h3>
                     
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, omnis!</b>
                        <div class="step-btn">
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
                            </a>
                        </div>
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
                                Message with your provider
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
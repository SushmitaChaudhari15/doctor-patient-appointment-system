@extends('front/layout')
@section('container')

    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Appointment</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Appointment</li>
                        </ul>
                        @if (Route::has('login'))
                                    @auth
                                   
                                    @else
                                    @if (Route::has('register'))
                                    <h3 class="text-warning">To make an Appointment kindly Login/ Ragister :) </h3>
                                        @endif
                                     @endauth 
                                  @endif 
                        <h3 class="text-warning">{{session('msg')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="emergency-area bg-top ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="emergency-item">
                        <div class="image">
                            <img src="{{asset('front_assets/images/img-emergency.jpg')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3>Emergency Blood Test in 30 Minutes</h3>
                            <p>
                                <a href="tel:821-456-321"><b>Contact Us:</b> +821-456-321</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="emergency-form">
                        <div class="content">
                            <h3>
                                <i class="flaticon-calendar"></i>
                                Make An Appointment
                            </h3>
                        </div>
                        <form action="{{url('appointment_submit')}}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Name" name="uname"
                                            placeholder="Enter Your Name" required><i class="flaticon-user"></i>
                                            @error('uname')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Email" name="uemail" placeholder="Enter Email" required><i
                                            class="flaticon-email"></i>
                                            @error('uemail')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Phone" name="uno"
                                            placeholder="Enter Phone Number" required><i class="flaticon-call"></i>
                                            @error('uno')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Phone" name="uaddress"
                                            placeholder="Enter Address" required><i class="flaticon-call"></i>
                                            @error('uaddress')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Phone" name="uage"
                                            placeholder="Enter Age" required><i class="flaticon-call"></i>
                                            @error('uage')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class="flaticon-shield"></i>
                                        <select name="ucategory" required>
                                            <option value="">Select Category</option>
                                            <option value="Cardiologists">Cardiologists</option>
                                            <option value="Dermatologists">Dermatologists</option>
                                            <option value="Endocrinologists">Endocrinologists</option>
                                            <option value="Gastroenterologists">Gastroenterologists</option>
                                            <option value="Allergists">Allergists</option>
                                            <option value="Immunologists">Immunologists</option>
                                        </select>
                                        @error('ucategory')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class="flaticon-doctor"></i>
                                        <select name="udoctor" required>
                                            <option value="">Select Doctor</option>
                                            <option value="Dr. James Adult">Dr. James Adult</option>
                                            <option value="Dr. James Alison">Dr. James Alison</option>
                                            <option value="Dr. Peter Adlock">Dr. Peter Adlock</option>
                                            <option value="Dr. Jelin Alis">Dr. Jelin Alis</option>
                                            <option value="Dr. Josh Taylor">Dr. Josh Taylor</option>
                                            <option value="Dr. Steven Smith">Dr. Steven Smith</option>
                                        </select>
                                        @error('udoctor')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker">
                                            <input type="text"  name="udate" class="form-control" placeholder="Date" required><span
                                                class="input-group-addon"></span>
                                                @error('udate')
                        <div class="text-danger">
                          {{$message}}
                          </div>
                        @enderror
                                        </div>
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="appointment-btn">
                                    @if (Route::has('login'))
                                    @auth
                                    <button type="submit" class="default-btn">
                                            Submit Application
                                            <span></span>
                                        </button>
                                    @else
                                    @if (Route::has('register'))
                                        <p class="default-btn" onclick="myFunction()">
                                            Submit Application
                                            <span></span>
</p>

                                        @endif
                                     @endauth 
                                  @endif 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about-area ptb-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{asset('front_assets/images/img-about-3.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>About Us</span>
                        <h3>Connect to Call a Doctor by Video or Audio During the COVID-19 Pandemic</h3>
                        <p>Many healthcare systems around the world together with government agencies and startup
                            companies are building and delivering Telehealth solutions the future of non-emergency and
                            routine healthcare delivery</p>
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
            </div>
        </div>
    </section>
    <script>
function myFunction() {
  alert("TO Book appointment Please Login!");
}
</script>
    @endsection
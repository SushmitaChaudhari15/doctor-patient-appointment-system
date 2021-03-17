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
    
    <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3 m-2">
                      
                        <h4 class="page-title">Doctor's Todays Schedule.</h4>

                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Time Slot</th>
                                        <th>Availability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($doc as $list)
                                    <tr>
                                        <td><?php
                                        $today = date('d/m/Y');
                                        $today = explode('/',$today);
                                        echo  $nextday = date('d/m/Y',mktime(0,0,0,$today[1],$today[0]+1,$today[2]));
                                        ?></td>
                                        <td>
                                        {{$list->start_time}} to    {{$list->end_time}}
                                        
                                       </td>
                                    
                                        <td>
                                        @if($list->available_status==1)
                                        <button type="button"  class="btn btn-success">Available</button>
    
    
                                        @elseif($list->available_status==0)
                                       <button type="button"  class="btn btn-danger">Not Available</button>
    
                                        @endif
                                       </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="text-center">
                   
                  <h3 class="text-success"> Check Doctor is available or not at time and book appointment at that time.</h3> 
                 
                  </div>

                    </div>
                </div>
            </div>
        </div>
        
    
    </div>
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
                                    @if (Route::has('login'))
                                    @auth
                                    <p class="form-control" id="Name" name="uname">{{$name}}</p>
                                    @else
                                    <input type="text" class="form-control" id="Name" name="uname"   placeholder="Enter Name" >
                                    @endauth
                                   @endif

                                        <i class="flaticon-user"></i>
                                         
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                    @if (Route::has('login'))
                                    @auth
                                        <p class="form-control" id="Email" name="uemail">{{$email}}</p>
                                        @else
                                        <input type="email" class="form-control" id="Email" name="uemail"  placeholder="Enter Email" >
                                    @endauth
                                   @endif
                                        <i class="flaticon-email"></i>
                                         
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                    @if (Route::has('login'))
                                    @auth
                                        <p class="form-control" id="Phone" name="uno">{{$user_number}}</p>
                                        @else
                                        <input type="email" class="form-control" id="Phone" name="uno"  placeholder="Mobile Number" >
                                    @endauth
                                   @endif
                                        <i class="flaticon-call"></i>
                                         
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                    <select  name="utime">
                                             <option value="" selected >Time Slot</option>
                                             @foreach($doc as $list)
                                            <option value="    {{$list->start_time}} to    {{$list->end_time}}">    {{$list->start_time}} to    {{$list->end_time}}</option>
                                            @endforeach
                                        </select>
                                       
                                        
                                    </div>
                                </div>
                               
                                 
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Phone" name="usymptoms"
                                            placeholder="Symptoms" required><i class="flaticon-shield"></i>
                                        
                                    </div>
                                </div>
                               
                                
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker">
                                            <input type="text"  name="udate" class="form-control" placeholder="Date" required><span
                                                class="input-group-addon"></span>
                                             
                                        </div>
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="appointment-btn">
                                    @if (Route::has('login'))
                                    @auth
                                  
                                       <button type="submit" class="default-btn">
                                           Book Appointment
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
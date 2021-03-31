@extends('front/layout')
@section('container')

    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Appointment</h2>
                        <ul>
                            <li><a href="{{url('user/dashboard')}}">Home</a></li>
                            <li>Appointment</li>
                        </ul>
                        @if (Route::has('login'))
                                    @auth
                                   
                                    @else
                                    @if (Route::has('register'))
                                    <h3 class="text-warning">To make an Appointment kindly Login/ Ragister </h3>
                                        @endif
                                     @endauth 
                                  @endif 
                        <h3 class="text-warning">{{session('msg')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
    <section class="about-area pt-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- <div class="about-image">
                        <img src="{{asset('front_assets/images/img-about-3.jpg')}}" alt="image">
                    </div> -->
                    <div class="about-content">
                    <h3>Doctor's Schedule.</h3>
                    
                        <div class="table-responsive emergency-form">
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
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>To Book an appointment Please check doctor is available or not for particular time slot </h3>
                       <h5 class="text-danger mt-5">Note: Please Book appointment before 24hrs.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="emergency-area bg-top ptb-100">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="emergency-item">
                        <div class="image">
                            <img src="{{asset('front_assets/images/img-emergency.jpg')}}" alt="image">
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
                                        <!-- <div class="input-group date" id="datetimepicker"> -->
                                            <!-- <input type="text"  name="udate" value="" class="form-control" placeholder="Date" required><span
                                                class="input-group-addon"></span> -->
                                                <p   class="form-control" ><?php
                                        $today = date('d/m/Y');
                                        $today = explode('/',$today);
                                        echo  $nextday = date('d/m/Y',mktime(0,0,0,$today[1],$today[0]+1,$today[2]));?>
                                         </p>
                                             
                                        <!-- </div> -->
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                    <select  name="utime" required>
                                             <option value="">Time Slot</option>
                                             @foreach($doc as $list)
                                            <option value="  @if($list->available_status==1)
                                             {{$list->start_time}} to {{$list->end_time}}
                                             @endif">   
                                            @if($list->available_status==1)
                                             {{$list->start_time}} to {{$list->end_time}}
                                             @endif
                                             </option>
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
                                
                                <div class="col-12">
                                    <div class="appointment-btn">
                                    @if (Route::has('login'))
                                    @auth
                                           @if( is_null($user_number) )
                                                <p class="default-btn" onclick="blank()">
                                                    Book Appointment
                                                    <span></span>
                                                </p>
                                                    
                                            @else
                                            <button type="submit" class="default-btn">
                                                    Book Appointment
                                                        <span></span>
                                                    </button>
                                            @endif        
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
  
    <script>
function myFunction() {
  alert("TO Book appointment Please Login!");
}

  function blank() {
    alert("Number is not Filled! Please Update your Profile");
  }

</script>
    @endsection
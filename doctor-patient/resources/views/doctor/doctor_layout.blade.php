<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_assets/favicons/img-favicon.png')}}">
    <title>Medlife</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-style.css')}}">
    
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{url('/doctor/dashboard')}}" class="logo">
                        <span>Medlife</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                
               
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                       @foreach($name as $photo)
                            <img class="rounded-circle" src="{{asset('storage/media/'.$photo->doctor_image)}}" width="24" alt="">
                            @endforeach
                            <span class="status online"></span>                            
                        </span>
                        <span>{{Auth::user()->name}}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('doctor/doctor_profile')}}">My Profile</a>
                        <form method="POST" action="{{ route('logout') }}" style=" padding: 15px 18px;">
                            @csrf
                            
                            <a href="{{ route('logout') }}" class="dropdown-item"  onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <form method="POST" action="{{ route('logout') }}" style=" padding: 15px 18px;">
                            @csrf
                            
                            <a href="{{ route('logout') }}" class="dropdown-item"  onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="@yield('dashboard_select')">
                            <a href="{{url('doctor/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                       
                        <li class="@yield('patient_select')">
                            <a href="{{url('doctor/patient')}}"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li class="@yield('appointment_select')">
                            <a href="{{url('doctor/appointment')}}"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li class="@yield('schedule_select')">
                            <a href="{{url('doctor/schedule')}}"><i class="fa fa-calendar-check-o"></i> <span>Time Schedule</span></a>
                        </li>
                        <li class="@yield('report_select')">
                            <a href="{{url('doctor/report')}}"><i class="fa fa-flag-o"></i> <span>Reports</span></a>
                        </li>
                      
                      
                    </ul>
                </div>
            </div>
        </div>

        @section('container')
         @show


    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('doctor_assets/js/js-jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('doctor_assets/js/js-popper.min.js')}}"></script>
    <script src="{{asset('doctor_assets/js/js-bootstrap.min.js')}}"></script>
    <script src="{{asset('doctor_assets/js/js-jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('doctor_assets/js/js-dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('doctor_assets/js/js-jquery.slimscroll.js')}}"></script>
    <script src="{{asset('doctor_assets/js/js-app.js')}}"></script>
    

</body>

</html>

@extends('doctor/doctor_layout')
@section('container')
@section('report_select','active')

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                <a href="{{url('check_date/1')}}">
                    <span class="dash-widget-bg1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$data}}</h3>
                        <span class="widget-title1">Total Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <a href="{{url('check_date/2')}}">
                    <span class="dash-widget-bg2"><i class="fa fa-stethoscope"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$appoint}}</h3>
                        <span class="widget-title2">Total Appointment <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                    </a>
                </div>
            </div>
            
    
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                <a href="{{url('check_date/3')}}">
                    <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$attend}}</h3>
                        <span class="widget-title3">Total Attended Patient <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                <a href="{{url('check_date/4')}}">
                    <span class="dash-widget-bg4"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                    <h3>{{$pending}}</h3>
                        <span class="widget-title4">Total Pending Patient <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </a>
                </div>
            </div>
        </div>
                
    </div>
    <div class="text-center">
<h2>Here You can print reports.</h2>

</div>

</div>

@endsection
@extends('doctor/doctor_layout')
@section('container')
@section('dashboard_select','active')

</div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <!-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>98</h3>
                        <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <a href="{{url('doctor/patient')}}">
                    <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$count-1}}</h3>
                        <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                    </a>
                </div>
            </div>
            
    
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                <a href="{{url('/doctor/appointment')}}">
                    <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$acount}}</h3>
                        <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                <a href="{{url('/doctor/appointment')}}">
                    <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$pcount-$acount}}</h3>
                        <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="{{url('doctor/appointment')}}"
                            class="btn btn-primary float-right">View all</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Date</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $list)

                                    <tr>
                                        <td style="min-width: 200px;">
                                        <h5 class="time-title p-0">Patient Name </h5>
                                            <p> {{$list->name}}
                                            </p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            @foreach($name as $doctor)
                                            <p>{{ $doctor->doctor_name}}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Date</h5>
                                            <p>{{$list->user_date}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Time Slot</h5>
                                            <p>{{$list->user_time}}</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{url('doctor/appointment')}}" class="btn btn-outline-primary take-btn">Take
                                                up</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
</div>
</div>
@endsection


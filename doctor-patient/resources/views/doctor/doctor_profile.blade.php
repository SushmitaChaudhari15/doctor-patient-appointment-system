
@extends('doctor/doctor_layout')
@section('container')

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                   @if ($data->count())
                    @foreach($data as $list)
                       <a href="{{url('doctor/doctor_profile_manage')}}/{{$list->id}}" class="btn btn-primary btn-rounded">     @endforeach  <i class="fa fa-plus"></i> Edit
                        Profile</a>
                    
                     @else
                        <a href="{{url('doctor/doctor_profile_manage')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add
                            Profile</a>
                         
                     @endif
                    </div>
                </div>

                <div class="text-center">
                        <h2 class="text-danger">{{session('message')}}</h2>
                    </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        @foreach($data as $list)
                                    @if($list->doctor_image!='')
                                    <img class="avatar" src="{{asset('storage/media/'.$list->doctor_image)}}" ></td>      
                                    @endif
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$list->doctor_name}}</h3>
                                                <div class=" text-muted staff-id">{{$list->doctor_department}}</div>
                                                       
                                            </div>

                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text">{{$list->doctor_number}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text">{{$list->doctor_email}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Age:</span>
                                                    <span class="text">{{$list->doctor_age}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">{{$list->doctor_address}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text">{{$list->doctor_gender}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
        </div>
    </div>  
    
    @endsection

@extends('doctor/doctor_layout')
@section('container')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Schedule</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-title">Schedule</h4>
                            <form action="{{route('doctor.doctor_profile_manage_process')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Name</label>
                                    <input type="text" class="form-control" value="{{$doctor_name}}"  name="doctor_name" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Specialization</label>
                                    <input type="text" class="form-control" value="{{$doctor_department}}"  name="doctor_department" required>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{$doctor_email}}"  name="doctor_email" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" value="{{$doctor_age}}"  name="doctor_age" required>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number</label>
                                    <input type="text" class="form-control" value="{{$doctor_number}}"  name="doctor_number" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea type="text" class="form-control" value="{{$doctor_address}}"  name="doctor_address" required>{{$doctor_address}}</textarea>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" value="{{$doctor_gender}}"  name="doctor_gender" required>
                                </div>
                            </div><div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" value="{{$doctor_image}}"  name="doctor_image">
                                </div>
                            </div>
                            </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                <input type="hidden" name="id" value="{{$id}}">
                            </form>
                        </div>
                    </div>
                    
                </div>
        

@endsection
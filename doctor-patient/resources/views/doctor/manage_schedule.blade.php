@extends('doctor/doctor_layout')
@section('container')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title"> Add Patient </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-title">Patient</h4>
                            <form action="{{route('patient.manage_patient_process')}}" method="post">
                                @csrf
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{$user_name}}"  name="pname" required >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{$user_email}}"  name="pemail" required >
                                </div>
                            </div>   
                             </div>
                             <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number</label>
                                    <input type="text" class="form-control" value="{{$user_number}}"  name="pno" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" value="{{$user_address}}"  name="paddress" required>
                                </div>
                            </div>   
                             </div>
                             <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" value="{{$user_age}}"  name="page" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control" value="{{$user_category}}"  name="pcategory" required>
                                </div>
                            </div>   
                             </div>
                             <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Doctor</label>
                                    <input type="text" class="form-control" value="{{$user_doctor}}"  name="pdoctor" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" value="{{$user_date}}"  name="pdate" required>
                                </div>
                            </div>   
                             </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <input type="hidden" name="id" value="{{$id}}">
                            </form>
                        </div>
                    </div>
                    
                </div>
        

@endsection
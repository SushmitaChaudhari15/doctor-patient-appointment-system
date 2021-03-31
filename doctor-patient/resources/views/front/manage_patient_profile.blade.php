@extends('front/layout')
@section('container')
@section('user_profile','active')


<div class="sign-in-area ptb-100">
        <div class="container">
            <div class="sign-in-form">
                 <div class="sign-in-title">
                    
                    <h2>Update Profile</h2>
                </div>

                <form method="post" action="{{url('patient/manage_patient_profile_process')}}"> 
                @csrf
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="form-group">
                            <label for="">Name</label>
                                <input type="text" class="form-control" value=" {{ Auth::user()->name }}" name="pname" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label for=""> Email</label>
                                <input type="email" class="form-control" value=" {{ Auth::user()->email }}" name="pemail" placeholder="Email">
                            </div>
                        </div>
                       
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label for="">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Number" value="{{$user_number}}" name="user_number">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label for="">Address</label>
                                <input type="text" class="form-control" placeholder="Address" value="{{$user_address}}" name="user_address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for=""> Age</label>
                                <input type="text" class="form-control" placeholder="Age" value="{{$user_age}}" name="user_age">
                            </div>
                        </div>
                        <div class="col-lg-6">
                                 <div class="form-group mt-4">
                                         <select  name="user_gender">
                                             <option value="{{$user_gender}}" selected >{{$user_gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                          
                                        </select>
                                    </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                            
                                  Update
                                  <span></span> 
                            </button>
                          
                            </div> 
                            <input type="hidden" name="id" value="{{$id}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
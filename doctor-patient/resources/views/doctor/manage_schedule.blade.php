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
                            <form action="{{route('schedule.manage_schedule_process')}}" method="post">
                                @csrf
                            <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Available Date</label>
                                    <p   class="form-control" ><?php
                                        $today = date('d/m/Y');
                                        $today = explode('/',$today);
                                        echo  $nextday = date('d/m/Y',mktime(0,0,0,$today[1],$today[0]+1,$today[2]));?>
                                         </p>
                                </div>
                            </div>   
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Available Time</label>
                                    <input type="text" class="form-control" value="{{$available_time}}"  name="available_time" required>
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
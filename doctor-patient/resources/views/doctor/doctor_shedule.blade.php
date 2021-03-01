<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('doctor_assets/favicons/img-favicon.')}}'">
    <title>Preclinic - Medical &amp; Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-style.css')}}">
  
</head>
@extends('doctor/doctor_layout')
@section('container')
@section('schedule_select','active')

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                    <div class="text-center">
                        <h3 class="text-danger">{{session('message')}}</h3>
                        </div>
                        <h4 class="page-title">Schedule</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="{{url('doctor/shedule/manage_shedule')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add
                        Schedule</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                  
                                    <tr>
                                        <th>#</th>
                                        <th>Doctor Name</th>
                                        <th>Available Date</th>
                                        <th> Available Time</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->doctor_name}}</td>
                                        <td>{{$list->available_date}}</td>
                                        <td>{{$list->available_time}}</td>
                                         <!-- <td>{{$list->user_}}</td> -->
                                         <td>
                                        @if($list->user_status==1)
                                          
                                      <a href="{{url('doctor/appointment/status/0')}}/{{$list->id}}"><button type="button" class="custom-badge status-green">Active</button></a>


                                    @elseif($list->user_status==0)
                                    <a href="{{url('doctor/appointment/status/1')}}/{{$list->id}}"><button type="button" class="custom-badge status-red">Deactive</button></a>

                                    @endif
                                   </td>

                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                              
                                                <div class="">
                                                    <a class="" href="{{url('doctor/department/manage_department')}}/{{$list->id}}"><button type="button" class=" btn btn-primary"><i
                                                            class="fa fa-pencil m-r-5"></i> Edit</button></a>
                                                            
                                                    <a class="" href="#" data-toggle="modal"
                                                        data-target="#delete_department"><button type="button" class=" btn btn-danger"><i
                                                            class="fa fa-trash-o m-r-5"></i> Delete </button></a>
                                                </div>
                                            </div>
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
        <!-- <div id="delete_department" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="images/img-sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Department?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        @foreach($data as $list)
                           <a href="{{url('doctor/department/delete')}}/{{$list->id}}"> <button type="submit" class="btn btn-danger">Delete</button></a>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- </div> -->
        <div id="delete_department" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="images/img-sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Department?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
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
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
@section('patient_select','active')

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                    <div class="text-center">
                        <h3 class="text-danger">{{session('message')}}</h3>
                        </div>
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="{{url('doctor/patient/manage_patient')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add
                            patient</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                  
                                    <tr>
                                        <th>#</th>
                                        <th> Name</th>
                                        <th> Age</th>
                                        <th>Address </th>
                                        <th>Number </th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->user_name}}</td>
                                        <td>{{$list->user_age}}</td>
                                        <td>{{$list->user_address}}</td>
                                        <td>{{$list->user_number}}</td>
                                        <td>{{$list->user_email}}</td>
                                        <td>{{$list->user_date}}</td>


                                        <td class="text-right">
                                           

                                            <div class="dropdown dropdown-action">
                                              
                                                <div class="">
                                                    <a class="" href="{{url('doctor/patient/manage_patient')}}/{{$list->id}}"><button type="button" class=" btn btn-primary"><i
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
        <div id="delete_department" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="images/img-sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Patient?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        @foreach($data as $list)
                           <a href="{{url('doctor/patient/delete')}}/{{$list->id}}">   @endforeach<button type="submit" class="btn btn-danger">Delete</button></a>
                         
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
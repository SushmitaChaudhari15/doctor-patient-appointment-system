
@extends('doctor/doctor_layout')
@section('container')
@section('appointment_select','active')

        <div class="page-wrapper">
            <div class="content">
            <div class="text-center">
                        <h2 class="text-danger">{{session('message')}}</h2>
                    </div>
                <div class="row">
               
                    <div class="col-sm-5 col-5">
                    
                        <h4 class="page-title">Appointments</h4>
                    </div>
                  
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                  
                                    <tr>
                                    <th>Appointment ID</th>
                                        <th>Patient Name</th>
                                        <th>Age</th>
                                        <th>Symptoms </th>
                                        <th>Date </th>
                                        <th>Time Slot</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $list)
                                    <tr>
                                    <td>{{$list->id}}</td>
                                        <td> {{$list->name}}</td>
                                        <td>{{$list->user_age}}</td>
                                        <td>{{$list->user_symptoms}}</td>
                                        <td>{{$list->user_date}}</td>
                                        <td>{{$list->user_time}}</td>

                                        <td>
                                        @if($list->user_status==1)
                                          
                                      <a href="{{url('doctor/appointment/status/0')}}/{{$list->id}}"><button type="button" class="custom-badge status-green">Attended</button></a>


                                    @elseif($list->user_status==0)
                                    <a href="{{url('doctor/appointment/status/1')}}/{{$list->id}}"><button type="button" class="custom-badge status-red">Not Attended</button></a>

                                    @endif
                                    </td>

                                    <td class="text-right">
                                           
                                            <div>
                                                <a class="" href="#" data-toggle="modal"
                                                        data-target="#delete_department"><button type="button" class=" btn btn-danger"><i
                                                            class="fa fa-trash-o m-r-5"></i> Delete </button></a>
                                            </div>
                                           <!-- <a href=""><button type="button" class="fa fa-trash-o btn btn-danger">Delete</button></a> -->

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
                        <img src="{{asset('doctor_assets/images/img-sent.png')}}" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Patient?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        @foreach($data as $list)
                           <a href="{{url('doctor/appointment/delete')}}/{{$list->id}}">   @endforeach<button type="submit" class="btn btn-danger">Delete</button></a>
                         
                        </div>
                    </div>
                </div>
            </div>

        </div>
     </div>
    @endsection
    
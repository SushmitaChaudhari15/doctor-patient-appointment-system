
@extends('doctor/doctor_layout')
@section('container')
@section('schedule_select','active')

        <div class="page-wrapper">
            <div class="content">
            <div class="text-center">
                        <h2 class="text-danger">{{session('message')}}</h2>
                    </div>
                <div class="row">
                    <div class="col-sm-5 col-5">
                   
                        <h4 class="page-title">Schedule</h4>
                    </div>
                   <div class="col-sm-7 col-7 text-right m-b-30">
               
                <!--   <a href="{{url('doctor/schedule/manage_schedule')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                Add Schedule
            
                 </a>-->
                 @if ($data->count()==3)
                  <a href=""></a>
                    
                     @else
                        <a href="{{url('doctor/schedule/manage_schedule')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add
                            Schedule</a>
                         
                     @endif
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                  
                                    <tr>
                                        <th>#</th>
                                       
                                        <th>Available Date</th>
                                        <th> Start Time</th>
                                        <th> End Time</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td><?php
                                        $today = date('d/m/Y');
                                        $today = explode('/',$today);
                                        echo  $nextday = date('d/m/Y',mktime(0,0,0,$today[1],$today[0]+1,$today[2]));
                                        ?></td>
                                        <td>
                                      {{$list->start_time}}
                                        </td>
                                        <td>
                                      {{$list->end_time}}
                                        </td>
                                       
                                         <td>
                                        @if($list->available_status==1)
                                          
                                      <a href="{{url('doctor/schedule/status/0')}}/{{$list->id}}"><button type="button" class="custom-badge status-green">Available</button></a>


                                    @elseif($list->available_status==0)
                                    <a href="{{url('doctor/schedule/status/1')}}/{{$list->id}}"><button type="button" class="custom-badge status-red">Not Available</button></a>

                                    @endif
                                   </td>

                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                              
                                                <div class="">
                                                   <a class="" href="{{url('doctor/schedule/manage_schedule')}}/{{$list->id}}"><button type="button" class=" btn btn-primary"><i
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
                    <img src="{{asset('doctor_assets/images/img-sent.png')}}" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Schedule?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        @foreach($data as $list)
                           <a href="{{url('doctor/schedule/delete')}}/{{$list->id}}">  @endforeach<button type="submit" class="btn btn-danger">Delete</button></a>
                          
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
    </div>
    @endsection
  
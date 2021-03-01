@extends('doctor/doctor_layout')
@section('container')
@section('appointment_select','active')

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <div class="text-center">
                        <h3 class="text-danger">{{session('message')}}</h3>
                        </div>
                        <h4 class="page-title">Appointments</h4>

                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Appointment ID</th>
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Department</th>
                                        <th>Appointment Date</th>
                                        <!-- <th>Appointment Time</th> -->
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td> {{$list->user_name}}</td>
                                        <td>{{$list->user_doctor}}</td>
                                        <td>{{$list->user_category}}</td>
                                        <td>{{$list->user_date}}</td>
                                        <!-- <td>{{$list->user_}}</td> -->
                                        <td>
                                        @if($list->user_status==1)
                                          
                                      <a href="{{url('doctor/appointment/status/0')}}/{{$list->id}}"><button type="button" class="custom-badge status-green">Active</button></a>


                                    @elseif($list->user_status==0)
                                    <a href="{{url('doctor/appointment/status/1')}}/{{$list->id}}"><button type="button" class="custom-badge status-red">Deactive</button></a>

                                    @endif
</td>
                                        <td class="text-right">
                                           
                                            <a href="{{url('doctor/appointment/delete')}}/{{$list->id}}"><button type="button" class="fa fa-trash-o btn btn-danger">Delete</button></a>

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
        
        @endsection
    <script>
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
            $('#datetimepicker4').datetimepicker({
                format: 'LT'
            });
        });
    </script>
</body>

</html>
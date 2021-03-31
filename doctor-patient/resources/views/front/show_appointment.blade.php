
 @extends('front/layout')
@section('container')
@section('show_select','active')



<div class="page-title-area item-bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Appointment List</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Your Appointment List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <section class="services-section bg-f4f6fe pt-100 pb-100">
<div class="container">
<div class="section-title">
                <h2>Your Appointment List</h2>
               
            </div>
<div class="page-wrapper">
            <div class="content">
             
                <div class="row">
                    <div class="col-sm-12">
                    <div class="emergency-form">
                    
                                <div class="table-responsive">
                                    <table id="table_id"  class="datatable table table-stripped display">
                                        <thead>
   
                                            <th>Patient Id</th>
                                            <th>Appointment Id</th>
                                            <th>Name</th>
                                            <th>ScheduleDate</th>
                                            <th>Time Slot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $list)
  
                                        <tr>
                                            <td>{{$list->user_id}}</td>
                                            <td>{{$list->id}}</td>
                                            <td>{{ Auth::user()->name }}</td>
                                            <td>{{$list->user_date}}</td>
                                            <td>{{$list->user_time}}</td>

                                        </tr>
                                     @endforeach
                                         
                                    </tbody>
                                  </table>
                               
                                  </div>
                                 
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
</div>
</section>
 

  @endsection
@extends('doctor/doctor_layout')
@section('container')
@section('report_select','active')


<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Print records between dates </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-title">Date</h4>
                            <form 
                            @if($id==1)
                             action="{{url('report_patient')}}"
                             @elseif($id==2)
                             action="{{url('report_appointment')}}"
                             @elseif($id==3)
                             action="{{url('report_attend_patient')}}"
                             @else
                             action="{{url('report_pending_patient')}}"

                             @endif
                              method="get">
                                @csrf
                            <div class="row">
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <input type="date" class="form-control" value=""  name="from_date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <input type="date" class="form-control" value=""  name="to_date" required>
                                   
                                </div>
                            </div>
                                <div class="text-right">
                                <button type="submit" class="btn btn-primary">Check</button>
                                </div>
                            </div>
                               
                            </form>
                        </div>
                    </div>
                    
                </div>
                </div>
                </div>
     

@endsection
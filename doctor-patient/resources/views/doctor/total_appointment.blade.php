@section('report_select','active')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_assets/favicons/img-favicon.png')}}">
    <title>Medlife</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('doctor_assets/css/css-style.css')}}">
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{url('/doctor/dashboard')}}" class="logo">
                    <!-- <img src="{{asset('doctor_assets/images/img-logo.png')}}" width="35" height="35"  alt=""> -->
                        <span>Medlife</span>
                </a>
            </div>
            </div>
            </div>
            

<div class="page-wrapper" style="margin-left: 0px;">
            <div class="content">
            <div class="text-center">
            <h3><a   id="element" href="{{url('doctor/report')}}"><i class="fa fa-arrow-left"></i>Back</a></h3>
            </div>
                <div class="row">
                    <div class="col-sm-5 col-5">

                    <div class="text-center">
                        </div>
                        <h4 class="page-title">Total Appointment</h4>
                    </div>
                 
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped custom-table mb-0 datatable" >
                                <thead>
                                  
                                    <tr>
                                        <th>#</th>
                                        <th> Name</th>
                                        <th> Age</th>
                                        <th> Gender</th>
                                        <th>Number </th>
                                        <th>Symptoms </th>
                                        <th>Date</th>
                                        <th>Time</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $list)
                                    <tr>
                                        <td>{{$list->id}} </td>
                                        <td>{{$list->name}}</td>
                                        <td>{{$list->user_age}}</td>
                                        <td>{{$list->user_gender}}</td>
                                        <td>{{$list->user_number}}</td>
                                        <td>{{$list->user_symptoms}}</td>
                                        <td>{{$list->user_date}}</td>
                                        <td>{{$list->user_time}}</td>

                                    </tr>
                                  @endforeach
                                  <div class="text-center text-danger">
                                 <h2>{{session('message')}}</h2>
                                 </div>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-12 col-12 text-center mt-5 m-b-30">
                
                <a href="" onclick="printpage()"  id="element" class="btn btn-primary btn-rounded btnprn"><i class="fa fa-print"></i> Print</a>
             
             </div>
         </div>
     </div>
 </div>


</div> 

<div class="sidebar-overlay" data-reff=""></div>
<script src="{{asset('front_assets/js/js-jquery.min.js')}}"></script>
<script src="{{asset('doctor_assets/js/js-popper.min.js')}}"></script>
<script src="{{asset('doctor_assets/js/js-bootstrap.min.js')}}"></script>
<script src="{{asset('doctor_assets/js/js-jquery.dataTables.min.js')}}"></script>
<script src="{{asset('doctor_assets/js/js-dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('doctor_assets/js/js-app.js')}}"></script> 

<script type="text/javascript">

function printpage(){
document.getElementById("element").style.display = "none"; 
window.print();
}
</script>
</body>

</html>
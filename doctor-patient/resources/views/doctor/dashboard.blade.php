@extends('doctor/doctor_layout')
@section('container')
@section('dashboard_select','active')

</div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>98</h3>
                        <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>1072</h3>
                        <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>72</h3>
                        <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>618</h3>
                        <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="appointments.html"
                            class="btn btn-primary float-right">View all</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Timing</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take
                                                up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take
                                                up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take
                                                up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take
                                                up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take
                                                up</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="notification-box">
        <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
                <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll" id="msg_list">
                <ul class="list-box">
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Richard Miles </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item new-message">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">John Doe</span>
                                    <span class="message-time">1 Aug</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Tarah Shropshire </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Mike Litorus</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Catherine Manseau </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">D</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Domenic Houston </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">B</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Buster Wigton </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Rolland Webber </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Claire Mapes </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Melita Faucher</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Jeffery Lalor</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">L</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Loren Gatlin</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Tarah Shropshire</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="chat.html">See all messages</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script src="js/js-jquery-3.2.1.min.js"></script>
<script src="js/js-popper.min.js"></script>
<script src="js/js-bootstrap.min.js"></script>
<script src="js/js-jquery.slimscroll.js"></script>
<script src="js/js-Chart.bundle.js"></script>
<script src="js/js-chart.js"></script>
<script src="js/js-app.js"></script>
</body>

</html>

@endsection
@extends('front/layout')
@section('container')
@section('contact_select','active')

    <div class="page-title-area item-bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                        <h3 class="text-warning">{{session('msg')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <h3>Email Here</h3>
                        <p> 
                                <a href="/cdn-cgi/l/email-protection#2a424f4646456a43444c4504494547"><span
                                        class="__cf_email__"
                                        data-cfemail="573f323b3b38173e3931387934383a">[email&nbsp;protected]</span></a>
                        
                        </p>
                        <p><a href="/cdn-cgi/l/email-protection#4f262129200f3b2621352a3d612c2022"><span
                                    class="__cf_email__"
                                    data-cfemail="83eaede5ecc3f7eaedf9e6f1ade0ecee">[email&nbsp;protected]</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-pin"></i>
                        </div>
                        <h3>Location Here</h3>
                        <p>3254-425 NW-2nd Ave,Pune 
<br> India</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <h3>Call Here</h3>
                        <p><a href="tel:1234567890">+91 9876543211</a></p>
                        <p><a href="tel:2414524526">+91 45254 45246</a></p>
                    </div>
                </div>
            </div>
            <div class="section-title">
                <span>Contact Us</span>
                <h2>Drop us Message for any Query</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div class="contact-form">
                <form  method="post" action="{{url('user/contact')}}">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="cname" id="name" class="form-control" required
                                    data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" name="cemail" id="email" class="form-control" required
                                    data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="cphone_number" id="phone_number" required
                                    data-error="Please enter your number" class="form-control" placeholder="Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="cmsg_subject" id="msg_subject" class="form-control" required
                                    data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="cmessage" class="form-control" id="message" cols="30" rows="5" required
                                    data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                Send Message
                                <span></span>
                            </button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection
@include('../componantes/loading')
@include('../componantes/navbar')
    <!-- Progress scroll totop -->
    @if(Session::has('success'))
        <div id="alertt" class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

    <!-- Slider -->
    <header class="header slider-fade" id=home>
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="img/slider/1.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-12">
                                <h6>Welcome to Carex</h6>
                                <h1>Auto Service, Maintenance <span>&</span> Repair</h1>
                                <a href="#Contact" class="button-1 ">Book Now <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="img/slider/7.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 text-center">
                                <h6>Welcome to Carex</h6>
                                <h1>Your vehicle is in<br>safe hands</h1>
                                <a href="#Contact" class="button-1 mt-15">Book Now <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="img/slider/4.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 text-end">
                                <h6>Welcome to Carex</h6>
                                <h1>Performance<br>Without Compromise</h1>
                                <a href="#Contact" class="button-1 mt-15">Book Now <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- divider line -->
    <!-- <div class="line-vr-section"></div> -->
    <!-- About -->
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-two-img full-width mb-30">
                        <div class="img1 img-grayscale"> <img src="img/about.jpg" class="rounded-1" alt=""> </div>
                        <div class="img2 img-grayscale"> <img src="img/about2.jpg" class="rounded-1" alt="">
                            <div class="play-button">
                                <a href="https://youtu.be/qOLM7jyxRBU" class="btn vid">
                                    <svg width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="none">
                                        <circle class="circle" cx="50" cy="50" r="48" stroke="white" stroke-width="2" fill="none" />
                                    </svg> <i class="fa-solid fa-play mt-4"></i> </a>
                            </div>
                        </div>
                        <div class="award-icon animate-box" data-animate-effect="fadeInUp">
                            <div class="star">
                                <div class="img"> <img src="img/star.png" alt="">  </div>
                            </div>
                            <h6>100%</h6>
                            <p>Quality Service</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12 animate-box" data-animate-effect="fadeInRight">
                    <div class="section-title2">About Us</div>
                    <div class="section-title">Care<span>x</span> Car Service & Repair</div>
                    <p class="mb-30">Car repair quisque sodales dui ut varius vestibulum drana tortor turpis porttiton tellus eu euismod nisl massa ut odio in the miss volume placerat urna, a lacinia eros nunta urna mauris, vehicula rutrum tempus in the interdum felis.</p>
                    <ul class="list-unstyled list mb-30">
                        <li>
                            <div class="list-icon"> <i class="fa-solid fa-check true-icon"></i> </div>
                            <div class="list-text">
                                <p>We offer multiple services</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-icon">  <i class="fa-solid fa-check true-icon"></i> </div>
                            <div class="list-text">
                                <p>Multiple car repair locations</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-icon"> <i class="fa-solid fa-check true-icon"></i> </div>
                            <div class="list-text">
                                <p>Original products</p>
                            </div>
                        </li>
                    </ul> 
                    <a href="about.html" class="button-3">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Services -->
    <section class="services1 section-padding" id="Services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title3">What We Do</div>
                    <div class="section-title">Our Services</div>
                </div>
            </div>
        </div>
        <div class="full-width">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="tires">
                                <div class="wrap">
                                    <div class="wrapper-img"> <img src="img/services/1.jpg" class="img-fluid rounded-1"> </div>
                                    <div class="wrapper-title">
                                        <h6>01.</h6>
                                        <h4>Tire Change & Repair</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="oils">
                                <div class="wrap">
                                    <div class="wrapper-img"> <img src="img/services/2.jpg" class="img-fluid rounded-1"> </div>
                                    <div class="wrapper-title">
                                        <h6>02.</h6>
                                        <h4>Change Oil & Filter</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="engines">
                                <div class="wrap">
                                    <div class="wrapper-img"> <img src="img/services/3.jpg" class="img-fluid rounded-1"> </div>
                                    <div class="wrapper-title">
                                        <h6>03.</h6>
                                        <h4>Engine Maintenance</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="battary">
                                <div class="wrap">
                                    <div class="wrapper-img"> <img src="img/services/4.jpg" class="img-fluid rounded-1"> </div>
                                    <div class="wrapper-title">
                                        <h6>04.</h6>
                                        <h4>Battery Replacement</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="ABS">
                                <div class="wrap">
                                    <div class="wrapper-img"> <img src="img/services/6.jpg" class="img-fluid rounded-1"> </div>
                                    <div class="wrapper-title">
                                        <h6>05.</h6>
                                        <h4>ABS Working & Repair</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Process -->
    <section class="process section-padding bg-white" id="Process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title3 white">How We Work</div>
                    <div class="section-title white">Our Process</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <i class="Our-Process fa-solid fa-book-open-reader"></i>
                        <h5>Book appointment</h5>
                        <p>Car lorem quisque sodales the varius vestibulum felis.</p>
                        <div class="numb">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <i class="Our-Process fa-solid fa-gears"></i>
                        <h5>Car Maintenance</h5>
                        <p>Car lorem quisque sodales the varius vestibulum felis.</p>
                        <div class="numb">02</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <i class="Our-Process fa-solid fa-screwdriver-wrench"></i>
                        <h5>Get the Vehicle Repaired</h5>
                        <p>Car lorem quisque sodales the varius vestibulum felis.</p>
                        <div class="numb">03</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <i class="Our-Process fa-solid fa-certificate"></i>
                        <h5>Ready for Deliver</h5>
                        <p>Car lorem quisque sodales the varius vestibulum felis.</p>
                        <div class="numb">04</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mt-60"> <a href="#Contact" class="button-2">Book Now <i class="fa-solid fa-arrow-right"></i></a> </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Testiominals -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title3">Testimonials</div>
                    <div class="section-title">What <span>Customers</span> Say</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials left">
                        <figure class="img-grayscale"> <img src="img/testiominals.jpg" alt="" class="img-fluid rounded-1"> </figure>
                        <div class="caption testimonials">
                            <div class="owl-carousel owl-theme">
                                <div class="item-box"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                                    <h5>Terrific auto repair shop!</h5>
                                    <p>Came in for 'walk-in' inspection and oil change. Brown is delight to deal with. He took my car right in, and completed work in a short time. Highly recommend the shop.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/2.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Olivia Brown</h6> <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-box"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                                    <h5>Highly recommend the shop.</h5>
                                    <p>Came in for 'walk-in' inspection and oil change. Brown is delight to deal with. He took my car right in, and completed work in a short time. Terrific auto repair shop!</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/3.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Enrico White</h6> <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="img/slider/2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title3 white">Explore</div>
                    <div class="section-title white">Our Promo Video</div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" href="https://youtu.be/qOLM7jyxRBU">
                        <div class="vid-butn"> <span class="icon"> <i class="fa-solid fa-play mt-4"></i> </span> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding bg-white" id="Team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title3">Certified Team</div>
                    <div class="section-title">Our Experts Team</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="team-img"><img src="img/team/1.jpg" alt="" class="w-100"></div>
                            <div class="con">
                                <h5 class="mb-0"><a href="team-single.html">Enrico Brown<br><span>General Manager</span></a></h5>
                                <div class="arrow"> <a href="team-single.html"><i class="fa-solid fa-arrow-right"></i></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-img"> <img src="img/team/2.jpg" alt="" class="w-100"> </div>
                            <div class="con">
                                <h5 class="mb-0"><a href="team-single.html">Olivia Smith<br><span>Engine Specialist</span></a></h5>
                                <div class="arrow"> <a href="team-single.html"><i class="fa-solid fa-arrow-right"></i></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-img"> <img src="img/team/3.jpg" alt="" class="w-100"> </div>
                            <div class="con">
                                <h5 class="mb-0"><a href="team-single.html">Pedro Martin<br><span>Certified Technician</span></a></h5>
                                <div class="arrow"> <a href="team-single.html"><i class="fa-solid fa-arrow-right"></i></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-img"><img src="img/team/4.jpg" alt="" class="w-100"></div>
                            <div class="con">
                                <h5 class="mb-0"><a href="team-single.html"> Alberto Steve<br><span>Certified Mechanic</span></a></h5>
                                <div class="arrow"> <a href="team-single.html"><i class="fa-solid fa-arrow-right"></i></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-img"> <img src="img/team/5.jpg" alt="" class="w-100"> </div>
                            <div class="con">
                                <h5 class="mb-0"><a href="team-single.html">Wagner Brown<br><span>Certified Engine</span></a></h5>
                                <div class="arrow"> <a href="team-single.html"><i class="fa-solid fa-arrow-right"></i></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-img"> <img src="img/team/6.jpg" alt="" class="w-100"> </div>
                            <div class="con">
                                <h5 class="mb-0"><a href="team-single.html">Andrea Lion<br><span>Customer Support</span></a></h5>
                                <div class="arrow"> <a href="team-single.html"><i class="fa-solid fa-arrow-right"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Blog -->
    <section class="blog1 section-padding" id="Our Blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title3">Our Blog</div>
                    <div class="section-title">Latest <span>News</span></div>
                </div>
            </div>
        </div>
        <div class="full-width">
            <div class="row">
                <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                   
                    <div class="item">
                        <div class="wrap">
                            <div class="wrapper-img"> <img src="img/blog/1.jpg" class="img-fluid rounded-1"> </div>
                            <div class="wrapper-title">
                                <h6>Repair</h6>
                                <h4>Tips for Winterizing Your Car</h4> 
                                <span class="icon"> <i class="fa-solid fa-book-open-reader mt-3"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="wrapper-img"> <img src="img/blog/4.jpg" class="img-fluid rounded-1"> </div>
                            <div class="wrapper-title">
                                <h6>Tire</h6>
                                <h4>How to Change a Flat Tire</h4> 
                                <span class="icon"> <i class="fa-solid fa-book-open-reader mt-3"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="wrapper-img"> <img src="img/blog/6.jpg" class="img-fluid rounded-1"> </div>
                            <div class="wrapper-title">
                                <h6>Engine</h6>
                                <h4>Why Does My Car Not Start?</h4> <span class="icon"> <i class="fa-solid fa-book-open-reader mt-3"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="wrapper-img"> <img src="img/blog/3.jpg" class="img-fluid rounded-1"> </div>
                            <div class="wrapper-title">
                                <h6>Car Repair</h6>
                                <h4>Old Car Engine Repair</h4> <span class="icon"> <i class="fa-solid fa-book-open-reader mt-3"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="wrapper-img"> <img src="img/blog/1.jpg" class="img-fluid rounded-1"> </div>
                            <div class="wrapper-title">
                                <h6>Mechanic</h6>
                                <h4>Signs Of Transmission Failure</h4> <span class="icon"> <i class="fa-solid fa-book-open-reader mt-3"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="wrap">
                            <div class="wrapper-img"> <img src="img/blog/5.jpg" class="img-fluid rounded-1"> </div>
                            <div class="wrapper-title">
                                <h6>Battery</h6>
                                <h4>How to Change a Car Battery</h4> <span class="icon"> <i class="fa-solid fa-book-open-reader mt-3"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment -->
    <section class="appointment" id="Contact">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg" data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <!-- Appointment -->
                    <div class="col-lg-5 col-md-12 mb-30 mt-60">
                        <div class="ready mb-20">
                            <h5>Book Now</h5>
                            <h4>Make Your Appointment</h4>
                            <p>Get special repaire service for your car from our experts with appointmet and win car wash Free.</p>
                        </div>
                        <div class="help">
                            <div class="icon color-1"><span class="carex-phone-call"></span></div>
                            <div class="text">
                                <p class="color-1">Need Any Help?</p> <a class="color-1" href="tel:855-100-4444">855 100 4444</a>
                            </div>
                        </div>
                    </div>
                    <!-- Booking From -->
                    <div class="col-lg-6 offset-lg-1 col-md-12">
                        <div class="booking-box">
                            <div class="head-box mb-30">
                                <h5>Appointment</h5>
                                <h4>Book For A Service</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form class="form1 clearfix" action="{{ url('/booking') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <div class="input2_inner">
                                                    <input name="bookingName" type="text" class="form-control input" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <div class="input2_inner">
                                                    <input name="email" type="email" class="form-control input" placeholder="Your email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <div class="input2_inner">
                                                    <input name="phone" type="text" class="form-control input" placeholder="Your Phone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <div class="input2_inner">
                                                    <input name="service_Date" type="date" class="form-control input" placeholder="Service Date" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <div class="select1_inner">
                                                    <select name="service_Time" class="select2 select" style="width: 100%">
                                                        <option value="0">Service Time</option>
                                                        <option value="10:00 am">10:00 am</option>
                                                        <option value="11:00 am">11:00 am</option>
                                                        <option value="12:00 pm">12:00 pm</option>
                                                        <option value="1:00 pm">1:00 pm</option>
                                                        <option value="2:00 pm">2:00 pm</option>
                                                        <option value="3:00 pm">3:00 pm</option>
                                                        <option value="4:00 pm">4:00 pm</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <div class="select1_inner">
                                                    <select name="service_type" class="select2 select" style="width: 100%">
                                                        <option value="0">Services</option>
                                                        <option value="Tire Change & Repair">Tire Change & Repair</option>
                                                        <option value="Change Oil & Filter">Change Oil & Filter</option>
                                                        <option value="Engine Maintenance">Engine Maintenance</option>
                                                        <option value="Battery Replacement">Battery Replacement</option>
                                                        <option value="Car Wash & Polish">Car Wash & Polish</option>
                                                        <option value="ABS Working & Repair">ABS Working & Repair</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <div class="input2_inner">
                                                    <input name="car_model" type="text" class="form-control input" placeholder="Car Model" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/1.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/2.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/3.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/4.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    @include('../componantes/footer')
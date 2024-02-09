
@extends('welcome')

@section('contents')
<!-- Slider Area -->
<section class="slider mb-20">
    <div class="hero-slider  ">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('https://images.ctfassets.net/rt5zmd3ipxai/5tLyiQibtIZvPcxwGrHTle/8f9899e6a4f3081e22c509642156abfb/vaccinations-puppy.jpg?fit=fill&fm=webp&h=480&w=782&q=72,%20https://images.ctfassets.net/rt5zmd3ipxai/5tLyiQibtIZvPcxwGrHTle/8f9899e6a4f3081e22c509642156abfb/vaccinations-puppy.jpg?fit=fill&fm=webp&h=960&w=1564&q=72">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text pl-14">
                            <h1 class="text-4xl">RABIES</span></h1>
                            <p class="text-black text-2xl"> <span class="text-blue-400">100% vaccine</span> preventable to save lives, to <span class="text-red-500">stop transmission</span>.</p>
                            <div class="button">
                                <a href="#" class="btn">Login as guest</a>
                                <a href="#" class="btn primary login-btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('https://www.clinicaltrialsarena.com/wp-content/uploads/sites/22/2023/09/shutterstock_1506051596.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text pl-14">
                            <h1>RABIES VACCINATION <br> STARTS WITH YOU</span></h1>
                            <p class="text-black text-2xl">Don't leave the issue unheard. Do your part and educate the world about it. <br> End rabies. <span class="text-blue-500">Stay healthy</span> and be safe.</p>
                            <div class="button">
                                <a href="#" class="btn">Login as guest</a>
                                <a href="#" class="btn primary login-btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('https://live.staticflickr.com/2864/9890317566_3565a3e4a2_b.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text pl-14">
                            <h1>Rabies causes <span class="text-red-500">60,000 deaths annually</span> worldwide. Let's stop it.</h1>

                            <p class="text-black text-2xl">Rabies, a deadly viral disease transmitted through the saliva of infected animals, remains a significant global health concern, claiming approximately <span class="text-red-500">60,000 lives annually.</span></p>

                            <div class="button">
                                <a href="#" class="btn">Login as guest</a>
                                <a href="#" class="btn primary login-btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->


{{-- location --}}
<section class="Location section" id="location">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Rural Health Unit in Mariveles Bataan</h2>
                    <h2>Welcome to Our Clinic</h2>
                    <img class="m-auto" src="img/section-img.png" alt="#">
                    <p>Find the nearest Rural Health Unit here!</p>
                    <p class="text-2xl">Experience exceptional healthcare tailored to your needs. Our dedicated team offers a range of services in a caring environment. Your well-being is our priority. Visit us today for personalized care that puts you first.</p>

                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- Start Single features -->
                <div class="single-features p-20">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7727.7735419001!2d120.4838056169495!3d14.433688323666903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339618ceba3684b5%3A0xff96824b50d2abf9!2sMariveles%20District%20Hospital!5e0!3m2!1sen!2sph!4v1707469213546!5m2!1sen!2sph" 
                    width="1500" 
                    height="750" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="single-features w-full z-0" id="map" style="height: 600px;">
                   
                </div>
                <!-- End Single features -->
                
            </div>
           
        </div>
    </div>
</section>
{{-- end location --}}

<!-- Start Feautes -->
<section class="Feautes section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You & Your Family</h2>
                    <img class="m-auto" src="img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-ambulance-cross"></i>
                    </div>
                    <h3>Emergency Help</h3>
                    <p class="text-white">Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Enriched Pharmecy</h3>
                    <p class="text-white">Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>Medical Treatment</h3>
                    <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
        </div>
    </div>
</section>
<!--/ End Feautes -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">3468</span>
                        <p>Healthcare Facilities</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">557</span>
                        <p>Specialist Doctors</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">4379</span>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">32</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun-facts -->


<!-- Start service -->
<section class="services section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Different Services To Improve Your Health</h2>
                    <img src="img/section-img.png" class="m-auto" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-prescription"></i>
                    <h4><a href="service-details.html">Consultation</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont-injection-syringe"></i>
                    <h4><a href="service-details.html">Anti-Rabies</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont-medicine"></i>
                    <h4><a href="service-details.html">Medicine</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont-teacher"></i>
                    <h4><a href="service-details.html">Free Seminar</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!--/ End service -->


<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Did you know?</h2>
                    <img src="img/section-img.png" class="m-auto" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/world-rabies-day-promo-template-design-4bf09384e69621baa0200c0946637c62_screen.jpg?ts=1600973558" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">September 28</div>
                            <h2><a href="blog-single.html">Rabies Awareness</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="https://sacoronavirus.co.za/wp-content/uploads/2023/09/1080.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">September 25</div>
                            <h2><a href="blog-single.html">Rabies Awareness</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="https://www.maxicare.com.ph/wp-content/uploads/2022/10/latest-announcements-rabies-vaccine-guidelines-thumbnail-c.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">February 2024</div>
                            <h2><a href="blog-single.html">Rabies Treatment</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

@endsection
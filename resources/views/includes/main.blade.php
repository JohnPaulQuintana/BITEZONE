
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
                            <p class="text-black text-2xl"> <span class="text-blue-600">100% vaccine</span> preventable to save lives, to <span class="text-red-600">stop transmission</span>.</p>
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
                            <p class="text-black text-2xl">Don't leave the issue unheard. Do your part and educate the world about it. End rabies. <span class="text-blue-500">Stay healthy</span> and be safe.</p>
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
        <div class="single-slider" style="background-image:url('https://i0.wp.com/www.purplecatvet.com/wp-content/uploads/2021/03/131565674_m.jpg?fit=2473%2C1696&ssl=1')">
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
                <div class="single-features">
               
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
                    <p>If there's any suspicion of exposure to the rabies virus, seek medical attention immediately. Post-exposure prophylaxis (PEP) can effectively prevent the onset of symptoms if administered promptly.</p>
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
                    <p>Swift Action Saves Lives. In case of potential rabies exposure, seek emergency help immediately. Time is critical for effective prevention.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Enriched Pharmacy</h3>
                    <p>Your Health, Our Priority: At Enriched Pharmacy, we're committed to providing expert guidance on rabies prevention. Trust us for knowledgeable advice and top-tier services.</p>
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
                    <p>Rabies Concerns? Prompt Medical Treatment is Your Shield. Don't wait; seek professional help immediately for the right care and protection.</p>
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
                    <i class="icofont-stethoscope"></i>
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
                    <i class="icofont-teacher"></i>
                    <div class="content">
                        <span class="counter">23</span>
                        <p>Seminar</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">32</span>
                        <p>Patients</p>
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
                    <p>There are various services aimed at improving health and well-being. Here are different types of services that contribute to you.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-prescription"></i>
                    <h4><a href="service-details.html">Consultation</a></h4>
                    <p>Empowering Wellness, One Consultation at a Time. Your journey to a healthier, happier you starts with personalized health consultations. Let's prioritize your well-being together!</p>	
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont-injection-syringe"></i>
                    <h4><a href="service-details.html">Anti-Rabies</a></h4>
                    <p>Guardian against Rabies: Protect your furry friends and loved ones. Vaccinate, Educate, Eliminate. Together, we can create a rabies-free world. </p>	
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont-medicine"></i>
                    <h4><a href="service-details.html">Medicine</a></h4>
                    <p>Healing in a Capsule: Bridging the gap between illness and well-being. Your health, our priority.</p>	
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont-teacher"></i>
                    <h4><a href="service-details.html">Free Seminar</a></h4>
                    <p>Nurturing Knowledge for a Healthier Tomorrow. Join our enlightening health seminar to empower yourself with insights for a vibrant and resilient life!</p>	
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
                    <p>Knowledge is the Key to Rabies Prevention. Learn, Protect, and Advocate for a world without this preventable disease.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="https://files01.pna.gov.ph/category-list/2023/05/03/ilocos-norte-anti-rabies-shot.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">May 2023</div>
                            <h2><a href="blog-single.html">Ilocos Norte records 30 rabies cases</a></h2>
                            <p class="text">The Provincial Veterinary Office (PVO), along with the city and municipal agriculture offices, 
                                continues to intensify its anti-rabies vaccination for dogs as rabies cases have begun to increase, with 
                                30 cases reported so far those year.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="https://ritm.gov.ph/wp-content/uploads/2023/10/Picture1-1024x547.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">September 2023</div>
                            <h2><a href="blog-single.html">RabCon 2023 calls for One Health approach; highlights need for strengthened surveillance for rabies</a></h2>
                            <p class="text">The Research Institute for Tropical Medicine - Veterinary Research Department held the second Rabies Conference in Las Piñas City on September 21-22, 2023 to discuss the collaborative efforts on surveillance and scientific advancements on rabies.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="https://www.cdc.gov/rabies/animals/images/rabies-vectors-large.jpg?_=04567" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">February 2024</div>
                            <h2><a href="blog-single.html">Animals and Rabies</a></h2>
                            <p class="text">Rabies affects only mammals. Mammals are warm-blooded animals with fur. 
                                People are also mammals. Birds, snakes, and fish are not mammals, so they can’t get rabies and they can’t give it to you. 
                                But any mammal can get rabies, including people. While rabies is rare in people in the United States, with only 1 to 3 cases 
                                reported annually, about 60,000 lives get post-exposure prophylaxis (PEP) each year to prevent rabies infection after 
                                being bitten or scratched by an infected or suspected infected animal.
                            </p>
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
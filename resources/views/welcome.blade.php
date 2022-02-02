@extends('layouts.website2')

@section('title')
    <title>Kimenyi & Company Advocates | Commissioners for Oath & Notary Public </title>
@endsection
@section('header')
    
@endsection

@section('content')
    <!-- Bnner Section -->
    <section class="banner-section-three">
        <div class="banner-carousel-two owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/main-slider/law3.jpg);">
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <div class="inner-box">
                            <h2>Conveyancing</h2>
                            <div class="text">In law, conveyancing is the transfer of legal title to (of) real property from one person to another, or the granting of an encumbrance such as a mortgage or a lien.</div>
                            <div class="link-box"><a class="text-white" href="{{route('conveyancing')}}">Learn More</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/main-slider/law2.jpg);">
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <div class="inner-box">
                            <h2>Dispute Resolution</h2>
                            <div class="text">Dispute resolution or dispute settlement is the process of resolving disputes between parties.</div>
                            <div class="link-box"><a class="text-white" href="{{route('dispute-resolution')}}">Learn More</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/main-slider/law1.jpg);">
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <div class="inner-box">
                            <h2>Family Law</h2>
                            <div class="text">Family law is a legal practice area that focuses on issues involving family relationships such as marriage, adoption, divorce, and child custody, among others. </div>
                            <div class="link-box"><a class="text-white" href="{{route('family-law')}}">Learn More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-box">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <ul class="social-links clearfix">
                        <li><a href="#"><span class="fa fa-linkedin"></span> Linkedin</a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span> Gmail</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- About Section -->
    <section class="about-us mt-5">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="float-text">About Us</span>
                <h2>Who We Are</h2>
            </div>
            <div class="row">
                <div class="news-block col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="website/images/resource/shanice.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="#">Ms. Virginiah Shanice Kimenyi</a></h3>
                            <h4>Managing Partner</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <p id="about-us-description">Ms. Kimenyi is the proprietor of the firm with over 14 years legal practice experience in Kenya having been trained both in India and Kenya. She has vast experience in Corporate Commercial law, Conveyancing, (Alternative) Dispute Resolution and Family Law. She has strived to build a successful law practice that offers comprehensive legal counsel and representation. Her expertise in Family Law matters is especially exceptional. She has contributed to the shaping of Children laws in Kenya.</p>
                </div>
            </div>
        </div> 
    </section>
    <!--End About Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="upper-box" style="background-image: url(website/images/background/2.jpg);">
            <div class="auto-container">    
                <div class="sec-title text-center light">
                    <span class="float-text">Specialization</span>
                    <h2>Our Specialization</h2>
                </div>
            </div>
        </div>

        <div class="services-box">
            <div class="auto-container">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block 1 -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{route('conveyancing')}}"><img src="website/images/resource/convey.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{route('conveyancing')}}">Conveyancing</a></h3>
                                <div class="link-box">
                                    <a href="{{route('conveyancing')}}">Learn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block 2 -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{route('commerciallaw')}}"><img src="website/images/resource/comercial.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{route('commerciallaw')}}">Corporate-commercial Law</a></h3>
                                <div class="link-box">
                                    <a href="{{route('commerciallaw')}}">Learn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block 3 -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{route('dispute-resolution')}}"><img src="website/images/resource/dispute.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{route('dispute-resolution')}}">Dispute Resolution</a></h3>
                                <div class="link-box">
                                    <a href="{{route('dispute-resolution')}}">Learn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block 4 -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{route('family-law')}}"><img src="website/images/resource/fimilyy.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{route('family-law')}}">Family Law & Estate Planning</a></h3>
                                <div class="link-box">
                                    <a href="{{route('family-law')}}">Learn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->
        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="outer-container clearfix">
                <!-- Title Column -->
                <div class="title-column clearfix">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">testimonial</span>
                            <h2>What Client Says</h2>
                        </div>
                        <div class="text">We are the best at what we do, and how do you know this? Well here is what Clients we've represented before have got to say.</div>
                    </div>
                </div>

                <!-- Testimonial Column -->
                <div class="testimonial-column clearfix" style="background-image: url(website/images/background/4.jpg);">
                    <div class="inner-column">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="image-box"><img src="website/images/resource/client.png" alt=""></div>
                                    <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                    <div class="info-box">
                                        <h4 class="name">Muna Robi</h4>
                                        <span class="designation">CEO, Rango Technologies</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="image-box"><img src="website/images/resource/client.png" alt=""></div>
                                    <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                    <div class="info-box">
                                        <h4 class="name">Muna Robi</h4>
                                        <span class="designation">CEO, Rango Technologies</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="image-box"><img src="website/images/resource/client.png" alt=""></div>
                                    <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                    <div class="info-box">
                                        <h4 class="name">Muna Robi</h4>
                                        <span class="designation">CEO, Rango Technologies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Section -->
           <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Blogs</span>
                <h2>Updates & Media</h2>
            </div>
            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="website/images/resource/news11.png" alt=""></figure>
                            <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="#">New Laws on Children Adoption.</a></h3>
                            <ul class="info">
                                <li>06 January 2022,</li>
                                <li>Cindy Amuka</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="website/images/resource/news11.png" alt=""></figure>
                            <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="#">The Company Registration Act.</a></h3>
                            <ul class="info">
                                <li>02 February 2022,</li>
                                <li>Cindy Amuka</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="website/images/resource/news11.png" alt=""></figure>
                            <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="#">Advantages of Resolving Cases out of Court.</a></h3>
                            <ul class="info">
                                <li>02 February 2022,</li>
                                <li>Cindy Amuka</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

 

    
  
@endsection

@section('javascript')
    
@endsection
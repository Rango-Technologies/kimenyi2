@extends('layouts.website2')

@section('title')
    <title>Kimenyi & Company Advocates | Corporate-commercial Law </title>
@endsection

@section('header')
    
@endsection

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Corporate-commercial Law</h1>
                    <span class="title">We do it Better</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Home</a></li>
                    <li>Corporate-commercial Law</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
      <!--Sidebar Page Container-->
      <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <figure class="image"><img src="website/images/resource/service-detail.jpg" alt="" /></figure>
                                    <figure class="image"><img src="website/images/resource/service-detail.jpg" alt="" /></figure>
                                    <figure class="image"><img src="website/images/resource/service-detail.jpg" alt="" /></figure>
                                </div>
                            </div>
                            <h2>Corporate-commercial Law</h2>
                            <div class="text">
                                <strong>We are skilled in Corporate-commercial Law</strong>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley. I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees.</p>
                                <h3>Our Strategy</h3>
                                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley. I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees.</p>
                                <div class="two-column row">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>Our Key Features</h3>
                                        <ul>
                                            <li>3D Conceptual Rendering & Space Planning</li>
                                            <li>Animation & Interactive Programming</li>
                                            <li>Graphic Design & Production</li>
                                            <li>AutoCAD Detailing and Control Drawings</li>
                                            <li>Interior Design, Mood Boards & Material Finish</li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="images/resource/image-3.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <blockquote>Who do not know how to pursue pleasure rationally encounters consequences that are extremely painful nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,<cite>William Jomurray</cite></blockquote>
                            </div>
                        </div>
                         
                    </div>
                </div>
                 <!--Sidebar Side-->
                 <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                    
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
                                <li><a href="{{route('conveyancing')}}">CONVEYANCING</a></li>
                                <li class="active"><a href="{{route('commerciallaw')}}">CORPORATE-COMMERCIAL LAW</a></li>
                                <li><a href="{{route('dispute-resolution')}}">DISPUTE RESOLUTION</a></li>
                                <li><a href="{{route('family-law')}}">FAMILY LAW & ESTATE PLANNING</a></li>
                            </ul>
                        </div>

                        <!--Help Box-->
                        <div class="help-box" style="background-image:url(images/resource/brochure-bg.jpg)">
                            <div class="inner">
                                <span class="title">Quick Contact</span>
                                <h2>Get Solution</h2>
                                <div class="text">Contact us at the Interior office nearest to you or submit a business inquiry online.</div>
                                <a class="theme-btn btn-style-three" href="contact.html">Contact</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    
@endsection
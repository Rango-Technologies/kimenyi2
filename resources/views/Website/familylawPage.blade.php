@extends('layouts.website2')

@section('title')
    <title>Kimenyi & Company Advocates | Family Law & Estate Planning </title>
@endsection

@section('header')
    
@endsection

@section('content')
     <!--Page Title-->
     <section class="page-title" style="background-image:url(website/images/background/11.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Family Law & Estate Planning</h1>
                    <span class="title">We do it Better</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Home</a></li>
                    <li>Family Law & Estate Planning</li>
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
                            <h2>Family Law & Estate Planning</h2>
                            <div class="text">
                                <strong>We handle Family Law & Estate Planning</strong>
                                
                                <div class="two-column row">
                                    <div class="column col-lg-8 col-md-12 col-sm-12">
                                        <p>The firm’s main area of practice is its Family Law unit where we have vast experience in: </p>
                                        <ul>
                                            <li>Adoptions having handled national and international adoptions.</li>
                                            <li>Child custody & Guardianship matters</li>
                                            <li>Estate planning including offering professional advise on succession issues and drafting of wills.</li>
                                        </ul>
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
                                <li><a href="{{route('commerciallaw')}}">CORPORATE-COMMERCIAL LAW</a></li>
                                <li><a href="{{route('dispute-resolution')}}">DISPUTE RESOLUTION</a></li>
                                <li class="active"><a href="{{route('family-law')}}">FAMILY LAW & ESTATE PLANNING</a></li>
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
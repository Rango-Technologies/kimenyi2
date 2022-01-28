<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
@yield('title')
<!-- Stylesheets -->
<link href="{{asset('website/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('website/css/style.css')}}" rel="stylesheet">
<link href="{{asset('website/css/responsive.css')}}" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="{{asset('website/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('website/css/color-themes/teal-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('website/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('website/images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
@yield('header')
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
     <!-- Main Header-->
     <header class="main-header header-style-two">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="fa fa-envelope"></i><a href="#">Supportyou@Interiores.com</a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-four clearfix">
                            <li><span class="text-white"><i class="fa fa-volume-control-phone"></i> +254 789000000</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="#"><img src="website/images/advoc.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                   <li class="current"><a href="{{url('/')}}">Home</a></li>
                                    <li class="dropdown"><a href="{{route('practice-areas')}}">Practice Area</a>
                                        <ul>
                                            <li><a href="{{route('conveyancing')}}">Conveyancing </a></li>
                                            <li><a href="{{route('commerciallaw')}}">Corporate-commercial law</a></li>
                                            <li><a href="{{route('dispute-resolution')}}">Dispute Resolution </a></li>
                                            <li><a href="{{route('family-law')}}">Family Law & Estate planning</a></li>
                                        </ul>
                                    </li>
									<li><a href="{{route('team')}}">Our Team</a></li>
									<li><a href="{{route('media')}}">Updates & Media</a></li>
                                    <li><a href="{{route('contacts')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->                        

                        <!-- Outer Box-->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="#">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index-2.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                               <li class="current"><a href="{{url('/')}}">Home</a></li>
                                    <li class="dropdown"><a href="{{route('practice-areas')}}">Practice Area</a>
                                        <ul>
                                            <li><a href="{{route('conveyancing')}}">Conveyancing </a></li>
                                            <li><a href="{{route('commerciallaw')}}">Corporate-commercial law</a></li>
                                            <li><a href="{{route('dispute-resolution')}}">Dispute Resolution </a></li>
                                            <li><a href="{{route('family-law')}}">Family Law & Estate planning</a></li>
                                        </ul>
                                    </li>
									<li><a href="{{route('team')}}">Our Team</a></li>
									<li><a href="{{route('media')}}">Updates & Media</a></li>
                                    <li><a href="{{route('contacts')}}">Contact Us</a></li>
                            </ul> 
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->
    
    @yield('content')

    <!-- Offer Section -->
    <section class="offer-section" style="background-image: url(website/images/background/6.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><span>Contact Us</h2>
                        
                        <div class="text">Fill out the form below<br> and we will get intouch with you</div>
                    </div>
                </div> 

                <div class="form-column order-last col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="discount-form">
                            <!--Comment Form-->
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!--End Offer Section -->
    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(images/background/5.jpg);">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="text-white" style="border-bottom: 2px solid orange">
                                        <h2>Kimenyi & Company Advocates</h2>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Ms. Kimenyi is the proprietor of the firm with over 14 years legal practice experience in Kenya having been trained both in India and Kenya. She has vast experience in Corporate Commercial law, Conveyancing, (Alternative) Dispute Resolution and Family Law.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Recent Posts</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src="{{asset('/website/images/resource/post-thumb-1.jpg')}}" alt=""></a></div>
                                            <h4><a href="#">Criminal Law Article</a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                            </ul>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src="{{asset('/website/images/resource/post-thumb-2.jpg')}}" alt=""></a></div>
                                            <h4><a href="#">Family Law Article</a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>         
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                 <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Useful links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Project</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="{{route('login')}}">Our Portal</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Contact Details</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="projects.html">Project</a></li>
                                            <li><a href="blog-classic.html">News</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                       <a href="#" target="_blank"> <b>Copyright &copy; <script>document.write(new Date().getFullYear())</script>  Kimenyi & Advocates Company</b> </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
<script src="{{asset('website/js/jquery.js')}}"></script> 
<script src="{{asset('website/js/popper.min.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('website/js/owl.js')}}"></script>
<script src="{{asset('website/js/wow.js')}}"></script>
<script src="{{asset('website/js/appear.js')}}"></script>
<script src="{{asset('website/js/mixitup.js')}}"></script>
<script src="{{asset('website/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="{{asset('website/js/color-settings.js')}}"></script>
</body>


</html>
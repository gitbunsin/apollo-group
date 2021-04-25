
    @include('front.partials._css')    
    </head>
    <body class="{!! app()->getLocale(); !!}">
        <!-- Preloader -->
        <div class="preloader">
            <div class="load-box">
                <img src="images/preloader.gif" alt="">
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar -->
        <section class="top-bar">
            <div class="container">
                @include('front.partials._topbar')
            </div>
        </section>
        <!-- End Top Bar -->

        <!-- Menu Area -->
        <div class="main-menu">
           @include('front.partials._nav')
           <script src="{{ asset('js/app.js') }}"></script>
        </div>
        <!-- End Menu Area -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href=""><img src="images/logo.png" alt=""></a>
                                <ul class="list-unstyled">
                                    <li><a>Home</a>
                                        <ul class="list-unstyled">
                                            <li><a href="index.html">Home Version 1</a></li>
                                            <li><a href="index2.html">Home Version 2</a></li>
                                            <li><a href="index3.html">Home Version 3</a></li>
                                            <li><a href="#">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li><a>Pages</a>
                                        <ul class="list-unstyled">
                                            <li><a href="04-about-us.html">About Us</a></li>
                                            <li><a href="13-team.html">Our Team</a></li>
                                            <li><a href="14-team-single.html">Team Single</a></li>
                                            <li><a href="17-faq.html">F.A.Q</a></li>
                                            <li><a href="19-log-in.html">Log In</a></li>
                                            <li><a href="20-registration.html">Register</a></li>
                                            <li><a href="16-career.html">career</a></li>
                                            <li><a href="15-pricing.html">Pricing Table</a></li>
                                            <li><a href="18-404.html">404 Error</a></li>
                                            <li><a href="21-coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Services</a>
                                        <ul class="list-unstyled">
                                            <li><a href="05-service-one.html">Service Style 1</a></li>
                                            <li><a href="06-service-two.html">Service Style 2</a></li>
                                            <li><a href="07-service-three.html">Service Style 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Projects</a>
                                        <ul class="list-unstyled">
                                            <li><a href="08-project-one.html">Project Style 1</a></li>
                                            <li><a href="09-project-two.html">Project Style 2</a></li>
                                            <li><a href="10-project-three.html">Project Style 3</a></li>
                                            <li><a href="11-project-four.html">Project Style 4</a></li>
                                            <li><a href="12-project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="list-unstyled">
                                            <li><a href="23-blog-one.html">Blog Style 1</a></li>
                                            <li><a href="24-blog-two.html">Blog Style 2</a></li>
                                            <li><a href="25-blog-three.html">Blog Style 3</a></li>
                                            <li><a href="26-blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="22-contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        <!-- Hero Area Area -->
        <section class="hero-area">
            <div class="slider-wrapper owl-carousel">
                <div class="slider-item slider1">
                    <div class="slider-table">
                        <div class="slider-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slider-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <h1>Clean Modern And Responsive</h1>
                                        </div>
                                        <div class="slider-para wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="slider-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="" class="hero-btn">Our Project <i class="la la-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item slider2">
                    <div class="slider-table">
                        <div class="slider-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <div class="slider-heading animated fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <h1>We Focused On Future Business</h1>
                                        </div>
                                        <div class="slider-para animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="slider-btn animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="" class="hero-btn">Our Project <i class="la la-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Area Area -->

        <!-- Feature Area -->
      
        <!-- End Feature Area -->

        <!-- About Us Area -->
        <section class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-0">
                        <div class="about-img">
                            <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/about-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="sec-title">
                            <h3>WELCOME TO APOLLO GROUP</h3>
                        </div>
                        <div class="about-content">
                            <p>Apollo is the most practical training institute in Cambodia.With the team of best expertise in 
                            accounting, audit, corporate finance, Cambodian taxation and other skills, we are able to deliver the best-in-class practical training programs to Cambodian professionals.
                            <span>
                                Apollo also offers best-in-class recruitment and payroll management services.
                                Partnership with Apollo is a long-lasting partnership.
                            </span>
                          To deliver best-in-class services including accounting, tax, corporate finance, business & registration, investment advisory, project management, market researches to Cambodian and regional business communities.</p>
                            <img src="images/signature.png" alt="">
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- End About Us Area -->
        <!-- Project Area -->
       <!-- Pricing Area -->
        <section class="pricing-table">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-box2">
                            <div class="pricing-top text-center">
                                <p><img src="{{ asset('http://apolloinv.net/wp-content/uploads/2019/06/Apollo.png') }}" alt="{{ __('') }}"></p>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled">
                                         <li><strong>INFO@APOLLO-INSTITUE.COM</strong></li>
                                      <hr/>
                                    <li><STRONG>+(855) 81 28 88 58</STRONG></li>
                                      <hr/>
                                    <li><strong>NO. 120z, ST. 438, PHUM 4, SANKGAT TOUl TOMPOUN 2, KHAN CHAMKARMON, PHNOM PENH, CAMBODIA</strong></li>
                                      <hr/>
                                </ul>
                                <a href="#"><h6><strong>APOLLO INVESTMENT & CONSULTING</strong></h6>
</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="pricing-box2">
                            <div class="pricing-top text-center">
                                <p><img src="{{ asset('https://apollo-institute.com/wp-content/uploads/2019/11/APOLLO-white-text-png-1.png') }}" alt="{{ __('') }}"></p>
                            </div>
                           <div class="pricing-content">
                                <ul class="list-unstyled">
                                    
                                      <li><strong>INFO@APOLLO-INSTITUE.COM</strong></li>
                                      <hr/>
                                    <li><STRONG>+(855) 81 28 88 58</STRONG></li>
                                      <hr/>
                                    <li><strong>NO. 120z, ST. 438, PHUM 4, SANKGAT TOUl TOMPOUN 2, KHAN CHAMKARMON, PHNOM PENH, CAMBODIA</strong></li>
                                      <hr/>
                              </ul>
                                <a href="#"><h6><strong>APOLLO INSTITUTE OF ADVANCED SCIENCES & APPLIED BUSINESS</strong></h6>
</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-box2 active">
                            <div class="pricing-top text-center">
                                <p><img height="100px" src="{{ asset('http://apollohr.com/wp-content/uploads/2017/06/logo.jpg') }}" alt="{{ __('') }}"></p>
                            </div>
                         <div class="pricing-content">
                                <ul class="list-unstyled">
                                     <li><strong>INFO@APOLLO-INSTITUE.COM</strong></li>
                                      <hr/>
                                    <li><STRONG>+(855) 81 28 88 58</STRONG></li>
                                      <hr/>
                                    <li><strong>NO. 120z, ST. 438, PHUM 4, SANKGAT TOUl TOMPOUN 2, KHAN CHAMKARMON, PHNOM PENH, CAMBODIA</strong></li>
                                      <hr/>
                                </ul>
                                <a href="#"><h6><strong>APOLLO TRAINING & RECRUITMENT</strong></h6>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area -->
        <section class="home-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3><strong>CHECKOUT OUR LATEST NEWS AND EVENTS POST</strong></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-4.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">CHECKOUT OUR LATEST NEWS AND BLOG POST</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-4.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">CHECKOUT OUR LATEST NEWS AND BLOG POST</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-4.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">CHECKOUT OUR LATEST NEWS AND BLOG POST</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
        @include('front.partials._footer')
        <!-- End Brand Area -->
        <!-- =========================================
        JavaScript Files
        ========================================== -->
        @include('front.partials._script')
    </body>
</html>

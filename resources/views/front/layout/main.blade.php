
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
                                            <h1>WELCOME TO APOLLO GROUP</h1>
                                        </div>
                                        <div class="slider-para wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>To become  one of the largest Cambodian blue chip conglomerates.
</p>
                                        </div>
                                        <div class="slider-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="" class="hero-btn">CONTACT US<i class="la la-arrow-right"></i></a>
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
                                            <p>To consistently deliver best quality products and services of our portfolios to clients in Cambodia and the region</p>
                                        </div>
                                        <div class="slider-btn animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="" class="hero-btn">OUR PROJECT <i class="la la-arrow-right"></i></a>
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
                            <img width='400px'; src="https://apollo-institute.com/wp-content/uploads/2019/11/CEO1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="sec-title">
                            <h3>WELCOME TO APOLLO GROUP</h3>
                        </div>
                        <div class="about-content">
                            <p>Apollo Group in Cambodia was established by Mr. SAN Chankompheak in 2018. The group invested in several SMEs projects  such as school, cow and chicken farm, equity investment and consulting firm, online mart, property management  and so on.

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
         <section class="feature-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>OUR ACTIVITIES</h3>
                        </div>
                    </div>
                    <div class="col-md-6 feature-lft">
                        <div class="feature-box d-flex flex-row-reverse text-right">
                            <div class="ft-img text-center">
                                <span><img src="http://www.thetahmid.com/themes/konsol-v1.0/images/feature-1.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6><strong>APOLLO INVESTMENT & CONSULTING</strong></h6>
                                <p>This company focuses on providing accounting, taxes, audit and consulting services to clients</p>
                            </div>
                        </div>
                        <div class="feature-box d-flex flex-row-reverse text-right">
                            <div class="ft-img text-center">
                                <span><img src="http://www.thetahmid.com/themes/konsol-v1.0/images/feature-2.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6><strong>APOLLO INSTITUE</strong></h6>
                                <p>The company focuses on providing ACCA, CIMA and other international programs to students</p>
                            </div>
                        </div>
                        <div class="feature-box d-flex flex-row-reverse text-right">
                            <div class="ft-img text-center">
                                <span><img src="http://www.thetahmid.com/themes/konsol-v1.0/images/feature-3.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6><strong>APOLLO TRAINING & RECRUITMENT</strong></h6>
                                <p>This company focuses on provide tailored made training related to businesses and engineering fields. It also focuses on recruiting specialists </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 feature-ryt">
                        <div class="feature-box feature-box2 d-flex">
                            <div class="ft-img text-center">
                                <span><img src="http://www.thetahmid.com/themes/konsol-v1.0/images/feature-4.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6><strong>SAN BROTHERS</strong></h6>
                                <p>The company focuses on providing property brokerage, property management and valuation, property development and office complete solutions </p>
                            </div>
                        </div>
                        <div class="feature-box feature-box2 d-flex">
                            <div class="ft-img text-center">
                                <span><img src="http://www.thetahmid.com/themes/konsol-v1.0/images/feature-5.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6><strong>TEA and WINE GALLERY</strong></h6>
                                <p>The company focuses on providing high end teas from various regions, wine and high- end healthy food to clients</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box2 d-flex">
                            <div class="ft-img text-center">
                                <span><img src="http://www.thetahmid.com/themes/konsol-v1.0/images/feature-6.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6>CHENGGONG FARM</h6>
                                <p>The farm focuses on producing high quality beef, chicken and slaughtering activities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area -->
       <!-- Pricing Area -->
        <section class="pricing-table">
            <div class="container">
                <div class="row">
                 <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>OUR PORTFOLIOS</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-box2">
                            <div style="background-color:rgb(0, 166, 63)" class="pricing-top text-center">
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
                            <div style="background-color:#00174d;" class="pricing-top text-center">
                                <p><a target="_blank" href="{{url('https://apollo-institute.com/')}}"><img src="{{ asset('https://apollo-institute.com/wp-content/uploads/2019/11/APOLLO-white-text-png-1.png') }}" alt=""></a></p>
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
                                <a target="_blank" href="{{url('https://apollo-institute.com/')}}"><h6><strong>APOLLO INSTITUTE OF ADVANCED SCIENCES & APPLIED BUSINESS</strong></h6></a>
</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-box2 active">
                            <div style="background-color:#01325D;" class="pricing-top text-center">
                                <p><a target="_blank" href="{{url('https://apollo-institute.com/')}}"><img height="100px" src="{{ asset('http://apollohr.com/wp-content/uploads/2017/06/logo.jpg') }}" alt="{{ __('') }}"></a></p>
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
                               <a target="_blank" href="{{url('https://apollo-institute.com/')}}"><h6><strong>APOLLO TRAINING & RECRUITMENT</strong></h6></a>
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
                @if($blog)
                    @foreach ($blog as  $blogs)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-img">
                                    <img height='60px;' src="{{ Storage::url($blogs->url) }}" alt="" class="img-fluid">
                                    <span>{{$blogs->created_at->format('d')}}<small>{{$blogs->created_at->format('M')}}</small></span>
                                </div>
                                <div class="img-content">
                                    <h6><a href="{{url('/pageBlogDetails',$blogs->id)}}">{{strtoupper($blogs->title)}}</a></h6>
                                    <p>  {{ Str::limit($blogs->description,200) }}</p>
                                    <ul class="list-unstyled d-flex justify-content-between">
                                        <li><a href="#"><i class="la la-user"></i>APOLLO</a></li>
                                        <li><a href="{{url('/pageBlogDetails',$blogs->id)}}"><i class="la la-comment"></i>READ MORE ...</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                                        
                @endif
                </div>
            </div>
        </section>       
         <section class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>CHAIRMEN MESSAGE</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="testimonial-slider owl-carousel">
                            <div class="testimonial-item">
                                <div class="testimonial-box">
                                    <p class="feedback"><strong>Everything is </strong>possible if we set our mind to do it. Success is the final product of our thoughts and actions</p>
                                    <div class="d-flex">
                                        <div>
                                            <img src="images/test-3.png" alt="">
                                        </div>
                                        <div>
                                            <h6>MR. SAN CHANKOMPHEAK</h6>
                                            <p class="title">CHIEF EXEUCTIVE OFFICER</p>
                                        </div>
                                    </div>
                                    <i class="la la-quote-right"></i>
                                </div>
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

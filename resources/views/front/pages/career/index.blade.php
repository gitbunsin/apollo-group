
    @include('front.partials._css')
    </head>
    <body>
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
            <div class="container">
                @include('front.partials._nav')
                <!-- Fullscreen search --> 
                <!-- Sidebar -->
              </div>
        </div>
        <!-- End Menu Area -->

        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><i class="la la-home"></i>HOME</a> <i class="la la-angle-right"></i></li>
                                <li class="list-inline-item">CARRER</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Blog Area -->
       <section class="career-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3><STRONG>BUILD YOUR CAREER WITH US</STRONG> </h3>
                        </div>
                        <div class="career-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="career-box text-center">
                            <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/career-1.png" alt="">
                            <h6><STRONG>BEAUTIFUL ENVIRONMENT</STRONG></h6>
                            <p>Duis aute irure dolor in reprehenderit voluptate cupidatat proident.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="career-box text-center">
                            <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/career-2.png" alt="">
                            <h6><STRONG>FRIENDLY CO-WORKER</STRONG></h6>
                            <p>Duis aute irure dolor in reprehenderit voluptate cupidatat proident.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="career-box text-center">
                            <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/career-3.png" alt="">
                            <h6><STRONG>GREATE LOCATION</STRONG></h6>
                            <p>Duis aute irure dolor in reprehenderit voluptate cupidatat proident.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="career-box text-center">
                            <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/career-4.png" alt="">
                            <h6><STRONG>FOOD AND DRINKS</STRONG></h6>
                            <p>Duis aute irure dolor in reprehenderit voluptate cupidatat proident.</p>
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="career-table">
                            <h4><b>APPLY FOR YOUR DREAM JOBS</b></h4>
                            @foreach ($career as $careers)

                            <div class="table-box d-flex justify-content-between">
                                <div class="job-title">
                                    <h6><a href="">{{strtoupper($careers->title)}}</a></h6>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">{{strtoupper($careers->location)}}<span>/</span></li>
                                        <li class="list-inline-item">{{strtoupper($careers->job_type)}}<span>/</span></li>
                                        <li class="list-inline-item">{{strtoupper($careers->salary)}}</li>
                                    </ul>
                                </div>
                                <div class="job-apply">
                                    <a href="#">APPLY NOW</a>
                                </div>
                            </div>
                                                            
                            @endforeach
                    
                            <br/> <br/> <br/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Banner Area -->
       
        <!-- End Banner Area -->

        <!-- Brand Area -->
       
        <!-- End Brand Area -->

        <!-- Footer Area -->
      @include('front.partials._footer')
        <!-- End Footer Area -->



        <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
     @include('front.partials._script')

    </body>
</html>



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
                <div class="search-wrap">
                    <div class="search-inner">
                        <div class="search-cell">
                            <form method="get">
                                <div class="search-field-holder">
                                    <input type="search" class="form-control main-search-input" placeholder="Type & hit enter...">
                                    <i class="la la-close" id="search-close"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
              <div class="sidebar-body">
                    <div class="side-logo d-flex justify-content-between">
                        <div><a href="#"><img src="images/logo.png" alt=""></a></div>
                        <div><a href="#" class="close-sidebar"><i class="la la-close"></i></a></div>
                    </div>
                    <div class="side-content">
                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit. Mollitia modi, nostru rem sapiente. Excepturi molestiae soluta quisquam officiis iure sunt.</p>
                        <div class="menu-box" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse1">
                                        <span>Home</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse1" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Home 1</a></li>
                                        <li><a href="">Home 2</a></li>
                                        <li><a href="">Home 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse2">
                                        <span>About</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse2" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">About 1</a></li>
                                        <li><a href="">About 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse3">
                                        <span>Service</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse3" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Service 1</a></li>
                                        <li><a href="">Service 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse4">
                                        <span>Pages</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse4" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Page 1</a></li>
                                        <li><a href="">Page 2</a></li>
                                        <li><a href="">Page 3</a></li>
                                        <li><a href="">Page 4</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse5">
                                        <span>Portfolio</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse5" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Portfolio 1</a></li>
                                        <li><a href="">Portfolio 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse6">
                                        <span>Team</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse6" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Team 1</a></li>
                                        <li><a href="">Team 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse7">
                                        <span>Pages</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse7" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Page 1</a></li>
                                        <li><a href="">Page 2</a></li>
                                        <li><a href="">Page 3</a></li>
                                        <li><a href="">Page 4</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse8">
                                        <span>Blog</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse8" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Blog 1</a></li>
                                        <li><a href="">Blog 2</a></li>
                                        <li><a href="">Blog 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="" class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapse9">
                                        <span>Contact</span>
                                        <i class="la la-plus"></i>
                                    </a>
                                </div>
                                <div id="collapse9" class="collapse" data-parent="#accordion">
                                    <ul class="card-body list-unstyled">
                                        <li><a href="">Contact 1</a></li>
                                        <li><a href="">Contact 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side-contact">
                        <ul class="list-unstyled">
                            <li><i class="la la-map-marker"></i>795 South Park Avenue, New York, NY USA 94107</li>
                            <li><i class="la la-phone"></i>+1 (396) 486 4709</li>
                            <li><i class="la la-envelope"></i>enquery@konsol.com</li>
                        </ul>
                    </div>
                    <div class="side-social">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-google"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-overlay"></div>
            </div>
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

        <!-- Breadcrumb Area -->
         <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><i class="la la-home"></i>HOME</a> <i class="la la-angle-right"></i></li>
                                <li class="list-inline-item">CONTACT US</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Contact Area -->
      <section class="feature-area3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>Company Overview</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="feature-box d-flex">
                            <div class="ft-img text-center">
                                <span><img src="images/feature-1.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6><strong>Our Mission</strong></h6>
                                <p>Our vision is to provide professional education in par with western standards and other industrialized countries so that Cambodian students can compete internationally in the world of globalization and turbulent economy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="feature-box d-flex">
                            <div class="ft-img text-center">
                                <span><img src="images/feature-2.png" alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h6><strong>Our Vision</strong></h6>
                                <p>To consistently deliver international programs to Cambodian students so that they can have a great job with local price and real value added by focusing on quality and life employment.</p>
                            </div>
                        </div>
                    </div>
                   
                   
                 
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
                <div class="sidebar-overlay"></div>
            </div>
        </div>
        <!-- End Menu Area -->

        <!-- Mobile Menu -->
       
        <!-- End Mobile Menu -->
      
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


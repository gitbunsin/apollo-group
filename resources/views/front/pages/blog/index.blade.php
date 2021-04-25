
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
                                <li class="list-inline-item">NEWS AND EVENTS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Blog Area -->
        <section class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-1.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">Consectetur adipisicing elit. Illum unde ab nostrum</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-1.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">Consectetur adipisicing elit. Illum unde ab nostrum</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-1.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">Consectetur adipisicing elit. Illum unde ab nostrum</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-1.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">Consectetur adipisicing elit. Illum unde ab nostrum</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-1.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">Consectetur adipisicing elit. Illum unde ab nostrum</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="http://www.thetahmid.com/themes/konsol-v1.0/images/blog-1.jpg" alt="" class="img-fluid">
                                <span>25<small>Mar</small></span>
                            </div>
                            <div class="img-content">
                                <h6><a href="">Consectetur adipisicing elit. Illum unde ab nostrum</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectet adipisi elit. Illum unde ab nostrum, maiores incidunt. Perspiciatis a quisquam modi sed.</p>
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li><a href=""><i class="la la-user"></i>Jhon</a></li>
                                    <li><a href=""><i class="la la-heart-o"></i>333</a></li>
                                    <li><a href=""><i class="la la-comment"></i>99</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pagination-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="">1</a></li>
                                <li class="list-inline-item active"><a href="">2</a></li>
                                <li class="list-inline-item"><a href="">3</a></li>
                                <li class="list-inline-item"><a href="">...</a></li>
                                <li class="list-inline-item"><a href="">7</a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-angle-right"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                          <br/>
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

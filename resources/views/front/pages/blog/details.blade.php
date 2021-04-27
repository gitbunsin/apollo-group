
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
               
        <!-- Mobile Menu -->
      
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
         <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="blog-d-box">
                            <div class="image-box">
                                <img src="images/blog-d.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="image-content">
                                <h4>Sint eius inventore magni quod consectetur adipisicing elit deleniti.</h4>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href=""><i class="la la-user"></i>John Doe</a></li>
                                    <li class="list-inline-item"><i class="la la-calendar"></i>Mar 25, 2019</li>
                                    <li class="list-inline-item"><a href=""><i class="la la-comment"></i>(09)</a></li>
                                    <li class="list-inline-item"><a href=""><i class="la la-heart-o"></i>(36)</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla voluptatum voluptates aliquam laudantium, id tempora rerum vero dolorem temporibus praesentium autem suscipit labore tempore! Non iste esse, nobis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quisquam repellendus ea. Nulla quae quas modi, repellendus placeat dolores officiis aperiam illum natus, sint reiciendis, voluptatibus architecto illo eum dolorum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Dignissimos, nulla voluptatum voluptates aliquam laudantium, id tempora rerum vero dolorem temporibus praesentium autem suscipit labore tempore! Non iste esse, nobis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quisquam repellendus ea.
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, dolor obcaecati! Animi explicabo ratione omnis non, voluptates, minima eos ut nisi accusamus quod sed molestiae. Illo deserunt doloribus nemo recusandae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor dolorem odit est, voluptas ducimus assumenda adipisicing elit. Distinctio quisquam repellendus ea.</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam molestiae earum pariatur possimus itaque magni dolore corrupti rem perspiciatis id optio sunt fugiat suscipit, sapiente! Iure dolorem voluptas fugit, autem. Quisquam molestiae earum pariatur possimus itaque magni dolore corrupti rem perspiciatis id optio.
                                </p>
                            </div>
                            <div class="blog-btns d-flex justify-content-between">
                                <div class="share-btn">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Share :</li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-bfaf">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href=""><i class="fa fa-long-arrow-left"></i>Prev</a></li>
                                        <li class="list-inline-item"><a href="">Next<i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-comment">
                                <h4>Comments (13)</h4>
                                <div class="comment-box d-flex">
                                    <div class="comment-img">
                                        <a href=""><img src="images/testimonial-1.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">John Doe</a></li>
                                            <li class="list-inline-item"><a href="">Reply</a></li>
                                        </ul>
                                        <span>2 days ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est, enim deserunt aspernatur.</p>
                                    </div>
                                </div>
                                <div class="comment-box comment-box2 d-flex">
                                    <div class="comment-img">
                                        <a href=""><img src="images/testimonial-2.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">Mary Chang</a></li>
                                            <li class="list-inline-item"><a href="">Reply</a></li>
                                        </ul>
                                        <span>2 days ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est, enim deserunt aspernatur.</p>
                                    </div>
                                </div>
                                <div class="comment-box d-flex">
                                    <div class="comment-img">
                                        <a href=""><img src="images/testimonial-1.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">John Doe</a></li>
                                            <li class="list-inline-item"><a href="">Reply</a></li>
                                        </ul>
                                        <span>2 days ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est, enim deserunt aspernatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h5>Leave Your Comment</h5>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea placeholder="Comment" required=""></textarea>
                                            <button type="submit">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="blog-sidebar">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog-search">
                                        <form action="#">
                                            <input type="text" name="search" placeholder="Search here">
                                            <button type="button" name="button"><i class="la la-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="blog-rcpost">
                                        <h6>Recent Posts</h6>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="la la-minus"></i> Consectetur adipisicing elit aute ...</a> <span>12 Apr, 2019</span></li>
                                            <li><a href=""><i class="la la-minus"></i> Incididunt ut labore et dolore ...</a> <span>12 Apr, 2019</span></li>
                                            <li><a href=""><i class="la la-minus"></i> Laboris nisi ut aliquip ex ea com ...</a> <span>12 Apr, 2019</span></li>
                                            <li><a href=""><i class="la la-minus"></i> Quis nostrud exercitation ullamco ...</a> <span>12 Apr, 2019</span></li>
                                            <li><a href=""><i class="la la-minus"></i> Sunt in culpa qui officia deserunt ...</a> <span>12 Apr, 2019</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="blog-cat">
                                        <h6>Blog Categories</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="">Design <span>36</span></a></li>
                                            <li><a href="">Photography <span>43</span></a></li>
                                            <li><a href="">Branding <span>23</span></a></li>
                                            <li><a href="">Corporate <span>34</span></a></li>
                                            <li><a href="">Graphic <span>27</span></a></li>
                                            <li><a href="">Journal <span>19</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="blog-com">
                                        <h6>Recent Comments</h6>
                                        <ul class="list-unstyled">
                                            <li class="d-flex">
                                                <div>
                                                    <a href=""><img src="images/test-1.png" alt=""></a>
                                                </div>
                                                <div>
                                                    <p><a href="">Consectetur adipisicing elit aute</a></p>
                                                    <span>10 sec ago</span>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div>
                                                    <a href=""><img src="images/test-2.png" alt=""></a>
                                                </div>
                                                <div>
                                                    <p><a href="">Incididunt ut labore et dolore</a></p>
                                                    <span>1 mins ago</span>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div>
                                                    <a href=""><img src="images/test-3.png" alt=""></a>
                                                </div>
                                                <div>
                                                    <p><a href="">Laboris nisi ut aliquip ex ea com</a></p>
                                                    <span>13 mins ago</span>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div>
                                                    <a href=""><img src="images/test-4.png" alt=""></a>
                                                </div>
                                                <div>
                                                    <p><a href="">Sunt in culpa qui officia foe deserunt</a></p>
                                                    <span>1 hrs ago</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="blog-tag">
                                        <h6>Tag Search</h6>
                                        <a href="">HTML</a>
                                        <a href="">CSS</a>
                                        <a href="">Photoshop</a>
                                        <a href="">Jquery</a>
                                        <a href="">PHP</a>
                                        <a href="">Wordpress</a>
                                        <a href="">Bootstrap</a>
                                        <a href="">Javascript</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

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

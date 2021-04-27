
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
             
            </div>
        </div>
        <!-- End Menu Area -->

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
        <section class="blog-area">
            <div class="container">
                <div class="row">
                    @foreach ($blog as  $blogs)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-img">
                                    <img src="{{ Storage::url($blogs->url) }}" alt="" class="img-fluid">
                                    <span>{{$blogs->created_at->format('d')}}<small>{{$blogs->created_at->format('M')}}</small></span>
                                </div>
                                <div class="img-content">
                                    <h6><a href="{{url('/pageBlogDetails',$blogs->id)}}">{{strtoupper($blogs->title)}}</a></h6>
                                    <p>  {{ Str::limit($blogs->description,200) }}</p>
                                    <ul class="list-unstyled d-flex justify-content-between">
                                        <li><a href=""><i class="la la-user"></i>BUNSIN</a></li>
                                        <li><a href=""><i class="la la-comment"></i>READ MORE ...</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12">
                        <div class="pagination-box text-center">
                            <ul class="list-unstyled list-inline">
                               <a href=""> {{ $blog->links() }}</a> 
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

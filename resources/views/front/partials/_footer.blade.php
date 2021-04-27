 <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="f-about">
                            <img src="https://apollo-institute.com/wp-content/uploads/2019/11/APOLLO-white-text-png-1.png" alt="" class="img-fluid">
                            <p>Apollo Institute of Advanced Sciences and Applied Business is an accredited institute from Ministry of Labor and Vocational Training.</p>
                            {{-- <ul class="list-unstyled">
                                <li><i class="la la-map-marker"></i>#523, Phsar Steung Meanchey Thmey, Toplek C8-04, 2nd Floor, St. Samdech Monireath, Sangkat Steung Meanchey, Khan Meanchey, Phnom Penh, Cambodia.</li>
                                <li><i class="la la-envelope"></i>enquery@domain.com</li>
                                <li><i class="la la-phone"></i>+1 908 875 7678</li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-link">
                            <h5>NAVIGATIONS</h5>
                            <ul class="list-unstyled">
                                <li><a href=""><i class="la la-angle-right"></i>HOME</a></li>
                                <li><a href=""><i class="la la-angle-right"></i>ABOUT US</a></li>
                                <li><a href=""><i class="la la-angle-right"></i>WHAT WE DO</a></li>
                                <li><a href=""><i class="la la-angle-right"></i>NEWS AND EVENTS</a></li>
                                <li><a href=""><i class="la la-angle-right"></i>CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="f-link">
                            <h5>NEWS ADND EVENTS</h5>
                            @php
                                use App\Models\Blog;
                                $blog = Blog::orderBy('id', 'desc')->take(5)->get();
                            @endphp
                          @foreach ($blog as $blogs)
                            <ul class="list-unstyled">
                                <li><a href="{{url('/pageBlogDetails',$blogs->id)}}"><i class="la la-angle-right"></i>{{ Str::limit(strtoupper($blogs->title),50) }}</a></li>
                            </ul>                                
                          @endforeach
                        </div>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="f-post">
                            <h5>NEWS AND EVENTS</h5>
                            <div class="post-box d-flex">
                                <div class="po-content">
                                    <a href="#">Lorem ipsum dolor sit ...</a>
                                    <span>Mar 30, 2019</span>
                                </div>
                            </div>
                            <div class="post-box d-flex">
                               
                                <div class="po-content">
                                    <a href="#">Lorem ipsum dolor sit ...</a>
                                    <span>Mar 30, 2019</span>
                                </div>
                            </div>
                            <div class="post-box d-flex">
                               
                                <div class="po-content">
                                    <a href="#">Lorem ipsum dolor sit ...</a>
                                    <span>Mar 30, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-2">
                        <div class="f-news">
                            <h5>NEWSLETTER</h5>
                            <form class="f-form" action="#">
                                <input type="text" name="email" placeholder="Enter email here">
                                <button type="submit" name="button">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer-btm">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class=" copy-text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" copy-text">
                            <h6>COPYRIGHT &copy; 2021 | DESIGN BY <a href="" target="_blank">APOLLOGROUP</a></h6>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="ft-menu">
                            <ul class="list-unstyled list-inline text-center">
                                <li class="list-inline-item"><a href="">HOME</a></li>
                                <li class="list-inline-item"><a href="">ABOUT US</a></li>
                                <li class="list-inline-item"><a href="">WHAT WE DO</a></li>
                                <li class="list-inline-item"><a href="">NEW AND EVENTS</a></li>
                                <li class="list-inline-item"><a href="">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-md-3">
                        <div class="ft-social">
                            <ul class="list-unstyled list-inline text-right">
                                <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-google"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back To Top -->
            <div class="back-to-top">
                <a href="#" class="backtotop"><i class="la la-arrow-up"></i></a>
            </div>
        </footer>
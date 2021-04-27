 <div class="page-sidebar navbar-collapse collapse">
                    
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            
                            <li class="nav-item start active">
                                <a href="javascript:;" class="nav-link">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                            </li> 
                            <li class="heading">
                                <h3 class="uppercase">Pages</h3>
                            </li>
                         
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-docs"></i>
                                    <span class="title">Apps</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="app_todo.html" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Google Map</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="app_todo_2.html" class="nav-link ">
                                            <i class="icon-check"></i>
                                            <span class="title">Todo 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="app_inbox.html" class="nav-link ">
                                            <i class="icon-envelope"></i>
                                            <span class="title">Inbox</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="app_calendar.html" class="nav-link ">
                                            <i class="icon-calendar"></i>
                                            <span class="title">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="app_ticket.html" class="nav-link ">
                                            <i class="icon-notebook"></i>
                                            <span class="title">Support</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">User</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('user.index')}}" class="nav-link ">
                                            <i class="icon-user"></i>
                                            <span class="title">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-social-dribbble"></i>
                                    <span class="title">General</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('career.index')}}" class="nav-link ">
                                            <i class="icon-login"></i>
                                            <span class="title">Career</span>
                                        </a>
                                    </li>
                                     <li class="nav-item  ">
                                        <a href="page_general_about.html" class="nav-link ">
                                            <i class="icon-info"></i>
                                            <span class="title">FaQ</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_general_contact.html" class="nav-link ">
                                            <i class="icon-call-end"></i>
                                            <span class="title">Contact</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('blog.index')}}" class="nav-link ">
                                            <i class="icon-pencil"></i>
                                            <span class="title">Blog</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            {{-- <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">System</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="page_cookie_consent_1.html" class="nav-link ">
                                            <span class="title">Cookie Consent 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_cookie_consent_2.html" class="nav-link ">
                                            <span class="title">Cookie Consent 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                            <span class="title">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_404_1.html" class="nav-link ">
                                            <span class="title">404 Page 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                            <span class="title">404 Page 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                            <span class="title">404 Page 3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_500_1.html" class="nav-link ">
                                            <span class="title">500 Page 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                            <span class="title">500 Page 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
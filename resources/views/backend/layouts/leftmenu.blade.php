   <!-- ========== Left Sidebar Start ========== -->
   <div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    <img src="{{ asset('backend/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="{{ asset('backend/images/users/avatar-7.jpg') }}" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0">ADMIN</h6>
                        <span class="pro-user-desc">Administrator</span>
                    </div>
                    <div class="dropdown align-self-center profile-dropdown-menu">
                        <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span data-feather="chevron-down"></span>
                        </a>
                        <div class="dropdown-menu profile-dropdown">
                            <a href="pages-profile.html" class="dropdown-item notify-item">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                <span>My Account</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                <span>Settings</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                                <span>Support</span>
                            </a>

                            <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ url('admin/adminlogout') }}" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="#">
                                    <i data-feather="home"></i>
                                    <span class="badge badge-success float-right">1</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li class="menu-title">Pages</li>
                            <li>
                                <a href="#">
                                    <i data-feather="calendar"></i>
                                    <span> Calendar </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="users"></i>
                                    <span> Categories </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ url('admin/categories') }}"> All categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/add_category') }}"> Add new</a>
                                    </li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="users"></i>
                                    <span> Products </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ url('admin/products') }}"> All products</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/add_product') }}"> Add new</a>
                                    </li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="users"></i>
                                    <span> Users </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#"> Adminstrators</a>
                                    </li>
                                    <li>
                                        <a href="#"> Guests</a>
                                    </li>
                                    <li>
                                        <a href="#"> Speakers</a>
                                    </li>
                                </ul>
                            </li>
                         
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
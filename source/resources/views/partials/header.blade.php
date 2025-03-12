<div class="header-bg">
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo-->
                <div>
                    <a href="{{ route('dashboard') }}" class="logo">
                        <span class="logo-light">
                                <i class="mdi mdi-camera-control"></i> {{ WEB_NAME }}
                        </span>
                    </a>
                </div>
                <!-- End Logo-->

                <div class="menu-extras topbar-custom navbar p-0">
                    <ul class="list-inline d-none d-lg-block mb-0">
                        <li class="hide-phone app-search float-left">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>

                    <ul class="navbar-right ml-auto list-inline float-right mb-0">
                        <!-- language-->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                            </div>
                        </li>

                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                            </a>
                        </li>

                        <!-- notification -->
                        <li class="dropdown notification-list list-inline-item">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                        Notifications
                                    </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>

                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                            </div>
                        </li>

                        <li class="dropdown notification-list list-inline-item">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="mdi mdi-account-circle"></i> {{ __('title.profile') }}</a>
                                    <a class="dropdown-item d-block" href="#"><i class="mdi mdi-settings"></i>{{ __('title.settings') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="mdi mdi-power text-danger"></i>{{ __('title.logout') }}</a>

                                </div>
                            </div>
                        </li>

                        <li class="menu-item dropdown notification-list list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                    </ul>

                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">

                <div id="navigation">

                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="{{ route('dashboard') }}"><i class="icon-home"></i> Dashboard</a>
                        </li>

                        {{-- Admin --}}
                        <li class="has-submenu">
                            <a href="#"><i class="icon-profile-add"></i> {{ __('messages.account_manage') }} <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Admin</a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html">{{ __('messages.list') }}</a></li>
                                        <li><a href="email-read.html">{{ __('messages.create') }}</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">{{ __('messages.candidates') }}</a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html">{{ __('messages.list') }}</a></li>
                                        <li><a href="email-read.html">{{ __('messages.create') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {{-- Quản lí đề test --}}
                        <li class="has-submenu">
                            <a href="#"><i class="icon-todolist"></i>{{ __('messages.exam_manage') }} Quản lý đề <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">{{ __('messages.question_categories') }}</a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html">{{ __('messages.list') }}</a></li>
                                        <li><a href="email-read.html">{{ __('messages.create') }}</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Câu hỏi</a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html">{{ __('messages.list') }}</a></li>
                                        <li><a href="email-read.html">{{ __('messages.create') }}</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Bài kiểm tra</a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html">{{ __('messages.list') }}</a></li>
                                        <li><a href="email-read.html">{{ __('messages.create') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {{-- Quản lí bài test --}}
                        <li class="has-submenu">
                            <a href="#"><i class="icon-spread"></i> {{ __('messages.submission_manage') }}<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">{{ __('messages.submissions') }}</a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html">{{ __('messages.list') }}</a></li>
                                        <li><a href="email-read.html">{{ __('messages.create') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {{-- setting --}}
                        <li class="">
                            <a href="#"><i class="icon-sinth"></i> Cài đặt hệ thống</a>
                        </li>

                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->

</div>

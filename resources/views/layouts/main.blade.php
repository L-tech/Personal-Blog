<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>IBD - Admin Section</title>
    <link rel="canonical" href="{{ url('/') }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Dr Ibrahim Bello Dauda"/>
    <meta property="og:description" content="Dr Ibrahim Bello Dauda - Get access to great insights on philosophy, leadership and development."/>
    <meta property="og:url" content="{{ url('/') }}"/>
    <meta property="og:site_name" content="Dr Ibrahim Bello Dauda"/>
    <meta property="article:publisher" content="https://web.facebook.com/dribrahimbdauda"/>
    <meta property="article:author" content="https://web.facebook.com/dribrahimbdauda"/>
    <meta property="og:image" content="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1626697298/a-2_ku7dam.png"/>
    <meta property="og:image:width" content="1000"/>
    <meta property="og:image:height" content="1000"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:creator" content="@el_dauda"/>
    <meta name="twitter:site" content="@el_dauda"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('base') }}/images/a.png"/>
    <link href="{{ asset('main') }}/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('main') }}/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('main') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('main') }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('main') }}/assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('main') }}/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('main') }}/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" class="dashboard-analytics" />
    @yield('css')
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="dashboard-analytics admin-header">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <div class="theme-logo">
                <a href="{{ url('dashboard') }}">
                    <img src="{{ asset('base') }}/images/a.png" alt="Ibrahim Bello Dauda" class="navbar-logo">
                    <span class="admin-logo">IBD<span></span></span>
                </a>
            </div>

            <div class="sidebarCollapseFixed">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </div>

            <nav id="compactSidebar">
                <ul class="menu-categories">
                    <li class="menu {{ (request()->is('dashbord')) ? 'active' : '' }}">
                        <a href="{{ url('dashboard') }}" data-active="{{ (request()->is('dashboard')) ? 'true' : 'false' }}" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/blog')) ? 'active' : '' }}">
                        <a href="{{ url('admin/blog') }}" data-active="{{ (request()->is('admin/blog*')) ? 'true' : 'false' }}" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                </div>
                                <span>Blog</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/category')) ? 'active' : '' }}">
                        <a href="{{ url('admin/category') }}" data-active="{{ (request()->is('admin/category')) ? 'true' : 'false' }}" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                </div>
                                <span>Categories</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/comment')) ? 'active' : '' }}">
                        <a href="{{ url('admin/comment') }}" data-active="{{ (request()->is('admin/comment')) ? 'true' : 'false' }}" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                </div>
                                <span>Comments</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                </div>
                                <span>Quotes</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/profile')) ? 'active' : '' }}">
                        <a href="#" data-active="{{ (request()->is('')) ? 'true' : 'false' }}" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                </div>
                                <span>Profile</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="{{ url('admin/logout') }}" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                </div>
                                <span>Sign Out</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">



            </div>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="content-container">

                    <div class="col-left layout-top-spacing">
                        <div class="col-left-content">

                            <div class="header-container">
                                <header class="header navbar navbar-expand-sm">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="page-header">
                                            <div class="page-title">
                                                <h3>@yield('title')</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-actions">
                                        <div class="nav-item dropdown language-dropdown more-dropdown">
                                            <div class="dropdown custom-dropdown-icon">



                                            </div>
                                        </div>

                                        <div class="toggle-notification-bar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                        </div>
                                    </div>
                                </header>
                            </div>

                            <div class="admin-data-content layout-top-spacing">

                                {{ $slot }}
                            </div>
                            <div class="footer-wrapper col-xl-12">
                                <div class="footer-section f-section-1">
                                    <p class="">© 2021 <a target="_blank" href="{{ url('/') }}">IBD</a></p>
                                </div>
                                <div class="footer-section f-section-2">
                                    <p class="">Designed by <a href="https://aromedev.co" target="_blank">Arome</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="col-right-content">
                            <div class="navbar-item flex-row search-ul navbar-dropdown">
                                <div class="nav-item align-self-center search-animated">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <form class="form-inline search-full form-inline search" role="search">
                                        <div class="search-bar">
                                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-right-content-container">

                                <div class="activity-section">

                                    <div class="widget-profile">

                                        <div class="w-profile-view">
                                            <img src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1625660853/design-40cde4b3-e628-4e5b-ba9e-f72d7d5fc018-min_jqiofv.png" alt="admin-profile" class="img-fluid">
                                            <div class="w-profile-content">
                                                <h6>Ibrahim Bello Dauda</h6>
                                                <p>Author</p>
                                            </div>
                                        </div>

                                        <div class="w-profile-links">
                                            <a href="#" class="w-p-link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <p>My Profile</p>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="widget-message">
                                        <div class="widget-title">
                                            <h5>Comments</h5>
                                            <a href="{{ url('admin/comment') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            </a>
                                        </div>

                                        <div class="widget-messages">
                                            @if(count($recent_comments))
                                            @foreach ($recent_comments as $item)
                                                <a href="#" class="w-message">
                                                    <img src="{{ asset('main') }}/assets/img/90x90.jpg" alt="" class="img-fluid">
                                                    <div class="msg-content">
                                                        <h5 class="w-msg-username">{{ $item->name }}</h5>
                                                        <p class="w-msg-text">{{ $item->comment }}</p>
                                                    </div>
                                                </a>
                                            @endforeach
                                            @else

                    <p style="color: #eee">No Comment Added Yet</p>
            @endif

                                        </div>
                                    </div>

                                    <div class="widget-calendar">
                                        <div class="widget-title">
                                            <h5>Recent Blog</h5>

                                            <div class="task-action">
                                                <div class="dropdown">
                                                    @if(count($recent_blogs))
                                                        @foreach ($recent_blogs as $item)
                                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                        </a>
                                                        @endforeach
                                            @else

                                                <p style="color: #eee">No Blog Added Yet</p>
                                            @endif

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                                        <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="widget-calendar-lists">
                                            <div class="widget-calendar-lists-scroll">

                                                @if(count($recent_blogs))
                                                @foreach ($recent_blogs as $item)
                                                <a href="#" class="w-calendar w-calendar-c4">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </div>
                                                    <p class="w-calendar-text"><span class="calendar-number">{{ $item->title }}</span> - {{ $item->category->name }} at {{ $item->created_at->format('D M, y') }}</p>
                                                </a>
                                                @endforeach
                                            @else

                                                <p style="color: #eee">No Blog Added Yet</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('main') }}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('main') }}/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('main') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('main') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('main') }}/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('main') }}/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('main') }}/plugins/apex/apexcharts.min.js"></script>
    <script src="{{ asset('main') }}/assets/js/dashboard/dash_1.js"></script>
    @yield('js')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>

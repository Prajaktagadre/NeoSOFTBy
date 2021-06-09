<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="_token" content="{{csrf_token()}}" />
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('web/admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('web/admin/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    @yield('css')

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/vendors.min.css')}}">
 
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/pages/chat-application.css')}}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/plugins/extensions/toastr.css')}}">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('web/admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->
       <!-- BEGIN: Page Vendor JS-->
       <script src="{{asset('web/admin/app-assets/vendors/js/extensions/toastr.min.js')}}" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                  
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i><span class="badge badge-pill badge-sm badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <div class="arrow_box_right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6>
                                    </li>
                                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-share info font-medium-4 mt-2"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading info">New Order Received</h6>
                                                    <p class="notification-text font-small-3 text-muted text-bold-600">Lorem ipsum dolor sit amet!</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:30 PM</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-save font-medium-4 mt-2 warning"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading warning">New User Registered</h6>
                                                    <p class="notification-text font-small-3 text-muted text-bold-600">Aliquam tincidunt mauris eu risus.</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10:05 AM</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-repeat font-medium-4 mt-2 danger"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading danger">New Purchase</h6>
                                                    <p class="notification-text font-small-3 text-muted text-bold-600">Lorem ipsum dolor sit ametest?</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Yesterday</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-shopping-cart font-medium-4 mt-2 primary"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading primary">New Item In Your Cart</h6><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-heart font-medium-4 mt-2 info"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading info">New Sale</h6><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item info text-right pr-1" href="javascript:void(0)">Read all</a></li>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <div class="arrow_box_right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6>
                                    </li>
                                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{asset('web/admin/app-assets/images/portrait/small/avatar-s-6.png')}}" alt="avatar"></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading text-bold-700">Sarah Montery<i class="ft-circle font-small-2 success float-right"></i></h6>
                                                    <p class="notification-text font-small-3 text-muted text-bold-600">Everything looks good. I will provide...</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:55 PM</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm rounded-circle"><span class="media-object rounded-circle text-circle bg-warning">E</span></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading text-bold-700">Eliza Elliot<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                    <p class="notification-text font-small-3 text-muted text-bold-600">Okay. here is some more details...</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">2:10 AM</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{asset('web/admin/app-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar"></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading text-bold-700">Kelly Reyes<i class="ft-circle font-small-2 warning float-right"></i></h6>
                                                    <p class="notification-text font-small-3 text-muted text-bold-600">Check once and let me know if you...</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Yesterday</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{asset('web/admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading text-bold-700">Tonny Deep<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                    <p class="notification-text font-small-3 text-muted text-bold-600">We will start new project development...</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-right info pr-1" href="javascript:void(0)">Read all</a></li>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="{{asset('web/admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{asset('web/admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                                   
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

    @if ($message = Session::get('error'))
      <script>
          toastr.error('', '{{$message}}');  
      </script>	
    @endif 
    @if ($message = Session::get('success'))
        <script>
            toastr.success('', '{{$message}}');  
        </script>	
    @endif 


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{asset('web/admin/app-assets/images/backgrounds/02.jpg')}}">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
          
                        <h3 class="brand-text">Assignment</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @if(Auth::user()->role_id == '1')
            <li class=" nav-item"><a href="{{route('dashboard')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('hodLeaveMagement')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Leaves</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('staffMangement')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Staff Management</span></a>
            </li>
            @endif
            @if(Auth::user()->role_id == '2')
          
            <li class=" nav-item"><a href="{{route('staffLeaveMagement')}} "><i class="ft-home"></i><span class="menu-title" data-i18n="">Leave Mangement</span></a>
            </li>   
            <li class=" nav-item"><a href="{{route('staffdashboard')}} "><i class="ft-home"></i><span class="menu-title" data-i18n="">Staff Dashboard</span></a>
            </li>    
            @endif

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                    <div class="content-header-left col-md-4 col-12 mb-2">
                        <h3 class="content-header-title">Assignment</h3>
                    </div>
                    <div class="content-header-right col-md-8 col-12">
                        <div class="breadcrumbs-top float-md-right">
                            <div class="breadcrumb-wrapper mr-1">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                     @if (trim($__env->yieldContent('parentPageTitle')))
                                <li class="breadcrumb-item">@yield('parentPageTitle')</li>
                            @endif
                            @if (trim($__env->yieldContent('title')))
                                <li class="breadcrumb-item active">@yield('title')</li>
                            @endif
                                </ol>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="content-body">
                     @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">{{now()->year}} &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">DigiTop</a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
            </ul>
        </div>
    </footer>
    <!-- END: Footer-->

 
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('web/admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

   

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('web/admin/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('web/admin/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <!-- END: Theme JS-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/assets/css/style.css')}}">

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
       <!-- Extra Js from other pages -->
       @yield('js')
    <!-- End Extra Js from other pages -->

</body>
<!-- END: Body-->

</html>
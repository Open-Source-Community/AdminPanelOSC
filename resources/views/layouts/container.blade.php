<!DOCTYPE html>
<!--[if IE 8]>
<html lang="ar" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="ar" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ar">

<head>
    <meta charset="utf-8"/>
    <title>OSC</title>
    <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/global/css/components-rtl.min.css')}}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{asset('assets/layouts/layout/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/layouts/layout/css/themes/darkblue-rtl.min.css')}}" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{asset('assets/layouts/layout/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/login-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/bootstrap-colorpicker-plus.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/img/logo.png')}}" rel="shortcut icon">

</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">

                <a href="{{url('/')}}">
                    <img src="{{asset('assets/img/logo.png')}}" height="50px" alt="logo" class="logo-default"/>
                </a>
                <div style="float: right;padding-top: 15px;   padding-right: 15px;">
                    <span style="color: #fff">OSC</span>
                </div>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle"
                                 src="{{asset('assets/img/logo.png')}}"/>
                            <span class="username username-hide-on-mobile">  {{ Auth::user()->name }}  </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- END LOGO -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN Left SIDE BAR -->
        <div class="left-side page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">

                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                    data-slide-speed="200" style="padding-top: 20px">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->

                    <li class="nav-item">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Committees</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item">
                                <a href="{{url('committees')}}" class="nav-link ">
                                    <span class="title">Committees</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Events</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item">
                                <a href="{{url('events')}}" class="nav-link ">
                                    <span class="title">Events</span>
                                </a>
                            </li>
                            <li class="add nav-item">
                                <a href="{{url('events/create')}}" class="nav-link ">
                                    <span class="title">Add</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Users</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item">
                                <a href="{{url('users')}}" class="nav-link ">
                                    <span class="title">Users</span>
                                </a>
                            </li>
                            <li class="add nav-item">
                                <a href="{{url('users/create')}}" class="nav-link ">
                                    <span class="title">Add</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Workshop'19</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item">
                                <a href="{{url('Workshop')}}" class="nav-link ">
                                    <span class="title">All Days</span>
                                </a>
                            </li>
                            <li class="list nav-item">
                                <a href="{{url('Workshop/Monday')}}" class="nav-link ">
                                    <span class="title">Monday</span>
                                </a>
                            </li>
                            <li class="list nav-item">
                                <a href="{{url('Workshop/Tuesday')}}" class="nav-link ">
                                    <span class="title">Tuesday</span>
                                </a>
                            </li>
                            <li class="list nav-item">
                                <a href="{{url('Workshop/Wednesday')}}" class="nav-link ">
                                    <span class="title">Wednesday</span>
                                </a>
                            </li>
                            <li class="list nav-item">
                                <a href="{{url('Workshop/Thursday')}}" class="nav-link ">
                                    <span class="title">Thursday</span>
                                </a>
                            </li>
                            <li class="list nav-item">
                                <a href="{{url('Workshop/Saturday')}}" class="nav-link ">
                                    <span class="title">Saturday</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                            <a href="javascript:" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Form</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="list nav-item" style="margin-right: 25px">
                                    <a href="{{url('form/settings')}}" class="nav-link">
                                        <span class="title">Settings</span>
                                    </a>
                                </li>
                                <li class="list nav-item" style="margin-right: 25px">
                                    <a href="{{url('form/slots')}}" class="nav-link">
                                        <span class="title">Slots</span>
                                    </a>
                                </li>
                            </ul>
                    </li>
                </ul>

            </div>
            <!-- END SIDEBAR -->
        </div>

        @yield('content')
    </div>

    <!-- END  Left SIDE BAR  -->
    <div class="page-footer">
        <div class="page-footer-inner text-center" style="width: 100%">
            Don't reinvent the wheel @ OSC
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->

    <!-- END FOOTER -->
</div>
</body>

<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap-colorpicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap-colorpicker-plus.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/style.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    function hideMe(sel) {
        sel.remove();
        // sel.style.display = "none";
    }
</script>
<script>
    function ConfirmDelete() {

        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>
</html>
@section('header')

<!-- start: BODY -->
<body>
<!-- start: SLIDING BAR (SB) -->
<div id="slidingbar-area">
    <div id="slidingbar">
        <div class="row">
            <!-- start: SLIDING BAR FIRST COLUMN -->
            <div class="col-md-4 col-sm-4">
                <h2>My Options</h2>
                <div class="row">
                    <div class="col-xs-6 col-lg-3">
                        <button class="btn btn-icon btn-block space10">
                            <i class="fa fa-folder-open-o"></i>
                            Projects <span class="badge badge-info partition-red"> 4 </span>
                        </button>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <button class="btn btn-icon btn-block space10">
                            <i class="fa fa-envelope-o"></i>
                            Messages <span class="badge badge-info partition-red"> 23 </span>
                        </button>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <button class="btn btn-icon btn-block space10">
                            <i class="fa fa-calendar-o"></i>
                            Calendar <span class="badge badge-info partition-blue"> 5 </span>
                        </button>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <button class="btn btn-icon btn-block space10">
                            <i class="fa fa-bell-o"></i>
                            Notifications <span class="badge badge-info partition-red"> 9 </span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- end: SLIDING BAR FIRST COLUMN -->
            <!-- start: SLIDING BAR SECOND COLUMN -->
            <div class="col-md-4 col-sm-4">
                <h2>My Recent Works</h2>
                <div class="blog-photo-stream margin-bottom-30">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image01_th.jpg') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image02_th.jpg') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image03_th.jpg') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image04_th.jpg') }}</a>

                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image05_th.jpg') }}</a>

                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image06_th.jpg') }}</a>

                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image07_th.jpg') }}</a>

                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image08_th.jpg') }}</a>

                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image09_th.jpg') }}</a>

                        </li>
                        <li>
                            <a href="#">{{ HTML::image('../assets/images/image10_th.jpg') }}</a>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- end: SLIDING BAR SECOND COLUMN -->
            <!-- start: SLIDING BAR THIRD COLUMN -->
            <div class="col-md-4 col-sm-4">
                <h2>My Info</h2>
                <address class="margin-bottom-40">
                    {{ Auth::user()->username }}
                    <br>
                    12345 Street Name, City Name, United States
                    <br>
                    P: (641)-734-4763
                    <br>
                    Email:
                    <a href="#">
                        {{ Auth::user()->email }}
                    </a>
                </address>
                <a class="btn btn-transparent-white" href="#">
                    <i class="fa fa-pencil"></i> Edit
                </a>
            </div>
            <!-- end: SLIDING BAR THIRD COLUMN -->
        </div>
        <div class="row">
            <!-- start: SLIDING BAR TOGGLE BUTTON -->
            <div class="col-md-12 text-center">
                <a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- end: SLIDING BAR TOGGLE BUTTON -->
        </div>
    </div>
</div>
<!-- end: SLIDING BAR -->
<div class="main-wrapper">
    <!-- start: TOPBAR -->
    <header class="topbar navbar navbar-inverse navbar-fixed-top inner">
        <!-- start: TOPBAR CONTAINER -->
        <div class="container">
            <div class="navbar-header">
                <a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- start: LOGO -->
                <a class="navbar-brand" href="index.html">
                   MASAYA
                </a>
                <!-- end: LOGO -->
            </div>
            <div class="topbar-tools">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            {{ HTML::image('../assets/images/avatar-1-small.jpg', 'a picture', array('class' => 'img-circle')) }}<!-- class="img-circle" alt="">--> <span class="username hidden-xs">{{ Auth::user()->username }}</span> <i class="fa fa-caret-down "></i>
                        </a>
                        <ul class="dropdown-menu dropdown-dark">
                            <li>
                                <a href="{{url('admin/edit/'.Auth::user()->id)}}">
                                    My Profile
                                </a>
                            </li>


                            <!--
                                                    <li>
                                                        <a href="login_lock_screen.html">
                                                            Lock Screen
                                                        </a>
                                                    </li>
                                                    -->
                            <li>
                                <a href="logout">
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER DROPDOWN -->
                    <!--
                                        <li class="right-menu-toggle">
                                            <a href="#" class="sb-toggle-right">
                                                <i class="fa fa-globe toggle-icon"></i> <i class="fa fa-caret-right"></i> <span class="notifications-count badge badge-default hide"> 3</span>
                                            </a>
                                        </li>
                                        -->
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- end: TOPBAR CONTAINER -->
    </header>
    <!-- end: TOPBAR -->
    @stop
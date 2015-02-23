<!-- start: PAGESLIDE LEFT -->
<a class="closedbar inner hidden-sm hidden-xs" href="#">
</a>
<nav id="pageslide-left" class="pageslide inner">
<div class="navbar-content">
<!-- start: SIDEBAR -->
<div class="main-navigation left-wrapper transition-left">
<div class="navigation-toggler hidden-sm hidden-xs">
    <a href="#main-navbar" class="sb-toggle-left">
    </a>
</div>
<div class="user-profile border-top padding-horizontal-10 block">
    <div class="inline-block">
        {{ HTML::image('../assets/images/avatar-1.jpg', '') }}
    </div>
    <div class="inline-block">
        <h5 class="no-margin"> Welcome </h5>
        <h4 class="no-margin">{{ Auth::user()->username }}</h4>
        <a class="btn user-options sb_toggle">
            <i class="fa fa-cog"></i>
        </a>
    </div>
</div>
<!-- start: MAIN NAVIGATION MENU -->
<ul class="main-navigation-menu">
<li class="active open">
    <a href="index"><i class="fa fa-home"></i> <span class="title"> Dashboard </span><span class="label label-default pull-right ">LABEL</span> </a>
</li>
<li class="active open">
    <a href="addmember"><i class="fa fa-user"></i> <span class="title"> Add User </span></a>
</li>
<li>
    <a href="javascript:void(0)"><i class="fa fa-desktop"></i> <span class="title"> Layouts </span><i class="icon-arrow"></i> </a>
    <ul class="sub-menu">
        <li>
            <a href="javascript:;">
                Horizontal Menu <i class="icon-arrow"></i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="layouts_horizontal_menu.html">
                        Horizontal Menu
                    </a>
                </li>
                <li>
                    <a href="layouts_horizontal_menu_fixed.html">
                        Horizontal Menu Fixed
                    </a>
                </li>
                <li>
                    <a href="layouts_horizontal_sidebar_menu.html">
                        Horizontal &amp; Sidebar Menu
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="layouts_sidebar_closed.html">
                <span class="title"> Sidebar Closed </span>
            </a>
        </li>
        <li>
            <a href="layouts_sidebar_not_fixed.html">
                <span class="title"> Sidebar Not Fixed </span>
            </a>
        </li>
        <li>
            <a href="layouts_boxed_layout.html">
                <span class="title"> Boxed Layout </span>
            </a>
        </li>
        <li>
            <a href="layouts_footer_fixed.html">
                <span class="title"> Footer Fixed </span>
            </a>
        </li>
        <li>
            <a href="layouts_single_page.html">
                <span class="title"> Single-Page Interface </span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)"><i class="fa fa-cogs"></i> <span class="title"> UI Lab </span><i class="icon-arrow"></i> </a>
    <ul class="sub-menu">
        <li>
            <a href="ui_elements.html">
                <span class="title"> Elements </span>
            </a>
        </li>
        <li>
            <a href="ui_buttons.html">
                <span class="title"> Buttons </span>
            </a>
        </li>
        <li>
            <a href="ui_icons.html">
                <span class="title"> Icons </span>
            </a>
        </li>
        <li>
            <a href="ui_animations.html">
                <span class="title"> CSS3 Animation </span>
            </a>
        </li>
        <li>
            <a href="ui_subview.html">
                <span class="title"> Subview </span> <span class="label partition-blue pull-right ">HOT</span>
            </a>
        </li>
        <li>
            <a href="ui_modals.html">
                <span class="title"> Extended Modals </span>
            </a>
        </li>
        <li>
            <a href="ui_tabs_accordions.html">
                <span class="title"> Tabs &amp; Accordions </span>
            </a>
        </li>
        <li>
            <a href="ui_panels.html">
                <span class="title"> Panels </span>
            </a>
        </li>
        <li>
            <a href="ui_notifications.html">
                <span class="title"> Notifications </span>
            </a>
        </li>
        <li>
            <a href="ui_sliders.html">
                <span class="title"> Sliders </span>
            </a>
        </li>
        <li>
            <a href="ui_treeview.html">
                <span class="title"> Treeview </span>
            </a>
        </li>
        <li>
            <a href="ui_nestable.html">
                <span class="title"> Nestable List </span>
            </a>
        </li>
        <li>
            <a href="ui_typography.html">
                <span class="title"> Typography </span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)"><i class="fa fa-th-large"></i> <span class="title"> Tables </span><i class="icon-arrow"></i> </a>
    <ul class="sub-menu">
        <li>
            <a href="table_basic.html">
                <span class="title">Basic Tables</span>
            </a>
        </li>
        <li>
            <a href="table_responsive.html">
                <span class="title">Responsive Tables</span>
            </a>
        </li>
        <li>
            <a href="table_data.html">
                <span class="title">Advanced Data Tables</span>
            </a>
        </li>
        <li>
            <a href="table_export.html">
                <span class="title">Table Export</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)"><i class="fa fa-pencil-square-o"></i> <span class="title"> Forms </span><i class="icon-arrow"></i> </a>
    <ul class="sub-menu">
        <li>
            <a href="form_elements.html">
                <span class="title">Form Elements</span>
            </a>
        </li>
        <li>
            <a href="form_wizard.html">
                <span class="title">Form Wizard</span>
            </a>
        </li>
        <li>
            <a href="form_validation.html">
                <span class="title">Form Validation</span>
            </a>
        </li>
        <li>
            <a href="form_inline.html">
                <span class="title">Inline Editor</span>
            </a>
        </li>
        <li>
            <a href="form_x_editable.html">
                <span class="title">Form X-editable</span>
            </a>
        </li>
        <li>
            <a href="form_image_cropping.html">
                <span class="title">Image Cropping</span>
            </a>
        </li>
        <li>
            <a href="form_multiple_upload.html">
                <span class="title">Multiple File Upload</span>
            </a>
        </li>
        <li>
            <a href="form_dropzone.html">
                <span class="title">Dropzone File Upload</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title">Login</span><i class="icon-arrow"></i> </a>
    <ul class="sub-menu">
        <li>
            <a href="login_login.html">
                <span class="title"> Login Form </span>
            </a>
        </li>
        <li>
            <a href="login_login.html?box=register">
                <span class="title"> Registration Form </span>
            </a>
        </li>
        <li>
            <a href="login_login.html?box=forgot">
                <span class="title"> Forgot Password Form </span>
            </a>
        </li>
        <li>
            <a href="login_lock_screen.html">
                <span class="title">Lock Screen</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)"><i class="fa fa-code"></i> <span class="title">Pages</span><i class="icon-arrow"></i> </a>
    <ul class="sub-menu">
        <li>
            <a href="pages_user_profile.html">
                <span class="title">User Profile</span>
            </a>
        </li>
        <li>
            <a href="pages_invoice.html">
                <span class="title">Invoice</span>
            </a>
        </li>
        <li>
            <a href="pages_gallery.html">
                <span class="title">Gallery</span>
            </a>
        </li>
        <li>
            <a href="pages_timeline.html">
                <span class="title">Timeline</span>
            </a>
        </li>
        <li>
            <a href="pages_calendar.html">
                <span class="title">Calendar</span>
            </a>
        </li>
        <li>
            <a href="pages_messages.html">
                <span class="title">Messages</span>
            </a>
        </li>
        <li>
            <a href="pages_blank_page.html">
                <span class="title">Blank Page</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)"><i class="fa fa-cubes"></i> <span class="title">Utility</span><i class="icon-arrow"></i> </a>
    <ul class="sub-menu">
        <li>
            <a href="utility_faq.html">
                <span class="title">Faq</span>
            </a>
        </li>
        <li>
            <a href="utility_search_result.html">
                <span class="title">Search Results </span>
            </a>
        </li>
        <li>
            <a href="utility_404_example1.html">
                <span class="title">Error 404 Example 1</span>
            </a>
        </li>
        <li>
            <a href="utility_404_example2.html">
                <span class="title">Error 404 Example 2</span>
            </a>
        </li>
        <li>
            <a href="utility_404_example3.html">
                <span class="title">Error 404 Example 3</span>
            </a>
        </li>
        <li>
            <a href="utility_500_example1.html">
                <span class="title">Error 500 Example 1</span>
            </a>
        </li>
        <li>
            <a href="utility_500_example2.html">
                <span class="title">Error 500 Example 2</span>
            </a>
        </li>
        <li>
            <a href="utility_pricing_table.html">
                <span class="title">Pricing Table</span>
            </a>
        </li>
        <li>
            <a href="utility_coming_soon.html">
                <span class="title">Cooming Soon</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:;" class="active">
        <i class="fa fa-folder"></i> <span class="title"> 3 Level Menu </span> <i class="icon-arrow"></i>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="javascript:;">
                Item 1 <i class="icon-arrow"></i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 2
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 3
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">
                Item 1 <i class="icon-arrow"></i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                Item 3
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:;">
        <i class="fa fa-folder-open"></i> <span class="title"> 4 Level Menu </span><i class="icon-arrow"></i> <span class="arrow "></span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="javascript:;">
                Item 1 <i class="icon-arrow"></i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="javascript:;">
                        Sample Link 1 <i class="icon-arrow"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><i class="fa fa-times"></i> Sample Link 1</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit"></i> Sample Link 1</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 2
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 3
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">
                Item 2 <i class="icon-arrow"></i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sample Link 1
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                Item 3
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="maps.html"><i class="fa fa-map-marker"></i> <span class="title">Maps</span> </a>
</li>
<li>
    <a href="charts.html"><i class="fa fa-bar-chart-o"></i> <span class="title">Charts</span> </a>
</li>
</ul>
<!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR -->
</div>
<div class="slide-tools">
    <div class="col-xs-6 text-left no-padding">
        <a class="btn btn-sm status" href="#">
            Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
        </a>
    </div>
    <div class="col-xs-6 text-right no-padding">
        <a class="btn btn-sm log-out text-right" href="login_login.html">
            <i class="fa fa-power-off"></i> Log Out
        </a>
    </div>
</div>
</nav>
<!-- end: PAGESLIDE LEFT -->
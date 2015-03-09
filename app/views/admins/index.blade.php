@extends('master')

@section('content')

<!-- start: PAGESLIDE RIGHT -->
<!--<div id="pageslide-right" class="pageslide slide-fixed inner">
    <div class="right-wrapper">
        <div class="notifications">
            <div class="pageslide-title">
                You have 11 notifications
            </div>
            <ul class="pageslide-list">
                <li>
                    <a href="javascript:void(0)">
                        <span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 1 min</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 7 min</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 8 min</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 16 min</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 36 min</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="label label-warning"><i class="fa fa-shopping-cart"></i></span> <span class="message"> 2 items sold</span> <span class="time"> 1 hour</span>
                    </a>
                </li>
                <li class="warning">
                    <a href="javascript:void(0)">
                        <span class="label label-danger"><i class="fa fa-user"></i></span> <span class="message"> User deleted account</span> <span class="time"> 2 hour</span>
                    </a>
                </li>
            </ul>
            <div class="view-all">
                <a href="javascript:void(0)">
                    See all notifications <i class="fa fa-arrow-circle-o-right"></i>
                </a>
            </div>
        </div>
        <div class="hidden-xs" id="style_selector">
            <div id="style_selector_container">
                <div class="pageslide-title">
                    Style Selector
                </div>
                <div class="box-title">
                    Choose Your Layout Style
                </div>
                <div class="input-box">
                    <div class="input">
                        <select name="layout" class="form-control">
                            <option value="default">Wide</option><option value="boxed">Boxed</option>
                        </select>
                    </div>
                </div>
                <div class="box-title">
                    Choose Your Header Style
                </div>
                <div class="input-box">
                    <div class="input">
                        <select name="header" class="form-control">
                            <option value="fixed">Fixed</option><option value="default">Default</option>
                        </select>
                    </div>
                </div>
                <div class="box-title">
                    Choose Your Sidebar Style
                </div>
                <div class="input-box">
                    <div class="input">
                        <select name="sidebar" class="form-control">
                            <option value="fixed">Fixed</option><option value="default">Default</option>
                        </select>
                    </div>
                </div>
                <div class="box-title">
                    Choose Your Footer Style
                </div>
                <div class="input-box">
                    <div class="input">
                        <select name="footer" class="form-control">
                            <option value="default">Default</option><option value="fixed">Fixed</option>
                        </select>
                    </div>
                </div>
                <div class="box-title">
                    10 Predefined Color Schemes
                </div>
                <div class="images icons-color">
                    <a href="#" id="default"><img src="../../assets/images/color-1.png" alt="" class="active"></a>
                    <a href="#" id="style2"><img src="../../assets/images/color-2.png" alt=""></a>
                    <a href="#" id="style3"><img src="../../assets/images/color-3.png" alt=""></a>
                    <a href="#" id="style4"><img src="../../assets/images/color-4.png" alt=""></a>
                    <a href="#" id="style5"><img src="../../assets/images/color-5.png" alt=""></a>
                    <a href="#" id="style6"><img src="../../assets/images/color-6.png" alt=""></a>
                    <a href="#" id="style7"><img src="../../assets/images/color-7.png" alt=""></a>
                    <a href="#" id="style8"><img src="../../assets/images/color-8.png" alt=""></a>
                    <a href="#" id="style9"><img src="../../assets/images/color-9.png" alt=""></a>
                    <a href="#" id="style10"><img src="../../assets/images/color-10.png" alt=""></a>
                </div>
                <div class="box-title">
                    Backgrounds for Boxed Version
                </div>
                <div class="images boxed-patterns">
                    <a href="#" id="bg_style_1"><img src="../../assets/images/bg.png" alt=""></a>
                    <a href="#" id="bg_style_2"><img src="../../assets/images/bg_2.png" alt=""></a>
                    <a href="#" id="bg_style_3"><img src="../../assets/images/bg_3.png" alt=""></a>
                    <a href="#" id="bg_style_4"><img src="../../assets/images/bg_4.png" alt=""></a>
                    <a href="#" id="bg_style_5"><img src="../../assets/images/bg_5.png" alt=""></a>
                </div>
                <div class="style-options">
                    <a href="#" class="clear_style">
                        Clear Styles
                    </a>
                    <a href="#" class="save_style">
                        Save Styles
                    </a>
                </div>
            </div>
            <div class="style-toggle open"></div>
        </div>
    </div>
</div>-->
<!-- end: PAGESLIDE RIGHT -->
<!-- start: MAIN CONTAINER -->
<div class="main-container inner">
<!-- start: PAGE -->
<div class="main-content">
<!-- start: PANEL CONFIGURATION MODAL FORM -->
<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">Panel Configuration</h4>
            </div>
            <div class="modal-body">
                Here will be a configuration form
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end: SPANEL CONFIGURATION MODAL FORM -->
<div class="container">
<!-- start: PAGE HEADER -->
<!-- start: TOOLBAR -->
<div class="toolbar row">
    <div class="col-sm-6 hidden-xs">
        <div class="page-header">
            <h1>Dashboard <small>overview &amp; stats </small></h1>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        <a href="#" class="back-subviews">
            <i class="fa fa-chevron-left"></i> BACK
        </a>
        <a href="#" class="close-subviews">
            <i class="fa fa-times"></i> CLOSE
        </a>

    </div>
</div>
<!-- end: TOOLBAR -->
<!-- end: PAGE HEADER -->
<!-- start: BREADCRUMB -->
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    Dashboard
                </a>
            </li>
            <li class="active">
                Dashboard
            </li>
        </ol>
    </div>
</div>
<!-- end: BREADCRUMB -->
<!-- start: PAGE CONTENT -->

<!-- end: PAGE CONTENT-->
</div>
<div class="subviews">
    <div class="subviews-container"></div>
</div>
</div>
<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->
<!--<footer class="inner">-->
<!--    <div class="footer-inner">-->
<!--        <div class="pull-left">-->
<!--            2014 &copy; Rapido by cliptheme.-->
<!--        </div>-->
<!--        <div class="pull-right">-->
<!--            <span class="go-top"><i class="fa fa-chevron-up"></i></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<!-- end: FOOTER -->
<!-- start: SUBVIEW SAMPLE CONTENTS -->
<!-- *** NEW NOTE *** -->
<div id="newNote">
    <div class="noteWrap col-md-8 col-md-offset-2">
        <h3>Add new note</h3>
        <form class="form-note">
            <div class="form-group">
                <input class="note-title form-control" name="noteTitle" type="text" placeholder="Note Title...">
            </div>
            <div class="form-group">
                <textarea id="noteEditor" name="noteEditor" class="hide"></textarea>
                <textarea class="summernote" placeholder="Write note here..."></textarea>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <a href="#" class="btn btn-info close-subview-button">
                        Close
                    </a>
                </div>
                <div class="btn-group">
                    <button class="btn btn-info save-note" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- *** READ NOTE *** -->
<div id="readNote">
    <div class="barTopSubview">
        <a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
    </div>
    <div class="noteWrap col-md-8 col-md-offset-2">
        <div class="panel panel-note">
            <div class="e-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="panel-heading">
                        <h3>This is a Note</h3>
                    </div>
                    <div class="panel-body">
                        <div class="note-short-content">
                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                        </div>
                        <div class="note-content">
                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                            Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
                            <br>
                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            <br>
                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                            <br>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                            <br>
                            Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                            <br>
                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                            <br>
                            Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                            <br>
                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        </div>
                        <div class="note-options pull-right">
                            <a href="#readNote" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="avatar-note"><img src="../../assets/images/avatar-2-small.jpg" alt="">
                        </div>
                        <span class="author-note">Nicole Bell</span>
                        <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                            2014-02-18T00:00:00-05:00
                        </time>
                    </div>
                </div>
                <div class="item">
                    <div class="panel-heading">
                        <h3>This is the second Note</h3>
                    </div>
                    <div class="panel-body">
                        <div class="note-short-content">
                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
                        </div>
                        <div class="note-content">
                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            <br>
                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                            <br>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                            <br>
                            Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                            <br>
                            Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                            <br>
                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        </div>
                        <div class="note-options pull-right">
                            <a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="avatar-note"><img src="../../assets/images/avatar-3-small.jpg" alt="">
                        </div>
                        <span class="author-note">Steven Thompson</span>
                        <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                            2014-02-18T00:00:00-05:00
                        </time>
                    </div>
                </div>
                <div class="item">
                    <div class="panel-heading">
                        <h3>This is yet another Note</h3>
                    </div>
                    <div class="panel-body">
                        <div class="note-short-content">
                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
                        </div>
                        <div class="note-content">
                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                            <br>
                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            <br>
                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                            <br>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                        </div>
                        <div class="note-options pull-right">
                            <a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="avatar-note"><img src="../../assets/images/avatar-4-small.jpg" alt="">
                        </div>
                        <span class="author-note">Ella Patterson</span>
                        <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                            2014-02-18T00:00:00-05:00
                        </time>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- *** SHOW CALENDAR *** -->
<div id="showCalendar" class="col-md-10 col-md-offset-1">
    <div class="barTopSubview">
        <a href="#newEvent" class="new-event button-sv" data-subviews-options='{"onShow": "editEvent()"}'><i class="fa fa-plus"></i> Add new event</a>
    </div>
    <div id="calendar"></div>
</div>
<!-- *** NEW EVENT *** -->
<div id="newEvent">
    <div class="noteWrap col-md-8 col-md-offset-2">
        <h3>Add new event</h3>
        <form class="form-event">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="event-id hide" type="text">
                        <input class="event-name form-control" name="eventName" type="text" placeholder="Event Name...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" class="all-day" data-label-text="All-Day" data-on-text="True" data-off-text="False">
                    </div>
                </div>
                <div class="no-all-day-range">
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-clock-o"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-day-range">
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="ad_eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-calendar"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hide">
                    <input type="text" class="event-start-date" name="eventStartDate"/>
                    <input type="text" class="event-end-date" name="eventEndDate"/>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <select class="form-control selectpicker event-categories">
                            <option data-content="<span class='event-category event-cancelled'>Cancelled</span>" value="event-cancelled">Cancelled</option>
                            <option data-content="<span class='event-category event-home'>Home</span>" value="event-home">Home</option>
                            <option data-content="<span class='event-category event-overtime'>Overtime</span>" value="event-overtime">Overtime</option>
                            <option data-content="<span class='event-category event-generic'>Generic</span>" value="event-generic" selected="selected">Generic</option>
                            <option data-content="<span class='event-category event-job'>Job</span>" value="event-job">Job</option>
                            <option data-content="<span class='event-category event-offsite'>Off-site work</span>" value="event-offsite">Off-site work</option>
                            <option data-content="<span class='event-category event-todo'>To Do</span>" value="event-todo">To Do</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="summernote" placeholder="Write note here..."></textarea>
                    </div>
                </div>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <a href="#" class="btn btn-info close-subview-button">
                        Close
                    </a>
                </div>
                <div class="btn-group">
                    <button class="btn btn-info save-new-event" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- *** READ EVENT *** -->
<div id="readEvent">
    <div class="noteWrap col-md-8 col-md-offset-2">
        <div class="row">
            <div class="col-md-12">
                <h2 class="event-title">Event Title</h2>
                <div class="btn-group options-toggle pull-right">
                    <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                        <span class="caret"></span>
                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                        <li>
                            <a href="#newEvent" class="edit-event">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                        </li>
                        <li>
                            <a href="#" class="delete-event">
                                <i class="fa fa-times"></i> Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <span class="event-category event-cancelled">Cancelled</span>
                <span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
            </div>
            <div class="col-md-12">
                <div class="event-start">
                    <div class="event-day"></div>
                    <div class="event-date"></div>
                    <div class="event-time"></div>
                </div>
                <div class="event-end"></div>
            </div>
            <div class="col-md-12">
                <div class="event-content"></div>
            </div>
        </div>
    </div>
</div>
<!-- *** NEW CONTRIBUTOR *** -->
<div id="newContributor">
    <div class="noteWrap col-md-8 col-md-offset-2">
        <h3>Add new contributor</h3>
        <form class="form-contributor">
            <div class="row">
                <div class="col-md-12">
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                    </div>
                    <div class="successHandler alert alert-success no-display">
                        <i class="fa fa-ok"></i> Your form validation is successful!
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="contributor-id hide" type="text">
                        <label class="control-label">
                            First Name <span class="symbol required"></span>
                        </label>
                        <input type="text" placeholder="Insert your First Name" class="form-control contributor-firstname" name="firstname">
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Last Name <span class="symbol required"></span>
                        </label>
                        <input type="text" placeholder="Insert your Last Name" class="form-control contributor-lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Email Address <span class="symbol required"></span>
                        </label>
                        <input type="email" placeholder="Text Field" class="form-control contributor-email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Password <span class="symbol required"></span>
                        </label>
                        <input type="password" class="form-control contributor-password" name="password">
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Confirm Password <span class="symbol required"></span>
                        </label>
                        <input type="password" class="form-control contributor-password-again" name="password_again">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">
                            Gender <span class="symbol required"></span>
                        </label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey contributor-gender" value="F" name="gender">
                                Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey contributor-gender" value="M" name="gender">
                                Male
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Permits <span class="symbol required"></span>
                        </label>
                        <select name="permits" class="form-control contributor-permits" >
                            <option value="View and Edit">View and Edit</option>
                            <option value="View Only">View Only</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="fileupload fileupload-new contributor-avatar" data-provides="fileupload">
                            <div class="fileupload-new thumbnail"><img src="../../assets/images/anonymous.jpg" alt="" width="50" height="50"/>
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                            <div class="contributor-avatar-options">
											<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
												<input type="file">
											</span>
                                <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                    <i class="fa fa-times"></i> Remove
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            SEND MESSAGE (Optional)
                        </label>
                        <textarea class="form-control contributor-message"></textarea>
                    </div>
                </div>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <a href="#" class="btn btn-info close-subview-button">
                        Close
                    </a>
                </div>
                <div class="btn-group">
                    <button class="btn btn-info save-contributor" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- *** SHOW CONTRIBUTORS *** -->
<div id="showContributors">
    <div class="barTopSubview">
        <a href="#newContributor" class="new-contributor button-sv"><i class="fa fa-plus"></i> Add new contributor</a>
    </div>
    <div class="noteWrap col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="contributors">
                    <div class="options-contributors hide">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                <li>
                                    <a href="#newContributor" class="show-subviews edit-contributor">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="delete-contributor">
                                        <i class="fa fa-times"></i> Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: SUBVIEW SAMPLE CONTENTS -->
</div>

<script>
    jQuery(document).ready(function() {
        Main.init();
        SVExamples.init();
        Index.init();
    });
</script>
@stop
@extends('admins.head')
@extends('admins.header')
@extends('admins.sidebar')
@extends('admins.footer')
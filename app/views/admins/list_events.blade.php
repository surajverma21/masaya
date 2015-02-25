@extends('master')

@section('content')
<!-- start: MAIN CONTAINER -->
<div class="main-container inner">
<!-- start: PAGE -->
<div class="main-content">

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
        <div class="toolbar-tools pull-right">
            <!-- start: TOP NAVIGATION MENU -->
            <ul class="nav navbar-right">
                <!-- start: TO-DO DROPDOWN -->
                <li class="dropdown">
                    <a href="{{ URL::to('/') }}/admin/events-activities">
                        <i class="fa fa-plus"></i> Add Events
                    </a>
                 </li>
            </ul>
            <!-- end: TOP NAVIGATION MENU -->
        </div>
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
                Events
            </li>
        </ol>
    </div>
</div>
<!-- end: BREADCRUMB -->
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: TABLE WITH IMAGES PANEL -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h4 class="panel-title">Events<span class="text-bold"></span></h4>
                <div class="panel-tools">
                    <div class="dropdown">
                        <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                            <i class="fa fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                            <li>
                                <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                            </li>
                            <li>
                                <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <table class="table table-striped table-hover" id="sample-table-2">
                <thead>
                <tr>
                    <th class="center">
                        <div class="checkbox-table">
                            <label>
                                &nbsp;
                            </label>
                        </div></th>
<!--                    <th class="center">Photo</th>-->
                    <th>Title</th>
                    <th class="hidden-xs">Subtitle</th>
                    <th class="hidden-xs">Month</th>
                    <th class="hidden-xs">Hostel</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1;?>
                @foreach ($events as $event)

                    <tr>
                        <td class="center">
                            <div class="checkbox-table">
                                <label>
                                  {{ $count }}
                                    <?php $count++; ?>
                                </label>
                            </div></td>
<!--                        <td class="center"><img src="assets/images/avatar-1.jpg" alt="image"/></td>-->
                        <td>{{ $event->event_title }}</td>
                        <td class="hidden-xs">{{ $event->event_sub_title }}</td>
                        <td class="hidden-xs">
                            <?php
                            $month = array(1 => 'January', 2 => 'Feburary', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December');
                            echo $month[$event->month_id];                            ?>
                            </td>
                        <td class="hidden-xs">{{ $event->hostel_id }}</td>
                        <td class="center">
                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                <a href="edit_event/<?php echo $event->id; ?>" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove" onclick="return delete_event({{$event->id}})"><i class="fa fa-times fa fa-white"></i></a>
                            </div>
                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                <div class="btn-group">
                                    <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </a>
                                    <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div></td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <!-- end: TABLE WITH IMAGES PANEL -->
    </div>
</div>
<!-- end: PAGE CONTENT-->
</div>

</div>
<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->
<footer class="inner">
    <div class="footer-inner">
        <div class="pull-left">
            2014 &copy; Rapido by cliptheme.
        </div>
        <div class="pull-right">
            <span class="go-top"><i class="fa fa-chevron-up"></i></span>
        </div>
    </div>
</footer>
<!-- end: FOOTER -->

<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
{{ HTML::script('assets/plugins/respond.min.js') }}
{{ HTML::script('assets/plugins/excanvas.min.js') }}
<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js') }}
		<![endif]-->
<!--[if gte IE 9]><!-->
{{ HTML::script('../assets/plugins/jQuery/jquery-2.1.1.min.js') }}
<!--<![endif]-->
{{ HTML::script('../assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('../assets/plugins/blockUI/jquery.blockUI.js') }}
{{ HTML::script('../assets/plugins/iCheck/jquery.icheck.min.js') }}
{{ HTML::script('../assets/plugins/moment/min/moment.min.js') }}
{{ HTML::script('../assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}
{{ HTML::script('../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}
{{ HTML::script('../assets/plugins/bootbox/bootbox.min.js') }}
{{ HTML::script('../assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js') }}
{{ HTML::script('../assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js') }}
{{ HTML::script('../assets/plugins/jquery.appear/jquery.appear.js') }}
{{ HTML::script('../assets/plugins/jquery-cookie/jquery.cookie.js') }}
{{ HTML::script('../assets/plugins/velocity/jquery.velocity.min.js') }}
{{ HTML::script('../assets/plugins/TouchSwipe/jquery.touchSwipe.min.js') }}
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
{{ HTML::script('../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}
{{ HTML::script('../assets/plugins/jquery-mockjax/jquery.mockjax.js') }}
{{ HTML::script('../assets/plugins/toastr/toastr.js') }}
{{ HTML::script('../assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}
{{ HTML::script('../assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}
{{ HTML::script('../assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-select/bootstrap-select.min.js') }}
{{ HTML::script('../assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}
{{ HTML::script('../assets/plugins/DataTables/media/js/jquery.dataTables.min.js') }}
{{ HTML::script('../assets/plugins/DataTables/media/js/DT_bootstrap.js') }}
{{ HTML::script('../assets/plugins/truncate/jquery.truncate.js') }}
{{ HTML::script('../assets/plugins/summernote/dist/summernote.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}
{{ HTML::script('../assets/js/subview.js') }}
{{ HTML::script('../assets/js/subview-examples.js') }}
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
{{ HTML::script('../assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js') }}
{{ HTML::script('../assets/plugins/nvd3/lib/d3.v3.js') }}
{{ HTML::script('../assets/plugins/nvd3/nv.d3.min.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/historicalBar.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/historicalBarChart.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/stackedArea.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/stackedAreaChart.js') }}
{{ HTML::script('../assets/plugins/jquery.sparkline/jquery.sparkline.js') }}
{{ HTML::script('../assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js') }}
{{ HTML::script('../assets/js/index.js') }}
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE JAVASCRIPTS  -->
{{ HTML::script('../assets/js/main.js') }}
<!-- end: CORE JAVASCRIPTS  -->
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

@extends('master')

@section('content')
<!-- start: PAGESLIDE RIGHT -->
<!-- start: MAIN CONTAINER -->
<div class="main-container inner">
<!-- start: PAGE -->
<div class="main-content">
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
        <div class="toolbar-tools pull-right">
            <!-- start: TOP NAVIGATION MENU -->
            <ul class="nav navbar-right">
                <!-- start: TO-DO DROPDOWN -->
                <li class="dropdown">
                    <a href="#">
                        <i class="fa fa-plus"></i> SUBVIEW
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
                Events & Activities
            </li>
        </ol>
    </div>
</div>
<!-- end: BREADCRUMB -->
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-6 col-lg-8 col-sm-6">
        <div class="box-login">
            {{ Form::open(array('url' => 'admin/save-events','class' => 'form-horizontal', 'files' => true)) }}

                <fieldset>
                    <div class="form-group">
                        {{ Form::label('event_title','Title', $attributes = ['class' => 'col-sm-2 control-label']) }}
                        <div class="col-sm-9">
                            {{ Form::text('event_title', '', $attributes = ['class' => 'form-control', 'placeholder' => 'Title']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('event_sub_title','Sub Title', $attributes = ['class' => 'col-sm-2 control-label']) }}
                        <div class="col-sm-9">
                            {{ Form::text('event_sub_title', '', $attributes = ['class' => 'form-control', 'placeholder' => 'Sub Title']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('event_text','Text', $attributes = ['class' => 'col-sm-2 control-label']) }}
                        <div class="col-sm-9">
                            {{ Form::textarea('event_text', '', $attributes = ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('month','Select Month', $attributes = ['class' => 'col-sm-2 control-label']) }}
                        <div class="col-sm-9">
                            {{ Form::selectMonth('month', '', $attributes = ['class' => 'form-control', 'placeholder' => 'Title']) }}
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('event_image','Image', $attributes = ['class' => 'col-sm-2 control-label']) }}

                        <div class="col-sm-9">
                            {{ Form::file('event_image', '', $attributes = ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-actions">
                        {{ Form::submit('Save', $attributes = ['class' => 'btn btn-green pull-right']) }}
                    </div>
                </fieldset>

            </div>
            {{ Form::close() }}
        </div>
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

</div>
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

@extends('master')

@section('content')
<!-- start: MAIN CONTAINER -->
<div class="main-container inner">
    <!-- start: PAGE -->
    <div class="main-content">
        <!-- end: SPANEL CONFIGURATION MODAL FORM -->
        <div class="container">
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
                                <a href="{{ URL::to('/') }}/admin/addmember">
                                    <i class="fa fa-plus"></i> Add Member
                                </a>
                            </li>
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
                            Edit
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-md-6 col-lg-8 col-sm-6">
                    <div class="box-login">
                        {{ Form::open(array('url' => 'admin/update','class' => 'form-horizontal')) }}

                        @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <fieldset>
                            {{ Form::hidden('id', $member->id) }}
                            <div class="form-group">
                                {{ Form::label('full_name','Full Name :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('full_name', $member->full_name, $attributes = ['class' => 'form-control', 'placeholder' => 'Full Name']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('username','Username :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('username', $member->username, $attributes = ['class' => 'form-control', 'placeholder' => 'Username']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('email','Email Id :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('email', $member->email, $attributes = ['class' => 'form-control', 'placeholder' => 'Email Address']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('contact_number','Contact Number :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('contact_number', $member->contact_number, $attributes = ['class' => 'form-control', 'placeholder' => 'Contact Number']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('password','Password :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::password('password', $attributes = ['class' => 'form-control', 'placeholder' => 'Password']) }}
                                </div>
                            </div>

                            <div class="form-actions">
                                {{ Form::submit('Update', $attributes = ['class' => 'btn btn-green pull-right']) }}
                            </div>
                        </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
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

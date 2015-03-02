@extends('master')
@section('content')
<!-- start: MAIN CONTAINER -->

<!-- end: SLIDING BAR -->
<div class="main-wrapper">
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
                                <a href="{{ URL::to('/') }}/admin/add_activity">
                                    <i class="fa fa-plus"></i> Add Activity
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
                            Activities
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-md-6 col-lg-8 col-sm-6">
                    <div class="box-login">
                        <div class="panel-outer">
                            <div class="panel-inner">
                                <h4 class="panel-title">Add <span class="text-bold">Activity</span></h4>
                                <div class="panel-tools">
                                    <div class="dropdown">
                                        <a class="btn btn-xs dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                            <li>
                                                <a href="#" class="panel-collapse collapses"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                            </li>
                                            <li>
                                                <a href="#" class="panel-refresh">
                                                    <i class="fa fa-refresh"></i> <span>Refresh</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="modal" href="#panel-config" class="panel-config">
                                                    <i class="fa fa-wrench"></i> <span>Configurations</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="panel-expand">
                                                    <i class="fa fa-expand"></i> <span>Fullscreen</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-xs btn-link panel-close">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                        {{ Form::open(array('url' => 'admin/save_activity','class' => 'form-horizontal','files' =>true)) }}

                        @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <fieldset>

                            <div class="form-group">
                                {{ Form::label('language_id','Language', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::select('language_id', $languages) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('hostel_id','Hostel', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::select('hostel_id', $hostels) }}
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('name','Name :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('name', '', $attributes = ['class' => 'form-control', 'placeholder' => 'Activity Name','required' => 'required']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('description','Description :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('description', '', $attributes = ['class' => 'form-control', 'placeholder' => 'A short text about activity','required' => 'required']) }}
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('image','Image', $attributes = ['class' => 'col-sm-2 control-label']) }}

                                <div class="col-sm-9">
                                    {{ Form::file('image', '', $attributes = ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <?php $days = array(1=>'Sunday', 2=>'Monday', 3=>'Tuesday', 4=>'Wednesday', 5=>'Thaursday', 6=>'Friday', 7=>'Saturday')?>
                            <div class="form-group">
                                {{ Form::label('day','Activity day', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::select('day', $days) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('datetime','Activity date & time', $attributes = ['class' => 'input-group col-sm-3 calenderfrm control-label']) }}
                                <div class="input-group col-sm-9 paddinglft " >
                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                    {{ Form::text('date-time-range', '', $attributes = ['class' => 'form-control date-time-range','required' => 'required']) }}
                                </div>
                            </div>


                            <div class="form-actions">
                                {{ Form::submit('Add', $attributes = ['class' => 'btn btn-green pull-right']) }}
                            </div>
                        </fieldset>
                        {{ Form::close() }}
                        </div>
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
    <!-- *** READ NOTE *** -->
    <div id="readNote">
        <div class="barTopSubview">
            <a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
        </div>
        <div class="noteWrap col-md-8 col-md-offset-2">
            <div class="panel panel-note">
                <div class="e-slider owl-carousel owl-theme">
                    <div class="item">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function() {
        Main.init();
        SVExamples.init();
        FormElements.init();
    });
</script>
@stop
@extends('admins.head')
@extends('admins.header')
@extends('admins.sidebar')
@extends('admins.footer')
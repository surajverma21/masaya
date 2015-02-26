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

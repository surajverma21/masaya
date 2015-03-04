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
                                <a href="{{ URL::to('/') }}/admin/events-activities">
                                    <i class="fa fa-plus"></i> Add Event
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
                            Edit
                        </li>
                    </ol>
                </div>
            </div>

            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="box-login">
                        {{ Form::open(array('url' => 'admin/update_event','class' => 'form-horizontal', 'files' => true)) }}

                        @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <fieldset>
                            {{ Form::hidden('id', $event->id) }}
                            <div class="form-group">
                                {{ Form::label('language_id','Language', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::select('language_id', $languages) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('title','Title :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('title', $event->event_title, $attributes = ['class' => 'form-control', 'placeholder' => 'Title']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('sub_title','Sub Title :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('sub_title', $event->event_sub_title, $attributes = ['class' => 'form-control', 'placeholder' => 'Sub Title']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('text','Text :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::textarea('text', $event->event_text, $attributes = ['class' => 'form-control', 'placeholder' => '']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('event_legend','Legend Event', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    @if($event->event_legend_img == 'yes')
                                        {{ Form::checkbox('event_legend', 'yes', true) }}
                                    @else
                                        {{ Form::checkbox('event_legend', 'yes') }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('event_medium','Medium Event', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    @if($event->event_medium_img == 'yes')
                                    {{ Form::checkbox('event_medium', 'yes', true) }}
                                    @else
                                    {{ Form::checkbox('event_medium', 'yes') }}
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('hostel_id','Hostel', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::select('hostel_id', $hostels) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('month','Select Month', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::selectMonth('month', $event->month_id, $attributes = ['class' => 'form-control', 'placeholder' => 'Title']) }}
                                </div>
                            </div>
                            <br/>
                            <img style="height:15%" src="{{URL::to('/')}}/../uploads/events/{{$event->event_image}}" alt="" width="200px"/>
                            <br/>
                            <br/>
                            <div class="form-group">
                                {{ Form::label('event_image','Image', $attributes = ['class' => 'col-sm-3 control-label']) }}

                                <div class="col-sm-9">
                                    {{ Form::file('event_image', '', $attributes = ['class' => 'form-control']) }}
                                </div>
                               <!--( Minimum Size : 1400*650 in pix )
                                ( Minimum Size : 720*600 in pix )-->
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

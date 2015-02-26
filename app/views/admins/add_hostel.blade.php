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
                                <a href="{{ URL::to('/') }}/admin/addmember">
                                    <i class="fa fa-plus"></i> Add Member
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
                            Add
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-md-6 col-lg-8 col-sm-6">
                    <div class="box-login">
                        {{ Form::open(array('url' => 'admin/save_hostel','class' => 'form-horizontal','files' =>true)) }}

                        @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <fieldset>

                            <div class="form-group">
                                {{ Form::label('name','Name :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('name', '', $attributes = ['class' => 'form-control', 'placeholder' => 'Hostel Name','required' => 'required']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('description','Description :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('description', '', $attributes = ['class' => 'form-control', 'placeholder' => 'A short text about place','required' => 'required']) }}
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('hostel_image','Image', $attributes = ['class' => 'col-sm-3 control-label']) }}

                                <div class="col-sm-9">
                                    {{ Form::file('hostel_image', '', $attributes = ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('promotional_artist_text','Promotional Artist description :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::textarea('promotional_artist_text', '', $attributes = ['class' => 'form-control', 'placeholder' => 'Promotional artist phrases','required' => 'required']) }}
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('hostel_image','Promotional Artist Image', $attributes = ['class' => 'col-sm-3 control-label']) }}

                                <div class="col-sm-9">
                                    {{ Form::file('promotional_artist_image', '', $attributes = ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('city_guide','City guide Image', $attributes = ['class' => 'col-sm-3 control-label']) }}

                                <div class="col-sm-9">
                                    {{ Form::file('city_guide_image', '', $attributes = ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('excursion_image','Excursion Image', $attributes = ['class' => 'col-sm-3 control-label']) }}

                                <div class="col-sm-9">
                                    {{ Form::file('excursion_image', '', $attributes = ['class' => 'form-control']) }}
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
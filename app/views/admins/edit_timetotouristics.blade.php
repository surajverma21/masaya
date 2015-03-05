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
<!--                        <h1>Dashboard <small>overview &amp; stats </small></h1>-->
                        <h1>{{$touristic->hostel->name or ''}}</h1>
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
            @if(Session::has('message'))
            <div class="alert alert-info">
                {{ Session::get('message') }}
            </div>
            @endif
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
                        {{ Form::open(array('url' => 'admin/update_touristic','class' => 'form-horizontal','files' =>true)) }}



                        <fieldset>


                            {{Form::hidden('touristic_id',$touristic->id) }}
                            {{Form::hidden('hostel_id',$touristic->hostel_id) }}

                            <div class="form-group">
                                {{ Form::label('language','Language :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{Form::select('language',$languages,$touristic->language_id)}}
                                    <div style="color:red"> {{ $errors->first('language') }} </div>
                                </div>
                            </div>



                            <div class="form-group">
                                {{ Form::label('time','Time :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                        {{Form::select('time',$time_range,$touristic->time_on_point - 1)}}
                                    <div style="color:red"> {{ $errors->first('time') }} </div>
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('description','Description :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('description', $touristic->description, $attributes = ['class' => 'form-control', 'rerequired' => 'required']) }}
                                    <div style="color:red"> {{ $errors->first('description') }} </div>
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



<script>
    jQuery(document).ready(function() {
        Main.init();
        SVExamples.init();
        
    });
</script>
@stop
@extends('admins.head')
@extends('admins.header')
@extends('admins.sidebar')
@extends('admins.footer')
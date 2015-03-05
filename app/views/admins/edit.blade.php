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

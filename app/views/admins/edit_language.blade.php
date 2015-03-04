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
                                <a href="{{ URL::to('/') }}/admin/add_language">
                                    <i class="fa fa-plus"></i> Language
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
                <div class="col-md-6 col-lg-8 col-sm-6">
                    <div class="box-login">
                        {{ Form::open(array('url' => 'admin/update_language','class' => 'form-horizontal','files' =>true)) }}

                        @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <fieldset>

                            {{Form::hidden('language_id',$language->id) }}

                            <div class="form-group">
                                {{ Form::label('name','Name :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('name', $language->name, $attributes = ['class' => 'form-control', 'placeholder' => 'Language Name','required' => 'required']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('lang_code','language Code :', $attributes = ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('lang_code', $language->lang_code, $attributes = ['class' => 'form-control', 'placeholder' => 'Language Code','required' => 'required']) }}
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('icon','Icon', $attributes = ['class' => 'col-sm-2 control-label']) }}

                                <div class="col-sm-7">
                                    {{ Form::file('icon', '', $attributes = ['class' => 'form-control']) }}
                                </div>
                                @if($language->icon)
                                <div class="col-sm-3"><img style="max-width:100%;" src="{{URL::to('/')}}/../uploads/languages/{{$language->icon}}" alt=""/></div>
                                @endif
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
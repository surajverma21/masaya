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
                        {{ Form::open(array('url' => 'admin/promotional-artist-save','class' => 'form-horizontal','files' =>true)) }}

                        @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <fieldset>

                            <div class="form-group">
                                {{ Form::label('language','Language :', $attributes = ['class' => 'col-sm-3 control-label ']) }}
                                <div class="col-sm-9">
                                    {{ Form::select('language', $languages) }}
                                    <div style="color:red"> {{ $errors->first('language') }} </div>
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('title','Title :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::textarea('title', '', $attributes = ['class' => 'form-control ckeditor form-control','required' => 'required', 'rows' => 4  ]) }}
                                    <div style="color:red"> {{ $errors->first('title') }} </div>
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('sub_title','Sub Title :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::textarea('sub_title', '', $attributes = ['class' => 'form-control ckeditor form-control','required' => 'required', 'rows' => 4  ]) }}
                                    <div style="color:red"> {{ $errors->first('sub_title') }} </div>
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('promotional_artist_text','Promotional Artist Text :', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                <div class="col-sm-9">
                                    {{ Form::textarea('promotional_artist_text', '', $attributes = ['class' => 'form-control ckeditor form-control', 'required' => 'required','rows' => 4]) }}
                                    <div style="color:red"> {{ $errors->first('promotional_artist_text') }} </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-12">

                                    {{ Form::label('promotional_artist_image','Promotional Artist image : ', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                    <div class="fileupload fileupload-new col-sm-6" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                        <div style="margin-top:10px;">
                                            <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>

                                                <input type="file" name="promotional_artist_image">
                                            </span>
                                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </div>



                                    </div>

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
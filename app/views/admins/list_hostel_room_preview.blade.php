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
                        @if(count($list_hostel_room_preview))
                        <h1>{{ $list_hostel_room_preview[0]->hostel->name or ''}}</h1>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->

<!--                        <ul class="nav navbar-right">-->
<!--                            <!-- start: TO-DO DROPDOWN -->
<!--                            <li class="dropdown">-->
<!--                                <a href="hostel-preview-add">-->
<!--                                    <i class="fa fa-plus"></i> Add New-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
                        <!-- end: TOP NAVIGATION MENU -->


                    </div>
                </div>
            </div>
            <div id="msg">
                @if(Session::has('msg'))
                <div class="alert alert-info">
                    {{ Session::get('msg') }}
                </div>
                @endif
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
                            Time To Touristics
                        </li>
                    </ol>
                </div>
            </div>
            <div id="msg"></div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- start: TABLE WITH IMAGES PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Hostels <span class="text-bold"></span></h4>
                            <div id="msg"></div>
                            <div class="panel-tools">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                        <li>
                                            <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
<?php //print_r($list_hostel_room_preview); die;?>
                            @if(count($list_hostel_room_preview))



                                    {{ Form::open(array('url' => 'admin/save-hostel-room_preview','class' => 'form-horizontal','files' =>true)) }}
                                    {{ Form::label('hostel_preview_image','Hostel Preview image : ', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                    <div class="fileupload fileupload-new col-sm-6" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail"><img src="{{URL::to('/')}}/../uploads/hostel_hotel_room_preview/{{ $list_hostel_room_preview[0]->hostel_room_preview_image }}"  alt=""/> <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                        <div style="margin-top:10px;">
                                                    <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>

                                                        <input type="file" name="hostel_preview_image">
                                                    </span>
                                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </div>
                                        {{ Form::submit('Add', $attributes = ['class' => 'btn btn-green pull-right']) }}
                                        {{ Form::close() }}


                            @else


                                                No Hostel Preview Image added yet...



                                        {{ Form::open(array('url' => 'admin/save-hostel-room_preview','class' => 'form-horizontal','files' =>true)) }}
                                        {{ Form::label('hostel_preview_image',' ', $attributes = ['class' => 'col-sm-3 control-label']) }}
                                        <div class="fileupload fileupload-new col-sm-6" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                            <div style="margin-top:10px;">
                                                        <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>

                                                            <input type="file" name="hostel_preview_image">
                                                        </span>
                                                <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                            {{ Form::submit('Add', $attributes = ['class' => 'btn btn-green pull-right']) }}
                                            {{ Form::close() }}

                            @endif

                        </div>
                    </div>
                    <!-- end: TABLE WITH IMAGES PANEL -->
                </div>
            </div>
            <!-- end: PAGE CONTENT-->
        </div>

    </div>
    <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
@stop
@extends('admins.head')
@extends('admins.header')
@extends('admins.sidebar')
@extends('admins.footer')

<script>
    jQuery(document).ready(function() {
        Main.init();
        SVExamples.init();
        Index.init();
    });
</script>

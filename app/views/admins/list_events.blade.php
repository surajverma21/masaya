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
                    <a href="{{ URL::to('/') }}/admin/events-activities">
                        <i class="fa fa-plus"></i> Add Events
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
                Events
            </li>
        </ol>
    </div>
</div>
<!-- end: BREADCRUMB -->
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: TABLE WITH IMAGES PANEL -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h4 class="panel-title">Events<span class="text-bold"></span></h4>
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

                <table class="table table-striped table-hover" id="sample-table-2">
                <thead>
                <tr>
                    <th class="center">
                        <div class="checkbox-table">
                            <label>
                                &nbsp;
                            </label>
                        </div></th>
<!--                    <th class="center">Photo</th>-->
                    <th>Title</th>
                    <th class="hidden-xs">Subtitle</th>
                    <th class="hidden-xs">Month</th>
                    <th class="hidden-xs">Hostel</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1;?>
                @foreach ($events as $event)

                    <tr>
                        <td class="center">
                            <div class="checkbox-table">
                                <label>
                                  {{ $count }}
                                    <?php $count++; ?>
                                </label>
                            </div></td>
<!--                        <td class="center"><img src="assets/images/avatar-1.jpg" alt="image"/></td>-->
                        <td>{{ $event->event_title }}</td>
                        <td class="hidden-xs">{{ $event->event_sub_title }}</td>
                        <td class="hidden-xs">
                            <?php
                            $month = array(1 => 'January', 2 => 'Feburary', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December');
                            echo $month[$event->month_id];                            ?>
                            </td>
                        <td class="hidden-xs">{{ $event->hostel_id }}</td>
                        <td class="center">
                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                <a href="edit_event/<?php echo $event->id; ?>" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove" onclick="return delete_event({{$event->id}})"><i class="fa fa-times fa fa-white"></i></a>
                            </div>
                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                <div class="btn-group">
                                    <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </a>
                                    <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div></td>
                    </tr>
                @endforeach
                </tbody>
                </table>
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

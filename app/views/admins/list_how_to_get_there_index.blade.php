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
                        @if(count($how_to_get_there))
                        <h1>{{ $how_to_get_there[0]->hostel->name or ''}}</h1>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->

                        <ul class="nav navbar-right">
                            <!-- start: TO-DO DROPDOWN -->
                            <li class="dropdown">
                                <a href="how-to-get-there-add">
                                    <i class="fa fa-plus"></i> Add New
                                </a>
                            </li>
                        </ul>
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
                            How To Get There
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
                            @if(count($how_to_get_there))
                            <table class="table table-striped table-hover" id="sample-table-2">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <div class="checkbox-table">
                                            <label>
                                                &nbsp;
                                            </label>
                                        </div>
                                    </th>


                                    <th class="hidden-xs">#</th>
                                    <th class="hidden-xs">Text</th>
                                    <th class="hidden-xs">Language</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php $count = 1;?>

                                @foreach ($how_to_get_there as $how_to_get)

                                <tr>

                                    <td>&nbsp;</td>

                                    <td>

                                        <label>
                                            {{$count}}
                                            <?php $count++; ?>
                                        </label>

                                    </td>
                                    <!--                        <td class="center"><img src="assets/images/avatar-1.jpg" alt="image"/></td>-->

                                    <td>{{ $how_to_get->title }} </td>


                                    <td>
                                        {{ $how_to_get->language->name }}
                                    </td>

                                    <td class="center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="edit-how-to-get-there/{{$how_to_get->id}}" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove" onclick="return delete_time_to_touristics({{$how_to_get->id}},{{$how_to_get->hostel_id}})"><i class="fa fa-times fa fa-white"></i></a>
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
                            @else
                            No How to get there...
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

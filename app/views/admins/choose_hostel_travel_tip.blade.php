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
                <!--                <div class="col-sm-6 col-xs-12">-->
                <!--                    <div class="toolbar-tools pull-right">-->
                <!--                        <!-- start: TOP NAVIGATION MENU -->-->
                <!--                        <ul class="nav navbar-right">-->
                <!--                            <!-- start: TO-DO DROPDOWN -->-->
                <!--                            <li class="dropdown">-->
                <!--                                <a href="{{ URL::to('/') }}/admin/add_hostel">-->
                <!--                                    <i class="fa fa-plus"></i> Add Hostel-->
                <!--                                </a>-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                        <!-- end: TOP NAVIGATION MENU -->-->
                <!--                    </div>-->
                <!--                </div>-->
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
                            Hostels
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

                            @if(count($hostels))

                                    <h3>Choose hostel and click Next...</h3> </br></br>
                                    {{ Form::open(array('url' => 'admin/travel-tips-index','class' => 'form-horizontal','files' =>true)) }}
                                    @foreach($hostels as $hostel)
                                    {{Form::radio('hostel',$hostel->id)}} {{$hostel->name}}
                                    <br/>
                                    @endforeach

                            {{ Form::submit('Next', $attributes = ['class' => 'btn btn-green pull-right']) }}
                            @else

                            No Hostels are available...
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


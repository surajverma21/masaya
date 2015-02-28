@section('head')
<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->

<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>Rapido - Responsive Admin Template</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
<<<<<<< HEAD
    {{ HTML::script('../assets/plugins/jQuery/jquery-2.1.1.min.js') }}
=======

    <!-- start: MAIN JS -->
    {{ HTML::script('../assets/plugins/jQuery/jquery-2.1.1.min.js') }}
    <!-- end: MAIN JS -->


>>>>>>> 0f25a427de2aa0e3785b2464edd8b48baf2c21e1
    <!-- start: MAIN CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>

    {{ HTML::style('../assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('../assets/plugins/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('../assets/plugins/iCheck/skins/all.css') }}
    {{ HTML::style('../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') }}
    {{ HTML::style('../assets/plugins/animate.css/animate.min.css') }}
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
    {{ HTML::style('../assets/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}
    {{ HTML::style('../assets/plugins/owl-carousel/owl-carousel/owl.theme.css') }}
    {{ HTML::style('../assets/plugins/owl-carousel/owl-carousel/owl.transitions.css') }}
    {{ HTML::style('../assets/plugins/summernote/dist/summernote.css') }}
    {{ HTML::style('../assets/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}
    {{ HTML::style('../assets/plugins/toastr/toastr.min.css') }}
    {{ HTML::style('../assets/plugins/bootstrap-select/bootstrap-select.min.css') }}
    {{ HTML::style('../assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') }}
    {{ HTML::style('../assets/plugins/DataTables/media/css/DT_bootstrap.css') }}
    {{ HTML::style('../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}
    {{ HTML::style('../assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}
    <!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    {{ HTML::style('../assets/plugins/weather-icons/css/weather-icons.min.css') }}
    {{ HTML::style('../assets/plugins/nvd3/nv.d3.min.css') }}'
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CORE CSS -->
    {{ HTML::style('../assets/css/styles.css') }}
    {{ HTML::style('../assets/css/styles-responsive.css') }}
    {{ HTML::style('../assets/css/plugins.css') }}
    {{ HTML::style("../assets/css/themes/theme-default.css", array("id"=>"skin_color")) }}
    {{ HTML::style("../assets/css/print.css" ,array("media" => "print")) }}
    {{HTML::script('../assets/js/common.js') }}

    <!-- end: CORE CSS -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
@stop
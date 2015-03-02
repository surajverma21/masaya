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
    <!-- start: MAIN CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>

    {{ HTML::style('../assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('../assets/plugins/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('../assets/plugins/plugins/iCheck/skins/all.css') }}
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
    {{ HTML::style('../assets/plugins/animate.css/animate.min.css') }}
    {{ HTML::style('../assets/plugins/animate.css/animate.min.css') }}

    <!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    {{ HTML::style('../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}
    {{ HTML::style('../assets/plugins/select2/select2.css') }}
    {{ HTML::style('../assets/plugins/datepicker/css/datepicker.css') }}
    {{ HTML::style('../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}
    {{ HTML::style('../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}
    {{ HTML::style('../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') }}
    {{ HTML::style('../assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css') }}
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CORE CSS -->
    {{ HTML::style('../assets/css/styles.css') }}
    {{ HTML::style('../assets/css/styles-responsive.css') }}
    {{ HTML::style('../assets/css/plugin.css') }}
    {{ HTML::style('../assets/css/themes/theme-default.css',array('id'=>'skin_color')) }}
    {{ HTML::style('../assets/css/print.css',array("media" => "print")) }}

    <!-- end: CORE CSS -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body>
<!-- start: SLIDING BAR (SB) -->

<!-- end: SLIDING BAR -->
<div class="main-wrapper">

    <!-- end: PAGESLIDE RIGHT -->
    <!-- start: MAIN CONTAINER -->
    <div class="main-container inner">
        <!-- start: PAGE -->
        <div class="main-content">

            <!-- end: SPANEL CONFIGURATION MODAL FORM -->
            <div class="container">

                <!-- Start row  -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- start: DATE/TIME PICKER PANEL -->
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <h4 class="panel-title">Date/Time <span class="text-bold">Picker</span></h4>

                            </div>
                            <div class="panel-body">
                                <p>
                                    Date Picker
                                </p>
                                <div class="input-group">
                                    <input type="text" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker">
                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                </div>
                                <hr>
                                <p>
                                    Time Picker
                                </p>
                                <div class="input-group input-append bootstrap-timepicker">
                                    <input type="text" class="form-control time-picker">
                                    <span class="input-group-addon add-on"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <hr>
                                <p>
                                    Date Range Picker
                                </p>
                                <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                    <input type="text" class="form-control date-range">
                                </div>
                                <hr>
                                <p>
                                    Date + Time Range Picker
                                </p>
                                <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                    <input type="text" class="form-control date-time-range">
                                </div>
                            </div>
                        </div>
                        <!-- end: DATE/TIME PICKER PANEL -->
                    </div>
                </div>

                <!-- End row  -->
            </div>

        </div>
        <!-- end: PAGE -->
    </div>


    <!-- *** READ NOTE *** -->
    <div id="readNote">
        <div class="barTopSubview">
            <a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
        </div>
        <div class="noteWrap col-md-8 col-md-offset-2">
            <div class="panel panel-note">
                <div class="e-slider owl-carousel owl-theme">
                    <div class="item">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** SHOW CALENDAR *** -->


    <!-- end: SUBVIEW SAMPLE CONTENTS -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
{{ HTML::script('../assets/plugins/respond.min.js') }}
{{ HTML::script('../assets/plugins/excanvas.min.js') }}
{{ HTML::script('../assets/plugins/jQuery/jquery-1.11.1.min.js') }}
<![endif]-->
<!--[if gte IE 9]><!-->
{{ HTML::script('../assets/plugins/jQuery/jquery-2.1.1.min.js') }}
<!--<![endif]-->
{{ HTML::script('../assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('../assets/plugins/blockUI/jquery.blockUI.js') }}
{{ HTML::script('../assets/plugins/iCheck/jquery.icheck.min.js') }}
{{ HTML::script('../assets/plugins/moment/min/moment.min.js') }}
{{ HTML::script('../assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}
{{ HTML::script('../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}
{{ HTML::script('../assets/plugins/bootbox/bootbox.min.js') }}
{{ HTML::script('../assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js') }}
{{ HTML::script('../assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js') }}
{{ HTML::script('../assets/plugins/jquery.appear/jquery.appear.js') }}
{{ HTML::script('../assets/plugins/jquery-cookie/jquery.cookie.js') }}
{{ HTML::script('../assets/plugins/velocity/jquery.velocity.min.js') }}
{{ HTML::script('../assets/plugins/TouchSwipe/jquery.touchSwipe.min.js') }}

<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
{{ HTML::script('../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}
{{ HTML::script('../assets/plugins/jquery-mockjax/jquery.mockjax.js') }}
{{ HTML::script('../assets/plugins/toastr/toastr.js') }}
{{ HTML::script('../assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}
{{ HTML::script('../assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}
{{ HTML::script('../assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-select/bootstrap-select.min.js') }}
{{ HTML::script('../assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}
{{ HTML::script('../assets/plugins/DataTables/media/js/jquery.dataTables.min.js') }}
{{ HTML::script('../assets/plugins/DataTables/media/js/DT_bootstrap.js') }}
{{ HTML::script('../assets/plugins/truncate/jquery.truncate.js') }}
{{ HTML::script('../assets/plugins/summernote/dist/summernote.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}
{{ HTML::script('../assets/js/subview.js') }}
{{ HTML::script('../assets/js/subview-examples.js') }}

<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
{{ HTML::script('../assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}
{{ HTML::script('../assets/plugins/autosize/jquery.autosize.min.js') }}
{{ HTML::script('../assets/plugins/select2/select2.min.js') }}
{{ HTML::script('../assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}
{{ HTML::script('../assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}
{{ HTML::script('../assets/plugins/jquery-maskmoney/jquery.maskMoney.js') }}
{{ HTML::script('../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
{{ HTML::script('../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}
{{ HTML::script('../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}
{{ HTML::script('../assets/plugins/bootstrap-colorpicker/js/commits.js') }}
{{ HTML::script('../assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}
{{ HTML::script('../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}
{{ HTML::script('../assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}
{{ HTML::script('../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}
{{ HTML::script('../assets/plugins/ckeditor/ckeditor.js') }}
{{ HTML::script('../assets/plugins/ckeditor/adapters/jquery.js') }}
{{ HTML::script('../assets/js/form-elements.js') }}
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE JAVASCRIPTS  -->
{{ HTML::script('../assets/js/main.js') }}
<!-- end: CORE JAVASCRIPTS  -->
<script>
    jQuery(document).ready(function() {
        Main.init();
        SVExamples.init();
        FormElements.init();
    });
</script>
</body>
<!-- end: BODY -->
</html>
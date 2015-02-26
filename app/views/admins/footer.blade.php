@section('footer')
<!-- start: FOOTER -->
<footer class="inner">
    <div class="footer-inner">
        <div class="pull-left">
            2015 &copy; Masaya.
        </div>
        <div class="pull-right">
            <span class="go-top"><i class="fa fa-chevron-up"></i></span>
        </div>
    </div>
</footer>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
{{ HTML::script('assets/plugins/respond.min.js') }}
{{ HTML::script('assets/plugins/excanvas.min.js') }}
<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js') }}
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
{{ HTML::script('../assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js') }}
{{ HTML::script('../assets/plugins/nvd3/lib/d3.v3.js') }}
{{ HTML::script('../assets/plugins/nvd3/nv.d3.min.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/historicalBar.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/historicalBarChart.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/stackedArea.js') }}
{{ HTML::script('../assets/plugins/nvd3/src/models/stackedAreaChart.js') }}
{{ HTML::script('../assets/plugins/jquery.sparkline/jquery.sparkline.js') }}
{{ HTML::script('../assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js') }}
{{ HTML::script('../assets/js/index.js') }}
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE JAVASCRIPTS  -->
{{ HTML::script('../assets/js/main.js') }}
<!-- end: CORE JAVASCRIPTS  -->

</body>
<!-- end: BODY -->
</html>
@stop
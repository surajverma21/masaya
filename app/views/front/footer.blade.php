@section('footer')
<!-- Footer start here -->
<footer>
    <div class="container">
        <div class="row"><div class="col-md-12"><h5>{{ trans('greet.Follow us on social networks') }}</h5></div></div>
        <div class="row"><div class="col-md-12">
                <a class="socail_icons" href="#"><img src="../assets/front/images/facebook_footer.png" alt="" /> <p class="hidden_mobile">{{ trans('greet.Like Us') }}</p></a>
                <a class="socail_icons" href="#"><img src="../assets/front/images/you_tube_footer.png" alt="" /><p class="hidden_mobile">{{ trans('greet.Discover') }}</p></a>
                <a class="socail_icons" href="#"><img src="../assets/front/images/twitter_footer.png" alt="" /><p class="hidden_mobile">{{ trans('greet.Follow Us') }}</p></a>
                <a class="socail_icons" href="#"><img src="../assets/front/images/instagram_footer.png" alt="" /><p class="hidden_mobile">{{ trans('greet.Share') }}</p></a>
            </div></div>
        <div class="row">
            <div class="col-md-12 footer_services">
                <ul>
                    <h5>MASAYA ?</h5>
                    <li><a href="#">{{ trans('greet.Experience_Masaya') }}</a></li>
                    <li><a href="#">{{ trans('greet.Loyalty program') }}</a></li>
                    <li><a href="#">{{ trans('greet.Press') }}</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <ul>
                    <h5>{{ trans("greet.TRAVELLER'S GUIDE") }}</h5>
                    <li><a href="#">Tips & Travels</a></li>
                    <li><a href="#">{{ trans('greet.Preparing your trip') }}</a></li>
                    <li><a href="#">{{ trans('greet.Discoverr') }} Bogota</a></li>
                    <li><a href="#">{{ trans('greet.Discoverr') }} Santa Marta</a></li>
                    <li><a href="#">{{ trans('greet.Excursions in Colombia') }}</a></li>
                </ul>
                <ul class="last_ul">
                    <h5>{{ trans('greet.YOUR TRAVEL') }}</h5>
                    <li><a href="#">{{ trans('greet.Traveler Stories') }}</a></li>
                    <li><a href="#">{{ trans('greet.Pictures galleries') }}</a></li>
                </ul>

                <div class="certification pull-right">
                    <img src="../assets/front/images/footer_img1.png" alt="" />
                    <img src="../assets/front/images/footer_img2.png" alt="" />
                </div>

            </div>
        </div>

        <div class="copy_rightcon text-center">
            <p>&copy; Masaya 2015, {{ trans('greet.All rights reserved') }}</p>
            <p>{{ trans('greet.Imprint') }}</p>
            <p>{{ trans('greet.Privacy Policy') }}</p>
        </div>

    </div>
</footer>
<!-- Footer start here -->
 <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
{{ HTML::script('../assets/front/js/bootstrap.min.js') }}
{{ HTML::script('../assets/front/js/bootstrap-select.js') }}
{{ HTML::script('../assets/front/js/jquery.selectbox-0.2.js') }}
{{ HTML::script('../assets/front/js/jquery.hashchange.min.js') }}
{{ HTML::script('../assets/front/js/jquery.easytabs.js') }}

<script type="text/javascript">
    $('#tab-bottom-container').easytabs({
        animate: true,
        animationSpeed: 200,
        collapsible: true,
        transitionInEasing: 'swing'
    });
</script>








<!-- Accordion -->
<script>
$( "#accordion" ).accordion();
</script><strong></strong>
<!-- Accordion -->
</body>
</html>

@stop
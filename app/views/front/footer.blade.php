@section('footer')
<!-- Footer start here -->
<header class="main_h_footer" style="display:none;">
    <div class="container">
       
        <div class="pull-right reserver_con_footer" ><a href="javascript:void(0)">{{ trans('greet.Book Now') }}</a></div>
    </div>
    <div class="reserver_top_form" style="display:none;" >
        <div class="container">
            <h3>Reserves votes a masaya Santa Marta</h3>
            <form>
                <div class="row margin_none">
                    <div class="col-md-3 col-sm-3 col-xs-12 padding_none">
                        <div class="select_1">
                            <select class="custom-select">
                                <option>Date d’arrivée</option><option>Date</option><option>d'arrivee</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 padding_none">
                        <div class="select_1">
                            <select class="custom-select">
                                <option>Date d’arrivée</option><option>Date</option><option>d'arrivee</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 padding_none">
                        <div class="select_1">
                            <select class="custom-select">
                                <option>Date d’arrivée</option><option>Date</option><option>d'arrivee</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 padding_none">
                        <button value="rechercher" class="btn btn-reserver">Rechercher</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>

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
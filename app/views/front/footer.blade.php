@section('footer')
<!-- Footer start here -->
<footer>
    <div class="container">
        <div class="row"><div class="col-md-12"><h5>Suivez nous sur les reseaux sociaux</h5></div></div>
        <div class="row"><div class="col-md-12">
                <a class="socail_icons" href="#"><img src="../assets/front/images/facebook_footer.png" alt="" /> <p class="hidden_mobile">Aimez-nous</p></a>
                <a class="socail_icons" href="#"><img src="../assets/front/images/you_tube_footer.png" alt="" /><p class="hidden_mobile">Découvrez</p></a>
                <a class="socail_icons" href="#"><img src="../assets/front/images/twitter_footer.png" alt="" /><p class="hidden_mobile">Suivez-nous</p></a>
                <a class="socail_icons" href="#"><img src="../assets/front/images/instagram_footer.png" alt="" /><p class="hidden_mobile">Partagez</p></a>
            </div></div>
        <div class="row">
            <div class="col-md-12 footer_services">
                <ul>
                    <h5>MASAYA ?</h5>
                    <li><a href="#">L’expérience Masaya</a></li>
                    <li><a href="#">Programme fidélité</a></li>
                    <li><a href="#">Espace Presse</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <ul>
                    <h5>GUIDE DU VOYAGEUR</h5>
                    <li><a href="#">Tips & Travels</a></li>
                    <li><a href="#">Bien préparer son voyage</a></li>
                    <li><a href="#">Découvrir Bogota</a></li>
                    <li><a href="#">Découvrir Santa Marta</a></li>
                    <li><a href="#">Excursions en Colombie</a></li>
                </ul>
                <ul class="last_ul">
                    <h5>VOS VOYAGES</h5>
                    <li><a href="#">Récits de voyageur</a></li>
                    <li><a href="#">Vos galeries photos</a></li>
                </ul>

                <div class="certification pull-right">
                    <img src="../assets/front/images/footer_img1.png" alt="" />
                    <img src="../assets/front/images/footer_img2.png" alt="" />
                </div>

            </div>
        </div>

        <div class="copy_rightcon text-center">
            <p>&copy; Masaya 2015, Tous droits réservés</p>
            <p>Mentions légales</p>
            <p>Politique de confidentialité</p>
        </div>

    </div>
</footer>
<!-- Footer start here -->

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
</body>
</html>

@stop
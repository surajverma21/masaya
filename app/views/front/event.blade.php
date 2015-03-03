@extends('master')

@section('content')

    <script type="text/javascript">

        $(document).ready( function() {
            $('#myCarousel').carousel({
                interval:   400000,
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function() {

                var value = $(this).attr('rel');
                $.ajax(
                {
                    url: "http://localhost/lara/masaya/public/getactivities",
                    data:{month:value},
                    'action'    : 'POST',
                    success: function(data) {
                        //alert(data);
                        $('#getcontentactivity').html(data);
                    },
                    error: function() {

                    }
                });


                clickEvent = true;
                $('.nav div').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if(!clickEvent) {
                    var count = $('.nav').children().length -1;
                    var current = $('.nav div.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if(count == id) {
                        $('.nav div').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
</script>

<!-- inner yellow section -->
<div class="main_yellow_inner">
    <div class="container">

        <!-- responsive drop down -->
        <div class="rev_drop_catgory mobile_visible">
            <!-- Custom select box -->
            <select class="selectpicker">
                <option value="1">Hébergement à Santa Marta</option>
                <option value="2">Événements &amp; activités culturelles</option>
                <option value="3">Équipements &amp; services</option>
                <option value="4">Excursions &amp; voyages</option>
                <option value="3">Comment s’y rendre</option>
            </select>
            <!-- Custom select box -->
        </div>
        <!-- responsive drop down -->

        <!-- Top links start here -->
        <ul class="y_inner-topul text-center mobile_hidden">
            <li><a href="#">Hébergement <br> à Santa Marta</a></li>
            <li><a class="active" href="#">Événements &amp; <br> activités culturelles</a></li>
            <li><a href="#">Équipements <br> &amp; services</a></li>
            <li><a href="#">Excursions &amp; <br> voyages</a></li>
            <li><a href="#">Comment <br> s’y rendre</a></li>
        </ul>
        <!-- Top links start here -->

        <!-- Top content -->
        <div class="row inner-y_conternt1">
            <div class="col-md-12"><h1 class="title_yellow">Évènements &amp; Activités culturelles</h1></div>
            <div class="col-md-9 col-sm-12">
                <em>Plus qu’un simple hostel, Masaya se veut être un lieu de culture, de rencontres et d’échanges interculturels.
                    A Santa Marta, découvrez la gastronomie « costeña » : le riz coco, la banane plantain sous toutes ses coutures…  les sons et rythmes aux influences africaines ; les danses locales et colombiennes… De nombreux artistes vous proposent chaque semaine de découvrir leur culture, leurs origines…<br><br>

                    Notre but est de vous faire connaître le pays dans ce qu'il a de meilleur, c’est pour cela que nous vous proposons un guide culturel regroupant les activités phare de Santa Marta et de la région Magdalena. Consultez notre calendrier et faites place à la culture lors de votre voyage… </em>
                <div class="row">
                    <div class="col-md-12 span10 mobile_center">
                        <a href="#" class="btn btn-default" >Evénements autour de Santa Marta</a>
                        <a href="#" class="btn btn-default" >L’agenda culturel de Masaya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 pull-right hidden-tablet">
                <div class="les_jours">TOUS LES JOURS DES ACTIVITÉS <span> 100% GRATUITES </span> </div>
            </div>
        </div>
        <!-- Top content -->

    </div>
</div>
<!-- inner yellow section -->

<!-- activity_2 banner section -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div class="carousel-inner">
<?php
if(isset($events)){
$i = 0; ?>
@foreach($events as $event)
<div class="act2_banner_wrapper item  <?php if($i==2){echo 'active';}?>">

    <div class="act2_content" >
        <h6>{{$event->event_title}}</h6>
        <h3>{{$event->event_sub_title}}</h3>
        <p> {{$event->event_text}}</p>

    </div>

    <img class="imgfull-width" src="../uploads/events/{{$event->event_image}}" alt="" />
</div>
    <?php $i++; ?>
@endforeach
    <?php } ?>
</div>

<!-- activity_2 banner section -->

<!-- section activities -->
<div class="sect_act2 hidden_mobile">
<div class="container">
<div class="exe_month_2con">
            <div class="row nav nav-pills nav-justified">
                <div class="col-md-1 col-sm-1 text-center active" data-target="#myCarousel" data-slide-to="0"><a href="#" rel="3">Mars</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="1"><a href="#" rel="4">Avril</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="2"><a href="#" rel="5">Mai</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="3"><a href="#" rel="6">Juin</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="4"><a href="#" rel="7">Juillet</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="5"><a href="#" rel="8">Août</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="6"><a href="#" rel="9">Septembre</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="7"><a href="#" rel="10">Octobre</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="8"><a href="#" rel="11">Novembre</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="9"><a href="#" rel="12">Décembre</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="10"><a href="#" rel="1">Janvier</a></div>
                <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="11"><a href="#" rel="2">Février</a></div>
            </div>
</div>
</div>
</div>

</div>
<!-- section activities -->

<!-- activities -->


<div id="getcontentactivity">
    <?php
if($monthly_activity != '')
{
    echo $monthly_activity;
}
?>
</div>


<!-- activities -->


<!-- activity cultural -->
<div class="activity_cultural_wrapper">
    <div class="container">
        <div class="heading_top text-center">
            <h1>Nos activités culturelles</h1>
            <h2>Notre programmation culturelle</h2>
            <p>Tous les jours sur notre terrasse, des activités culturelles gratuites et garanties 100% caraïbes !</p>
        </div>

        <!-- acts wrapper for dekstop -->
        <div class="act_wrapper tablet-hide">
            <ul class="act_head text-center">
                <li class="table_title">&nbsp;</li>
                <li class="table_title">Lundi</li>
                <li class="table_title">Mardi</li>
                <li class="table_title">Mercredi</li>
                <li class="table_title">Jeudi</li>
                <li class="table_title">Vendredi</li>
                <li class="table_title">Samedi</li>
                <li class="table_title">Dimanche</li>
            </ul>



            <?php
            $check_array = array();
            foreach($activities as $activitydata)
            {

                $check_array[$activitydata->start_time][$activitydata->day] = $activitydata->name;

            }

            ?>


            <?php foreach($check_array as $key => $val) {

                $Get_time = explode(' ',$key);
                $hours = $Get_time[1];
                $time = $Get_time[2];
                $time_in_24_hour_format  = date("H", strtotime($hours.' '.$time));

                ?>

                <ul class="act_content_sec text-center">
                    <li><span class="date_section"><?php echo @$time_in_24_hour_format.'H'; ?></span></li>
                    <li>
                        <div class="inne_space <?php if(@$val['1']) { echo 'table_sec-yellow'; } ?>">
                            <span><?php if(@$val['1']) { echo $val['1']; } ?></span>
                        </div>
                    </li>
                    <li><div class="inne_space <?php if(@$val['2']) { echo 'table_sec-yellow'; } ?>"><span><?php if(@$val['2']) { echo $val['2']; } ?></span></div></li>
                    <li><div class="inne_space <?php if(@$val['3']) { echo 'table_sec-yellow'; } ?>"><span><?php if(@$val['3']) { echo $val['3']; } ?></span></div></li>
                    <li><div class="inne_space <?php if(@$val['4']) { echo 'table_sec-yellow'; } ?>"><span><?php if(@$val['4']) { echo $val['4']; } ?></span></div></li>
                    <li><div class="inne_space <?php if(@$val['5']) { echo 'table_sec-yellow'; } ?>"><span><?php if(@$val['5']) { echo $val['5']; } ?></span></div></li>
                    <li><div class="inne_space <?php if(@$val['6']) { echo 'table_sec-yellow'; } ?>"><span><?php if(@$val['6']) { echo $val['6']; } ?></span></div></li>
                    <li><div class="inne_space <?php if(@$val['7']) { echo 'table_sec-yellow'; } ?>"><span><?php if(@$val['7']) { echo $val['7']; } ?></span></div></li>
                </ul>


            <?php } ?>


        </div>
        <!-- acts wrapper -->

        <!-- acts wrapper for tablet -->
        <div class="act_wrapper tablet-visible hidden_desktop hidden_mobile">
            <ul class="act_head text-center">
                <li class="tablet_head">&nbsp;</li>
                <li class="tablet_head"><span class="date_section">17h</span></li>
                <li class="tablet_head"><span class="date_section">18h</span></li>
                <li class="tablet_head"><span class="date_section">19h</span></li>
                <li class="tablet_head"><span class="date_section">20h</span></li>
            </ul>
            <ul class="act_content_sec text-center">
                <li class="table_title">Lundi</li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-default"><span>Clase de Costenol</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>


                <div class="tablet_slider_con text-left">
                    <div class="row margin_none">
                        <div class="col-sm-6 padding_none"><img class="imgfull-width" alt="" src="../assets/front/images/act_slide_img.png"></div>
                        <div class="col-sm-6">
                            <div class="slide_main_con">
                                <h1>Juegos criollos</h1>
                                <p>Pellentesque eget ipsum sit amet est pharetra dapibus nec dapibus lorem. Phasellus venenatis mi eget nisl fringilla condimentum. Etiam non tellus nisl. Cras vehicula, justo non pulvinar semper, ex eros sagittis ex, ac vestibulum odio odio sed risus. Pellentesque ipsum nisi, pulvinar ac rhoncus eget, tempus tempor mi.</p>
                                <em>Tous les lundi à 21h</em>
                            </div>
                        </div>
                    </div>
                </div>


            </ul>

            <ul class="act_content_sec text-center">
                <li class="table_title">Mardi</li>
                <li><div class="inne_space table_sec-yellow"><span>Clase de Cocina</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Al Aire (Microfono Abierto)</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Campeonato de Rana</span></div></li>
            </ul>
            <ul class="act_content_sec text-center">
                <li class="table_title">Mercredi</li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
            </ul>
            <ul class="act_content_sec text-center">
                <li class="table_title">Jeudi</li>
                <li><div class="inne_space table_sec-yellow"><span>Clase de Cocteleria</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
            </ul>
            <ul class="act_content_sec text-center">
                <li class="table_title">Vendredi</li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
            </ul>
            <ul class="act_content_sec text-center">
                <li class="table_title">Samedi</li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Clase de Salsa</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
            </ul>
            <ul class="act_content_sec text-center">
                <li class="table_title">Dimanche</li>
                <li><div class="inne_space table_sec-yellow"><span>Clase de Cocteleria</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
                <li><div class="inne_space table_sec-yellow"><span>Clase de Salsa</span></div></li>
                <li><div class="inne_space"><span>&nbsp;</span></div></li>
            </ul>
        </div>
        <div class="slide_act_cul tablet_button_con hidden_mobile">
            <button class="exe_button">Découvrir toutes les activités de la semaine</button>
        </div>
        <!-- acts wrapper for tablet -->


        <!-- acts wrapper for mobile -->
        <div class="act_cul_mobile">
            <ul>
                <li><a href="#">Lundi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>

                    <div class="row margin_none">
                        <div class="col-xs-12 padding_none">
                            <div class="slide_main_con">
                                <h1>Juegos criollos</h1>
                                <p>Pellentesque eget ipsum sit amet est pharetra dapibus nec dapibus lorem. Phasellus venenatis mi eget nisl fringilla condimentum. Etiam non tellus nisl. Cras vehicula, justo non pulvinar semper, ex eros sagittis ex, ac vestibulum odio odio sed risus. Pellentesque ipsum nisi, pulvinar ac rhoncus eget, tempus tempor mi.</p>
                                <em>Tous les lundi à 21h</em>
                            </div>
                        </div>
                        <div class="col-xs-12 padding_none">
                            <img class="imgfull-width" alt="" src="../assets/front/images/act_slide_img.png">
                        </div>
                        <div class="col-xs-12 padding_none">
                            <div class="slide_main_con">
                                <h1>Juegos criollos</h1>
                                <p>Pellentesque eget ipsum sit amet est pharetra dapibus nec dapibus lorem. Phasellus venenatis mi eget nisl fringilla condimentum. Etiam non tellus nisl. Cras vehicula, justo non pulvinar semper, ex eros sagittis ex, ac vestibulum odio odio sed risus. Pellentesque ipsum nisi, pulvinar ac rhoncus eget, tempus tempor mi.</p>
                                <em>Tous les lundi à 21h</em>
                            </div>
                        </div>
                    </div>

                </li>
                <li><a href="#">Mardi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a></li>
                <li><a href="#">Mercredi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a></li>
                <li><a href="#">Jeudi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a></li>
                <li><a href="#">Vendredi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a></li>
                <li><a href="#">Samedi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a></li>
                <li><a href="#">Dimanche <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a></li>
            </ul>
        </div>
        <!-- acts wrapper for mobile -->


    </div>
</div>
<!-- activity cultural -->

<!-- activity_cul slider -->
<div class="activity_slide tablet-hide">
    <div class="container">
        <!-- Desktop -->
        <div class="act_slide_inner">
            <a class="slide_arrow_right" href="#"><img src="../assets/front/images/act_banner_Arrow_rgt.png" alt="" /></a>
            <a class="slide_arrow_left" href="#"><img src="../assets/front/images/act_banner_Arrow.png" alt="" /></a>
            <div class="row margin_none">
                <div class="col-md-12 col-md-offset-1-padd">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="imgfull-width" src="../assets/front/images/act_slide_img.png" alt="" />
                        </div>
                        <div class="col-md-6">
                            <div class="slide_main_con">
                                <h1>Juegos criollos</h1>
                                <p>Pellentesque eget ipsum sit amet est pharetra dapibus nec dapibus lorem. Phasellus venenatis mi eget nisl fringilla condimentum. Etiam non tellus nisl. Cras vehicula, justo non pulvinar semper, ex eros sagittis ex, ac vestibulum odio odio sed risus. Pellentesque ipsum nisi, pulvinar ac rhoncus eget, tempus tempor mi.</p>
                                <em>Tous les lundi à 21h</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Desktop -->

        <div class="slide_act_cul">
            <button class="exe_button">Découvrir toutes les activités de la semaine</button>
        </div>

    </div>
</div>
<!-- activity_cul slider -->


<!-- Exe activity main con -->
<div class="exe_main_wrapper">
    <!-- exe social -->
    <div class="masaya_social">
        <div class="container">
            <div class="exe_socail">
                <div class="row margin_none" >
                    <div class="col-md-3 col-sm-3">
                        <div class="social_imgcon">
                            <h3>Retrouvez-nous sur</h3>
                            <img src="../assets/front/images/exe_facebook.png" alt="" />
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-7">
                        <h4>Masaya Hostel Santa Marta <br > pour suivre nos activités et la vie de l’hostel</h4>
                    </div>
                    <div class="col-md-2 col-sm-2 padding_none">
                        <div class="social_likes text-center">
                            <img src="../assets/front/images/facebook_likes.png" alt="" />
                            <h2>2 209</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- exe social -->

    <!-- musician section -->
    <div class="musicions_wrapper">
        <div class="container">
            <div class="musicions_inner-con">
                <h1>Artistes, musiciens...</h1>
                <h2>Vos talents nous intéressent !</h2>
                <p>Chez Masaya, nous soutenons quotidiennement la promotion d’artistes locaux et internationaux et créons ainsi un lieu d’échanges et de rencontres hors du commun, extra - ordinaire. <br><br>

                    <strong>Si quelques nuits contre une de vos performances vous intéressent contactez-nous !</strong> </p>
                <a class="btn btn-default btn-yellow" href="#">Contactez-nous !</a>
            </div>
        </div>
    </div>
    <!-- musician section -->


    <!-- tour section -->
    <div class="tour_section">
        <div class="container">
            <div class="tour_wrapper text-center">
                <div class="row">
                    <div class="col-md-6 col-sm-6 padding_none">
                        <div class="tour_1con">
                            <img alt="" src="../assets/front/images/exe_santa_marta.png" class="imgfull-width">
                            <div class="tour_content_top text-center les les_space">
                                <h1>SANTA MARTA</h1>
                                <h2>SUIVEZ LE GUIDE</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 padding_none">
                        <div class="tour_1con">
                            <img alt="" src="../assets/front/images/exe_masaya.png" class="imgfull-width">
                            <div class="tour_content_top text-center les_space">
                                <h1>MASAYA TRAVEL</h1>
                                <h2>EXCURSIONS AU DÉPART DE SANTA MARTA</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- social container -->
            <div class="social_container text-center">
                <div class="row exe_1_bg1">

                    <!-- col2 start -->
                    <div class="col-lg-2 col-md-3 col-sm-6 padding_none">
                        <div class="instagram">
                            <img src="../assets/front/images/instagram.png" alt="" />
                            <h5>Envoyez-nous un selfie ! Partagez les photos de votre voyage et découvrez les expériences Masaya de vos prédécesseurs
                                <span>@masayahostels</span>
                                <span>#masayahostel</span>
                            </h5>
                            <a href="#" class="btn btn-default btn-yellow span-top20">Toutes vos photos</a>
                        </div>
                    </div>
                    <!-- col2 end -->

                    <!-- col8 start -->
                    <div class="col-lg-10 col-md-9 col-sm-6 padding_none">
                        <div class="socail_../assets/front/images">
                            <div class="row margin_none">
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_17.png" alt="" /></div>
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_18.png" alt="" /></div>
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_19.png" alt="" /></div>
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_23.png" alt="" /></div>
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_21.png" alt="" /></div>
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_22.png" alt="" /></div>
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_20.png" alt="" /></div>
                                <div class="col-md-3 col-sm-6 col-xs-6 padding_none"><img class="imgfull-width" src="../assets/front/images/img2_small_24.png" alt="" /></div>
                            </div>
                        </div>
                    </div>
                    <!-- col8 end -->

                </div>
            </div>
            <!-- social container -->
        </div>
    </div>
    <!-- tour section -->

    <!-- exe advisor -->
    <div class="exe_advisor_main">
        <div class="container">


            <div class="tour_wrapper text-center">
                <div class="row exe_1_bg1">
                    <div class="col-md-6 col-sm-6 padding_none">
                        <div class="tour_1con">
                            <img alt="" src="../assets/front/images/exe_main2.png" class="imgfull-width">
                            <div class="tour_content_top text-center les les_space">
                                <h1>SANTA MARTA</h1>
                                <h2>SUIVEZ LE GUIDE</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 padding_none">
                        <div class="exe_inner_container">
                            <div class="trip_advisor-inner">
                                <img src="../assets/front/images/trip_advisor.png">
                                <em>“Nice hostel on a good location”</em>
                                <em>“Well located, clean and friendly”</em>
                                <em>“the best hostel in la Candelaria”</em>
                            </div>
                            <div class="exe_votes text-center">
                                <img alt="" src="../assets/front/images/bagota_icon.png" class="vote_img">
                                <h2>86%</h2>
                                <h2>251</h2>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- exe advisor -->


</div>
<!-- Exe activity main con -->

<!-- contact cities -->
<div class="contant_cities_top text-center" id="tab-bottom-container">
<div class="panel-container">
<div id="bottom-tab1">
    <!-- #foo1 Bogota section start -->
    <div class="foo1_content">
        <!-- footer head -->
        <div class="footer_head">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-2">
                        <a class="footer_logo" href="#"><img src="../assets/front/images/footer_logo.png" alt="" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-9">
                        <h1>Masaya Bogota</h1>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden_mobile">
                        <h3>Calle 14 # 04-80 Centro historico,<br> Santa Marta, Colombia</h3>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden_mobile">
                        <h3>Tel : +57 (5) 423 1770   +57 311 533 8348 <br>
                            E-mail : santamarta@masaya-experience.com
                        </h3>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                        <a class="fo_close" href="#"><img src="../assets/front/images/footer_close.png" alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- footer head -->

        <!-- footer map detail -->
        <div class="footer_mapcontent_wrapper">
            <div class="container">
                <div class="foo_map_wrapper">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="foo_google-map">
                                <img class="imgfull-width rev_map" src="../assets/front/images/foo_map.png" alt="" />
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="foo_map_content">
                                <p><em>L’hostel est situé en plein cœur du centre historique de la <br> ville de Santa Marta. <br>
                                        A moins de 500 mètres de la Cathédrale et de la baie. <br ><br>

                                        Profitez et oubliez les taxis et autobus lors de votre séjour à Santa Marta.</em></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Foo list left -->
                <div class="foo-listing_wrapper">
                    <div class="row">
                        <div class="col-md-4  col-sm-5">
                            <div class="foo_left_side">
                                <h3 class="foo_list_title">Temps à pied <br>des différents points d’intérêt</h3>
                                <ul class="detail_listing2">
                                    <li>
                                        <p>Boire un café Juan Valdez</p>
                                        <div class="list_month-detail text-center">2mn</div>
                                    </li>
                                    <li>
                                        <p>Visiter la Cathédrale</p>
                                        <p>Voir la plage</p>
                                        <p>Faire quelques courses</p>
                                        <div class="list_month-detail text-center">3mn</div>
                                    </li>
                                    <li>
                                        <p>Aller au Musée de l’Or</p>
                                        <p>Se faire une terrasse au Parque de los Novios</p>
                                        <div class="list_month-detail text-center">5mn</div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-8 col-sm-7">
                            <div class="foo_right_side">
                                <h3 class="foo_list_title">&nbsp;<br>Comment arriver ?</h3>

                                <div class="foo_address">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Depuis l’aéroport</strong>
                                            <p>Environ 20 minutes en Taxi (environ $25.000)</p>
                                            <p>Environ 30 minutes en bus (Direction : KRA 5 ou Centro historico – environ $1.500)</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Depuis l’aéroport</strong>
                                            <p>Environ 20 minutes en Taxi (environ $25.000)</p>
                                            <p>Environ 30 minutes en bus (Direction : KRA 5 ou Centro historico – environ $1.500)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="foo_tips">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="mobile_tip" src="../assets/front/images/foo_tips.png" alt="" />
                                            <h3>TRAVEL Tips</h3>
                                        </div>
                                        <div class="col-md-9">
                                            <h4>prendre le bus / taxi</h4>
                                            <p>Il est facile de se repérer dans Santa Marta, la ville étant complétement quadrillée. Vous n’aurez pas de difficulté à arriver dans le centre-ville.
                                                Après un long voyage, nous vous recommandons de prendre un taxi.
                                                L’expérience du bus est à faire si vous voyagez léger et que vous n’êtes pas pressé. </p>
                                            <p>Attention le dimanche et jours fériés: les prix des taxis peuvent être majorés
                                                (environ $5000 de plus par course).</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- Foo list left -->

            </div>
        </div>
        <!-- footer map detail -->
    </div>
    <!-- #foo1 Bogota section end -->
</div>
<div id="bottom-tab2">
    <!-- #foo2 Santa Marta section start -->
    <div class="foo2_content">
        <!-- footer head -->
        <div class="footer_head">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-2">
                        <a class="footer_logo" href="#"><img src="../assets/front/images/footer_logo.png" alt="" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-9">
                        <h1>Masaya Santa Marta</h1>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden_mobile">
                        <h3>Calle 14 # 04-80 Centro historico,<br> Santa Marta, Colombia</h3>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden_mobile">
                        <h3>Tel : +57 (5) 423 1770   +57 311 533 8348 <br>
                            E-mail : santamarta@masaya-experience.com
                        </h3>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                        <a class="fo_close" href="#"><img src="../assets/front/images/footer_close.png" alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- footer head -->

        <!-- footer map detail -->
        <div class="footer_mapcontent_wrapper">
            <div class="container">
                <div class="foo_map_wrapper">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="foo_google-map">
                                <img class="imgfull-width rev_map" src="../assets/front/images/foo_map.png" alt="" />
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="foo_map_content">
                                <p><em>L’hostel est situé en plein cœur du centre historique de la <br> ville de Santa Marta. <br>
                                        A moins de 500 mètres de la Cathédrale et de la baie. <br ><br>

                                        Profitez et oubliez les taxis et autobus lors de votre séjour à Santa Marta.</em></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Foo list left -->
                <div class="foo-listing_wrapper">
                    <div class="row">
                        <div class="col-md-4  col-sm-5">
                            <div class="foo_left_side">
                                <h3 class="foo_list_title">Temps à pied <br>des différents points d’intérêt</h3>
                                <ul class="detail_listing2">
                                    <li>
                                        <p>Boire un café Juan Valdez</p>
                                        <div class="list_month-detail text-center">2mn</div>
                                    </li>
                                    <li>
                                        <p>Visiter la Cathédrale</p>
                                        <p>Voir la plage</p>
                                        <p>Faire quelques courses</p>
                                        <div class="list_month-detail text-center">3mn</div>
                                    </li>
                                    <li>
                                        <p>Aller au Musée de l’Or</p>
                                        <p>Se faire une terrasse au Parque de los Novios</p>
                                        <div class="list_month-detail text-center">5mn</div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-8 col-sm-7">
                            <div class="foo_right_side">
                                <h3 class="foo_list_title">&nbsp;<br>Comment arriver ?</h3>

                                <div class="foo_address">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Depuis l’aéroport</strong>
                                            <p>Environ 20 minutes en Taxi (environ $25.000)</p>
                                            <p>Environ 30 minutes en bus (Direction : KRA 5 ou Centro historico – environ $1.500)</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Depuis l’aéroport</strong>
                                            <p>Environ 20 minutes en Taxi (environ $25.000)</p>
                                            <p>Environ 30 minutes en bus (Direction : KRA 5 ou Centro historico – environ $1.500)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="foo_tips">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="mobile_tip" src="../assets/front/images/foo_tips.png" alt="" />
                                            <h3>TRAVEL Tips</h3>
                                        </div>
                                        <div class="col-md-9">
                                            <h4>prendre le bus / taxi</h4>
                                            <p>Il est facile de se repérer dans Santa Marta, la ville étant complétement quadrillée. Vous n’aurez pas de difficulté à arriver dans le centre-ville.
                                                Après un long voyage, nous vous recommandons de prendre un taxi.
                                                L’expérience du bus est à faire si vous voyagez léger et que vous n’êtes pas pressé. </p>
                                            <p>Attention le dimanche et jours fériés: les prix des taxis peuvent être majorés
                                                (environ $5000 de plus par course).</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- Foo list left -->

            </div>
        </div>
        <!-- footer map detail -->
    </div>
    <!-- #foo2 Santa Marta section end -->
</div>
<div id="bottom-tab3">
    <!-- #foo3 contact us section -->
    <div class="foo3_contacts">
        <!-- footer head -->
        <div class="footer_head">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-2">
                        <a class="footer_logo" href="#"><img src="../assets/front/images/footer_logo.png" alt="" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-9">
                        <h1>Contactez-nous !</h1>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden_mobile">
                        <h3>&nbsp;</h3>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden_mobile">
                        <h3>&nbsp;</h3>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                        <a class="fo_close" href="#"><img src="../assets/front/images/footer_close.png" alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- footer head -->
        <!-- footer map detail -->
        <div class="foo_form_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="foo_form_left">
                            <p><em>Mauris elit metus, facilisis sit amet posuere et, accumsan vel nisl. Aliquam consequat eget diam non hendrerit. Etiam ac ipsum sit amet augue venenatis laoreet sed a ligula. Suspendisse potenti.
                                    Praesent dapibus turpis et dolor consectetur, eget mattis massa interdum.</em> </p>

                            <form class="form-horizontal">
                                <div class="form-group frm-max-wdh">
                                    <input type="text" placeholder="Votre Nom" class="form-control">
                                </div>
                                <div class="form-group frm-max-wdh">
                                    <input type="text" placeholder="Votre Prénom" class="form-control">
                                </div>
                                <div class="form-group frm-max-wdh">
                                    <input type="text" placeholder="Votre adresse email" class="form-control">
                                </div>
                                <div class="form-group frm-max-wdh">
                              <span class="select-wrapper"><select class="custom-select_inner1">
                                      <option>Date de début de l’aventure</option><option>Date</option><option>d'arrivee</option>
                                  </select><span class="holder">Date de début de l’aventure</span>
                              </span>
                                </div>
                                <div class="form-group frm-max-wdh">
                              <span class="select-wrapper"><select class="custom-select_inner1">
                                      <option>Date de fin de l’aventure</option><option>Date</option><option>d'arrivee</option>
                                  </select><span class="holder">Date de fin de l’aventure</span>
                              </span>
                                </div>
                                <div class="form-group frm-max-wdh">
                              <span class="select-wrapper"><select class="custom-select_inner1">
                                      <option>Nb participants</option><option>Date</option><option>d'arrivee</option>
                                  </select><span class="holder">Nb participants</span>
                              </span>
                                </div>
                                <div class="form-group">
                              <span class="select-wrapper"><select class="custom-select_inner1">
                                      <option>Nb participants</option><option>Date</option><option>d'arrivee</option>
                                  </select><span class="holder">Nb participants</span>
                              </span>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Votre message, question, remarque..." class="textarea"></textarea>
                                </div>
                                <div class="form-group"><input type="submit" value="Envoyer votre demande" class="btn btn-default"></div>
                            </form>

                        </div>
                    </div>


                    <div class="col-md-7 col-sm-7">

                        <div class="footer_addinner_wrapper">
                            <div class="footer_row">
                                <div class="col-md-5 col-sm-5 padding_none">
                                    <img class="imgfull-width" src="../assets/front/images/foo_add_img.png" alt="" />
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h2>Santa Marta</h2>
                                    <p>Calle 14 # 04-80 Centro historico, <br> Santa Marta, Colombia</p>
                                    <p>Tel : +57 (5) 423 1770   +57 311 533 8348 <br> E-mail : santamarta@masaya-experience.com</p>
                                </div>
                            </div>

                            <div class="footer_row">
                                <div class="col-md-5 col-sm-5 padding_none">
                                    <img class="imgfull-width" src="../assets/front/images/foo_add_img_2.png" alt="" />
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h2>Bogota</h2>
                                    <p>Calle 14 # 04-80 Centro historico, <br> Santa Marta, Colombia</p>
                                    <p>Tel : +57 (5) 423 1770   +57 311 533 8348 <br> E-mail : santamarta@masaya-experience.com</p>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- footer map detail -->
    </div>
    <!-- #foo3 contact us section -->
</div>
</div>

<ul class="contant_cities_foo">
    <li id="the-first-tab" class="hidden_mobile">
        <a href="#bottom-tab1">
            <div class="socail12">
                <img class="rev_hide" src="../assets/front/images/location.png" alt="" />
                <img class="rev_show" src="../assets/front/images/location_active.png" alt="" />
                <h2>Bogota</h2>
            </div>
        </a>
    </li>
    <li class="padding_none">
        <a href="#bottom-tab2">
            <div class="socail12">
                <img class="rev_hide" src="../assets/front/images/location.png" alt="" />
                <img class="rev_show" src="../assets/front/images/location_active.png" alt="" />
                <h2 class="hidden_mobile">Santa Marta</h2>
            </div>
        </a>
    </li>
    <li class="padding_none">
        <a href="#bottom-tab3">
            <div class="socail12">
                <img class="rev_hide" src="../assets/front/images/contacts.png" alt="" />
                <img class="rev_show" src="../assets/front/images/contacts_active.png" alt="" />
                <h2 class="hidden_mobile">Contactez-nous</h2>
            </div>
        </a>
    </li>
</ul>
</div>
<!-- contact cities -->
@stop
@extends('front.head')
@extends('front.header')
@extends('front.footer')

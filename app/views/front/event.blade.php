

    @extends('master')
     
    @section('content')
     
    <script type="text/javascript">
     
    $(document).ready( function() {
    $('#myCarousel').carousel({
    interval: 400000
    });
     
    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
     
    var value = $(this).attr('rel');
     
    $.ajax(
    {
    url: "getactivities",
    data:{month:value},
    'action' : 'POST',
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
     
    $(".Contactus").on('click',function(){
    //alert('test');
    //$(".padding_none.contact_cities").trigger("click");
    var path = window.location.href+'#bottom-tab3';
    //$(".contact_cities a").trigger('click');
    location.href=''+path;
    //$(".foo3_contacts").slideDown();
    // $(".foo3_contacts").animate({ scrollTop: $('#foo3_contacts').height()}, 1000);
    location.reload();
    });
     
    $(".fo_close").on('click',function(){
    $('#tab-bottom-container ul li a.active').trigger('click');
    });
     
    $('#carscroll').on('click', function(event) {
     
    var target = $('#myCarousel');
     
    if( target.length ) {
    event.preventDefault();
    $('html, body').animate({
    scrollTop: target.offset().top - 200
    }, 1000);
    }
     
    });
     
    $('#activity_scroll').on('click', function(event) {
     
    var target = $('#getcontentactivity');
     
    if( target.length ) {
    event.preventDefault();
    var topp = target.offset().top - 230
    $('html, body').animate({
    scrollTop: topp
    }, 1500);
    }
     
    });
     
     
    if($(".contant_cities_foo li a:nth-child(1)").hasClass("active")) {
    $(".change_hotel").show();
    } else {
    $(".change_hotel").hide();
    }
     
    $(function(){
    $('.change_hotel').change(function(){
    var data= $(this).val();
    console.log(data);
    if(data == 'bagota') {
    $('.contant_cities_foo li a:first').trigger("click");
    } else {
    $(".contant_cities_foo li a:nth-child(1)").trigger("click");
    }
    });
    });




    });
    </script>
     
    <style>
    .stickyfooter {
  padding: 2px 0 0;
  position: fixed !important;
  bottom: 0;
  width: 100%;
  z-index: 9999;
  background: #ffffff;
}

.reserver_con_footer a {
  color: #fff;
  display: inline-block;
  font-family: Duffy-DemiBold;
  padding: 5px 51px;
}
.reserver_con_footer {
    background:#4ba8ad;
    border-radius: 10px 10px 0 0;
    box-shadow: 0 -2px 2px #207075 inset;
    display: inline-block;
    font-size:38px;
    text-transform: uppercase;
    line-height: 42px;
    width: 100%;
}

    .fb_iframe_widget {
    display: inline-block;
    position: relative;
    }
    .fb-like {
    cursor: pointer;
    height: 100%;
    opacity: 0;
    position: absolute !important;
    left: 0px;
    top: 0px;
    width: 100%;
    z-index: 9999;
    }
    /*.fb-like {
    cursor: pointer;
    height: 53px;
    opacity: 0;
    position: absolute !important;
    top: 28px;
    visibility: hidden;
    width: 60px;
    }*/
    </style>
     
    <!-- inner yellow section -->
    <div class="main_yellow_inner">
     
     
    <?php //echo '<pre>';print_r($fblikes); die;?>
    <div class="container">
     
    <!-- responsive drop down -->
    <div class="rev_drop_catgory mobile_visible">
    <!-- Custom select box -->
    <select class="selectpicker">
    <option value="1">Hébergement à Santa Marta</option>
    <option value="2">Événements & activités culturelles</option>
    <option value="3">Équipements & services</option>
    <option value="4">Excursions & voyages</option>
    <option value="3">Comment s’y rendre</option>
    </select>
    <!-- Custom select box -->
    </div>
    <!-- responsive drop down -->
     
    <!-- Top links start here -->
    <ul class="y_inner-topul text-center mobile_hidden">
    <li><a href="#">{{trans('greet.Accommodation in')}} Santa Marta</a></li>
    <li><a class="active" href="#">{{ trans('greet.Events & Cultural Activities') }}</a></li>
    <li><a href="#">{{ trans('greet.Equipment & Services') }}</a></li>
    <li><a href="#">{{ trans('greet.Excursions & Trips') }}</a></li>
    <li><a href="#">{{ trans('greet.How to get there') }}</a></li>
    </ul>
    <!-- Top links start here -->
     
    <!-- Top content -->
    <div class="row inner-y_conternt1">
    <div class="col-md-12"><h1 class="title_yellow">{{ trans('greet.Events & Cultural Activities') }}</h1></div>
    <div class="col-md-9 col-sm-12">{{ $hostel_info[0]->description }}
    <div class="row">
    <div class="col-md-12 span10 mobile_center">
    <a href="#myCarousel" id="carscroll" class="btn btn-default" >{{ trans('greet.Events around') }} Santa Marta</a>
    <a href="#getcontentactivity" id="activity_scroll" class="btn btn-default" >{{ trans('greet.The cultural program of Masaya') }}</a>
    </div>
    </div>
    </div>
    <div class="col-md-3 col-sm-3 pull-right hidden-tablet">
    <div class="les_jours">{{ $hostel_info[0]->extra_info }}</div>
    </div>
    </div>
    <!-- Top content -->
     
    </div>
    </div>
     
    <?php
     
    function generateHoursForTime($key){
     
    $Get_time = explode(' ',$key);
    $hours = $Get_time[1];
    $time = $Get_time[2];
    $time_in_24_hour_format = date("H", strtotime($hours.' '.$time));
    return $time_in_24_hour_format;
    }
     
    ?>
    <!-- inner yellow section -->
     
    <!-- activity_2 banner section -->
     
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php
    if(isset($events)){
    $i = 0; ?>
    @foreach($events as $event)
    <div class="act2_banner_wrapper item <?php if($i==2){echo 'active';}?>">
     
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
    <div class="col-md-1 col-sm-1 text-center active" data-target="#myCarousel" data-slide-to="2"><a href="#" rel="3">{{ trans('greet.March') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="3"><a href="#" rel="4">{{ trans('greet.April') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="4"><a href="#" rel="5">{{ trans('greet.May') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="5"><a href="#" rel="6">{{ trans('greet.June') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="6"><a href="#" rel="7">{{ trans('greet.July') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="7"><a href="#" rel="8">{{ trans('greet.August') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="8"><a href="#" rel="9">{{ trans('greet.September') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="9"><a href="#" rel="10">{{ trans('greet.October') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="10"><a href="#" rel="11">{{ trans('greet.November') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="11"><a href="#" rel="12">{{ trans('greet.December') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="0"><a href="#" rel="1">{{ trans('greet.January') }}</a></div>
    <div class="col-md-1 col-sm-1 text-center" data-target="#myCarousel" data-slide-to="1"><a href="#" rel="2">{{ trans('greet.February') }}</a></div>
    </div>
    </div>
    </div>
    </div>
     
    </div>
    <!-- section activities -->
     
    <!-- activities -->
     
     
    <div id="getcontentactivity">
    <?php
    if(isset($monthly_activity) && $monthly_activity != '')
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
    <h1>{{ trans('greet.Our cultural activities')}}</h1>
    <h2>{{ trans('greet.Our cultural program')}}</h2>
    <p>{{ trans('greet.Every day on our terrace, free cultural activities and guarantees 100% Caribbean !')}}</p>
    </div>
     
    <!-- acts wrapper for dekstop -->
    <div class="act_wrapper tablet-hide">
    <ul class="act_head text-center">
    <li class="table_title"> </li>
    <li class="table_title">{{ trans('greet.On Monday') }}</li>
    <li class="table_title">{{ trans('greet.On Tuesday') }}</li>
    <li class="table_title">{{ trans('greet.On Wednesday') }}</li>
    <li class="table_title">{{ trans('greet.On Thursday') }}</li>
    <li class="table_title">{{ trans('greet.On Friday') }}</li>
    <li class="table_title">{{ trans('greet.On Saturday') }}</li>
    <li class="table_title">{{ trans('greet.On Sunday') }}</li>
    </ul>
     
     
     
    <?php
     
    $check_array = array();
     
    if(isset($activities))
    {
    foreach($activities as $activitydata)
    {
     
    $check_array[$activitydata->start_time][$activitydata->day] = $activitydata->name;
     
    }
    }
     
    ?>
     
    <?php
    if(count($check_array)>0)
    {
    $i = 1;
    $j=0;
    foreach($check_array as $key => $val)
    {
    // echo count($check_array);
    // echo '<pre>';print_r($check_array);die;
     
    $Get_time = explode(' ',$key);
    $hours = $Get_time[1];
    $time = $Get_time[2];
    $time_in_24_hour_format = date("H", strtotime($hours.' '.$time));
     
     
    ?>
     
     
    <ul class="act_content_sec text-center carousel-indicators">
    <li <?php if($i==1){ echo 'class="active"'; }?>><span class="date_section"><?php echo $time_in_24_hour_format.'H'; ?></span></li>
    <li class="" <?php if(isset($val['1'])) { ?> data-slide-to="<?php echo $j++;?>" <?php } ?> data-target="#carousel-example-generic">
    <div class="inne_space <?php if(isset($val['1'])) { echo 'table_sec-yellow'; } ?>">
    <span><?php if(isset($val['1'])) { echo $val['1']; } ?></span>
    </div>
    </li>
    <li class="" <?php if(isset($val['2'])) { ?>data-slide-to="<?php echo $j++;?>" <?php } ?> data-target="#carousel-example-generic"><div class="inne_space <?php if(isset($val['2'])) { echo 'table_sec-yellow'; } ?>"><span><?php if(isset($val['2'])) { echo $val['2']; } ?></span></div></li>
    <li class="" <?php if(isset($val['3'])) { ?>data-slide-to="<?php echo $j++;?>" <?php } ?> data-target="#carousel-example-generic"><div class="inne_space <?php if(isset($val['3'])) { echo 'table_sec-yellow'; } ?>"><span><?php if(isset($val['3'])) { echo $val['3']; } ?></span></div></li>
    <li class="" <?php if(isset($val['4'])) { ?>data-slide-to="<?php echo $j++;?>" <?php } ?> data-target="#carousel-example-generic"><div class="inne_space <?php if(isset($val['4'])) { echo 'table_sec-yellow'; } ?>"><span><?php if(isset($val['4'])) { echo $val['4']; } ?></span></div></li>
    <li class="" <?php if(isset($val['5'])) { ?>data-slide-to="<?php echo $j++;?>" <?php } ?> data-target="#carousel-example-generic"><div class="inne_space <?php if(isset($val['5'])) { echo 'table_sec-yellow'; } ?>"><span><?php if(isset($val['5'])) { echo $val['5']; } ?></span></div></li>
    <li class="" <?php if(isset($val['6'])) { ?>data-slide-to="<?php echo $j++;?>" <?php } ?> data-target="#carousel-example-generic"><div class="inne_space <?php if(isset($val['6'])) { echo 'table_sec-yellow'; } ?>"><span><?php if(isset($val['6'])) { echo $val['6']; } ?></span></div></li>
    <li class="" <?php if(isset($val['7'])) { ?>data-slide-to="<?php echo $j++;?>" <?php } ?> data-target="#carousel-example-generic"><div class="inne_space <?php if(isset($val['7'])) { echo 'table_sec-yellow'; } ?>"><span><?php if(isset($val['7'])) { echo $val['7']; } ?></span></div></li>
    </ul>
     
     
    <?php
    $i++;
    }
    }
     
    ?>
     
     
     
    </div>
    <!-- acts wrapper -->
     
    <!-- acts wrapper for tablet -->
    <div class="act_wrapper tablet-visible hidden_desktop hidden_mobile">
    <ul class="act_head text-center">
    <li class="tablet_head"> </li>
    <?php
    $check_array = array();
     
    if(isset($activities))
    {
    foreach($activities as $activitydata)
    {
    $check_array[$activitydata->start_time]['name'] = $activitydata->name;
    $check_array[$activitydata->start_time]['description'] = $activitydata->description;
    $check_array[$activitydata->start_time]['image'] = $activitydata->image;
    $check_array[$activitydata->start_time]['day'] = $activitydata->day;
    // echo '<pre>';print_r($check_array);
    }
    }
    if(count($check_array)>0) {
    $i = 1;
    $j=0;
    foreach($check_array as $key => $val) {
    $Get_time = explode(' ',$key);
    $hours = $Get_time[1];
    $time = $Get_time[2];
    $time_in_24_hour_format = date("H", strtotime($hours.' '.$time));
     
     
    ?>
    <li class="tablet_head"><span class="date_section"><?php echo $time_in_24_hour_format.'H'; ?></span></li>
     
    <?php
    //echo $val[1].'<br>'.$val['description'];
    $i++;
    }
    }
     
    ?>
    </ul>
    <ul class="act_content_sec text-center">
     
     
    <li class="table_title">Lundi</li>
    <li><div class="inne_space"><span> </span></div></li>
     
    <li><div class="inne_space table_sec-default"><span>Clase de Costenol</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
     
     
    <!-- <div class="tablet_slider_con text-left">
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
    </div>-->
     
     
    </ul>
     
    <ul class="act_content_sec text-center">
    <li class="table_title">Mardi</li>
    <li><div class="inne_space table_sec-yellow"><span>Clase de Cocina</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Al Aire (Microfono Abierto)</span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Campeonato de Rana</span></div></li>
    </ul>
    <ul class="act_content_sec text-center">
    <li class="table_title">Mercredi</li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    </ul>
    <ul class="act_content_sec text-center">
    <li class="table_title">Jeudi</li>
    <li><div class="inne_space table_sec-yellow"><span>Clase de Cocteleria</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
    </ul>
    <ul class="act_content_sec text-center">
    <li class="table_title">Vendredi</li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Tour de Baile</span></div></li>
    </ul>
    <ul class="act_content_sec text-center">
    <li class="table_title">Samedi</li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Clase de Salsa</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    </ul>
    <ul class="act_content_sec text-center">
    <li class="table_title">Dimanche</li>
    <li><div class="inne_space table_sec-yellow"><span>Clase de Cocteleria</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    <li><div class="inne_space table_sec-yellow"><span>Clase de Salsa</span></div></li>
    <li><div class="inne_space"><span> </span></div></li>
    </ul>
    </div>
    <div class="slide_act_cul desktop_none tablet_button_con hidden_mobile">
    <button class="exe_button">Découvrir toutes les activités de la semaine</button>
    </div>
    <!-- acts wrapper for tablet -->
     
    <!-- acts wrapper for mobile -->
    <div class="act_cul_mobile">
    <ul>
    <li class="active mob_activity_parent"><a href="javascript: void(0)">Lundi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>
    @if($activity[0])
     
    @foreach($activity[0] as $key=>$val)
     
    <div class="row margin_none">
     
    <div class="col-xs-12 padding_none">
    <img class="imgfull-width" alt="" src="../uploads/activities/{{$val['image']}}">
    </div>
    <div class="col-xs-12 padding_none">
    <div class="slide_main_con">
    <h1>{{$val['name'] }}</h1>
    <p>{{$val['description'] }}</p>
    <em>Tous les lundi à {{ generateHoursForTime($val['start_time']) }}h</em>
    </div>
    </div>
    </div>
     
    @endforeach
     
    @endif
    </li>
     
    <li class="mob_activity_parent"><a href="javascript: void(0)" onclick="show_details(this)">Mardi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>
     
    @if($activity[1])
     
    @foreach($activity[1] as $key=>$val)
     
    <div class="row margin_none">
     
    <div class="col-xs-12 padding_none">
    <img class="imgfull-width" alt="" src="../uploads/activities/{{$val['image']}}">
    </div>
    <div class="col-xs-12 padding_none">
    <div class="slide_main_con">
    <h1>{{$val['name'] }}</h1>
    <p>{{$val['description'] }}</p>
    <em>Tous les lundi à 21h</em>
    </div>
    </div>
    </div>
     
    @endforeach
     
    @endif
     
    </li>
     
     
    <li class="mob_activity_parent"><a href="javascript: void(0)" onclick="show_details(this)">Mercredi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>
    @if($activity[2])
     
    @foreach($activity[2] as $key=>$val)
     
    <div class="row margin_none">
     
    <div class="col-xs-12 padding_none">
    <img class="imgfull-width" alt="" src="../uploads/activities/{{$val['image']}}">
    </div>
    <div class="col-xs-12 padding_none">
    <div class="slide_main_con">
    <h1>{{$val['name'] }}</h1>
    <p>{{$val['description'] }}</p>
    <em>Tous les lundi à 21h</em>
    </div>
    </div>
    </div>
     
    @endforeach
     
    @endif
    </li>
     
    <li class="mob_activity_parent"><a href="javascript: void(0)" onclick="show_details(this)">Jeudi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>
    @if($activity[3])
     
    @foreach($activity[3] as $key=>$val)
     
    <div class="row margin_none">
     
    <div class="col-xs-12 padding_none">
    <img class="imgfull-width" alt="" src="../uploads/activities/{{$val['image']}}">
    </div>
    <div class="col-xs-12 padding_none">
    <div class="slide_main_con">
    <h1>{{$val['name'] }}</h1>
    <p>{{$val['description'] }}</p>
    <em>Tous les lundi à 21h</em>
    </div>
    </div>
    </div>
     
    @endforeach
     
    @endif
     
    </li>
     
    <li class="mob_activity_parent"><a href="javascript: void(0)" onclick="show_details(this)">Vendredi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>
     
    @if($activity[4])
     
    @foreach($activity[4] as $key=>$val)
     
    <div class="row margin_none">
     
    <div class="col-xs-12 padding_none">
    <img class="imgfull-width" alt="" src="../uploads/activities/{{$val['image']}}">
    </div>
    <div class="col-xs-12 padding_none">
    <div class="slide_main_con">
    <h1>{{$val['name'] }}</h1>
    <p>{{$val['description'] }}</p>
    <em>Tous les lundi à 21h</em>
    </div>
    </div>
    </div>
     
    @endforeach
     
    @endif
     
    </li>
     
    <li class="mob_activity_parent"><a href="javascript: void(0)" onclick="show_details(this)">Samedi <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>
     
    @if($activity[5])
     
    @foreach($activity[5] as $key=>$val)
     
    <div class="row margin_none">
     
    <div class="col-xs-12 padding_none">
    <img class="imgfull-width" alt="" src="../uploads/activities/{{$val['image']}}">
    </div>
    <div class="col-xs-12 padding_none">
    <div class="slide_main_con">
    <h1>{{$val['name'] }}</h1>
    <p>{{$val['description'] }}</p>
    <em>Tous les lundi à 21h</em>
    </div>
    </div>
    </div>
     
    @endforeach
     
    @endif
     
    </li>
     
     
    <li class="mob_activity_parent"><a href="javascript: void(0)" onclick="show_details(this)">Dimanche <span><img src="../assets/front/images/select_cul_drop.png" alt="" /></span></a>
     
    @if($activity[6])
     
    @foreach($activity[6] as $key=>$val)
     
    <div class="row margin_none">
     
    <div class="col-xs-12 padding_none">
    <img class="imgfull-width" alt="" src="../uploads/activities/{{$val['image']}}">
    </div>
    <div class="col-xs-12 padding_none">
    <div class="slide_main_con">
    <h1>{{$val['name'] }}</h1>
    <p>{{$val['description'] }}</p>
    <em>Tous les lundi à 21h</em>
    </div>
    </div>
    </div>
     
    @endforeach
     
    @endif
     
    </li>
    </ul>
    </div>
    <!-- acts wrapper for mobile -->
     
     
     
     
     
    </div>
    </div>
    <!-- activity cultural -->
     
    <div class="activity_slide tablet-hide">
    <div class="container">
    <!-- Banner section Activiites Slider Desktop -->
    <div class="act_slide_inner">
    <div class="shadow_full text-center bottom2"> <img class="imgfull-width" src="../../assets/front/images/shadow_bottom.png" alt="" /> </div>
    <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
     
    <div class="row">
    <div class="col-md-12">
    <div role="listbox" class="carousel-inner">
    <?php
    if(isset($activities))
    {
    $i = 1;
    foreach($activities as $activitydata)
    {
    //$check_array[$activitydata->start_time][$activitydata->day] = $activitydata->name;
     
    ?>
    <div class="row item margin_none <?php if($i==1){echo 'active'; }?>">
    <div class="col-md-6 padding_none">
    <img class="imgfull-width tour_sec-img_hgt" src="../uploads/activities/{{$activitydata->image;}}" alt="{{$activitydata->name;}}" />
    </div>
    <div class="col-md-6 padding_none">
    <div class="slide_main_con">
    <h1>{{$activitydata->name;}}</h1>
    <p>{{$activitydata->description;}}</p>
    </div>
    </div>
    </div>
    <?php
    $i++;
    }
    }
    ?>
     
    </div>
    </div>
    </div>
     
    <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">
    <span aria-hidden="true" class="banner_arroe_left"><img src="../assets/front/images/act_banner_Arrow.png" alt="" /></span>
    <span class="sr-only">Previous</span>
    </a>
    <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
    <span aria-hidden="true" class="banner_arroe_right"><img src="../assets/front/images/act_banner_Arrow_rgt.png" alt="" /></span>
    <span class="sr-only">Next</span>
    </a>
    </div>
     
     
    </div>
    <!-- Banner section -->
    <div class="slide_act_cul tablet_button_con hidden_mobile">
    <button class="exe_button">Découvrir toutes les activités de la semaine</button>
    </div>
    </div>
    </div>
     
     
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
    <h4>Masaya Hostel Santa Marta <br > {{ trans('greet.to follow our activities and the hostel life') }}</h4>
    </div>
    <div class="col-md-2 col-sm-2 padding_none">
    <div class="social_likes text-center">
    <div class="fb-like" data-href="https://www.facebook.com/<?php echo $fblikes['hostel_name']; ?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
    <img src="../assets/front/images/facebook_likes.png" alt="" />
    <h2><?php echo $fblikes['fblikes']; ?></h2>
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
     
    <?php if(count($promotional_artist)>0)
    { ?>
    <div class="slide_main_content">
    <div class="musicions_inner-con">
     
    {{$promotional_artist[0]->title}}
    {{$promotional_artist[0]->sub_title}}
    {{$promotional_artist[0]->promotional_artist_text}}
     
    <a class="btn btn-default btn-yellow Contactus" href="javascript:void(0)">{{ trans('greet.Contact us !')}}</a>
     
    </div>
    <img class="imgfull-width" src="../uploads/promotional_artist/{{$promotional_artist[0]->promotional_artist_image}}" />
    </div>
    <?php
     
    }
    ?>
     
    </div>
    </div>
    <!-- musician section -->
     
     
    <!-- tour section -->
    <div class="tour_section">
    <div class="container">
    <div class="tour_wrapper text-center">
    <div class="row">
     
    <?php if(count($cityguide) > 0)
    { ?>
     
    <div class="col-md-6 col-sm-6 padding_none">
    <div class="tour_1con">
    <img alt="" src="../uploads/city_guide/{{$cityguide[0]->city_guide_image}}" class="imgfull-width tour_img_hgt">
    <div class="tour_content_top text-center les les_space">
    <h1>SANTA MARTA</h1>
    <h2>{{$cityguide[0]->city_guide_text}}</h2>
    </div>
    </div>
    </div>
    <?php
    }
    ?>
    <div class="col-md-6 col-sm-6 padding_none">
    <div class="tour_1con">
    <img alt="" src="../assets/front/images/exe_masaya.png" class="imgfull-width tour_img_hgt">
    <div class="tour_content_top text-center les_space">
    <h1>MASAYA TRAVEL</h1>
    <h2>{{ trans('greet.EXCURSIONS DEPARTURE')}} SANTA MARTA</h2>
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
    <h5>{{ trans('greet.Instagram_Text') }}
    <span>@masayahostels</span>
    <span>#masayahostel</span>
    </h5>
    <a href="#" class="btn btn-default btn-yellow span-top20">{{ trans('greet.All your photos') }}</a>
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
    <?php if(count($hostelForActivity) > 0){?>
    <img alt="" src="../uploads/hostel_hotel_room_preview/<?php echo $hostelForActivity[0]->hostel_room_preview_image;?>" class="imgfull-width">
    <?php } ?>
    <div class="tour_content_top text-center les les_space">
    <h1>SANTA MARTA</h1>
    <h2>{{ trans('greet.FOLLOW THE LEADER') }}</h2>
    </div>
    </div>
    </div>
     
    <div class="col-md-6 col-sm-6 padding_none">
    <div class="exe_inner_container">
    <div class="trip_advisor-inner">
    <img src="../assets/front/images/trip_advisor.png">
    <em onclick="window.open('{{$trip_adviser[0]['url']}}','_blank')" style="cursor:pointer;">“{{substr($trip_adviser[0]['text'],0,55)}}...”</em>
    <em onclick="window.open('{{$trip_adviser[1]['url']}}','_blank')" style="cursor:pointer;">“{{substr($trip_adviser[1]['text'],0,55)}}...”</em>
    <em onclick="window.open('{{$trip_adviser[2]['url']}}','_blank')" style="cursor:pointer;">“{{substr($trip_adviser[2]['text'],0,55)}}...”</em>
    </div>
    <div class="exe_votes text-center">
    <img alt="" src="../assets/front/images/bagota_icon.png" class="vote_img">
    <h2>{{ $trip_adviser['percentage_recommended']}}%</h2>
    <h2>{{ $trip_adviser['total_reviews'] }}</h2>
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
     
     
    <select class="change_hotel mobile_visible hidden_tablet hidden_desktop">
    <option value="santa">Santa Marta</option>
    <option value="bagota">Bagota</option>
    </select>
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
    <h3>Tel : +57 (5) 423 1770 +57 311 533 8348 <br>
    E-mail : santamarta@masaya-experience.com
    </h3>
    </div>
    <div class="col-md-1 col-sm-1 col-xs-1 text-center">
    <a class="fo_close" href="javascript:void(0)"><img src="../assets/front/images/footer_close.png" alt="" /></a>
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
    <div class="col-md-4 col-sm-5">
    <div class="foo_left_side">
    <h3 class="foo_list_title">{{ trans('greet.Walking time') }} <br>{{ trans('greet.different points of interest') }}</h3>
    <ul class="detail_listing2">
     
    @foreach($touristic as $tours)
    <li>
    {{ $tours->description}}
    <div class="list_month-detail text-center">{{$tours->time_on_point}}mn</div>
    </li>
    @endforeach
     
    </ul>
     
    </div>
    </div>
     
    <div class="col-md-8 col-sm-7">
    <div class="foo_right_side">
    <h3 class="foo_list_title"> <br>{{ trans('greet.How to get there') }} ?</h3>
     
    <div class="foo_address">
    <div class="row">
    @foreach($comments as $comment)
    <div class="col-md-6">
    <strong>{{ $comment->title}}</strong>
    {{ $comment->description }}
    </div>
    @endforeach
    </div>
    </div>
     
    <div class="foo_tips">
    <div class="row">
    <div class="col-md-3">
    <img class="mobile_tip" src="../assets/front/images/foo_tips.png" alt="" />
    <h3>{{ trans('greet.TRAVEL Tips')}}</h3>
    </div>
    <div class="col-md-9">
    @foreach($travel_tip as $travel)
    <h4>{{ $travel->title }}</h4>
    {{ $travel->description }}
    @endforeach
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
    <h3>Tel : +57 (5) 423 1770 +57 311 533 8348 <br>
    E-mail : santamarta@masaya-experience.com
    </h3>
    </div>
    <div class="col-md-1 col-sm-1 col-xs-1 text-center">
    <a class="fo_close" href="javascript:void(0)"><img src="../assets/front/images/footer_close.png" alt="" /></a>
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
    <div class="col-md-4 col-sm-5">
    <div class="foo_left_side">
    <h3 class="foo_list_title">{{ trans('greet.Walking time') }} <br>{{ trans('greet.different points of interest') }}</h3>
    <ul class="detail_listing2">
    @foreach($touristic1 as $tours)
    <li>
    {{ $tours->description}}
    <div class="list_month-detail text-center">{{$tours->time_on_point}}mn</div>
    </li>
    @endforeach
    </ul>
    </div>
    </div>
     
     
    <div class="col-md-8 col-sm-7">
    <div class="foo_right_side">
    <h3 class="foo_list_title"> <br>{{ trans('greet.How to get there') }} ?</h3>
     
    <div class="foo_address">
    <div class="row">
    @foreach($comments1 as $comment)
    <div class="col-md-6">
    <strong>{{ $comment->title}}</strong>
    {{ $comment->description }}
    </div>
    @endforeach
    </div>
    </div>
     
    <div class="foo_tips">
    <div class="row">
    <div class="col-md-3">
    <img class="mobile_tip" src="../assets/front/images/foo_tips.png" alt="" />
    <h3>{{ trans('greet.TRAVEL Tips')}}</h3>
    </div>
    <div class="col-md-9">
    @foreach($travel_tip1 as $travel)
    <h4>{{ $travel->title }}</h4>
    {{ $travel->description }}
    @endforeach
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
    <h1>{{ trans('greet.Contact us !') }}</h1>
    </div>
    <div class="col-md-3 col-sm-3 hidden_mobile">
    <h3> </h3>
    </div>
    <div class="col-md-3 col-sm-3 hidden_mobile">
    <h3> </h3>
    </div>
    <div class="col-md-1 col-sm-1 col-xs-1 text-center">
    <a class="fo_close" href="javascript:void(0)"><img src="../assets/front/images/footer_close.png" alt="" /></a>
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
    <div class="form-group"><input type="submit" value="{{ trans('greet.Send your request') }}" class="btn btn-default"></div>
    </form>
     
    </div>
    </div>
     
     
    <div class="col-md-7 col-sm-7">
     
    <div class="footer_addinner_wrapper">
     
    @foreach($hostel as $hostell)
    <div class="footer_row">
    <div class="col-md-5 col-sm-5 padding_none">
    <img class="imgfull-width" src="../assets/front/images/foo_add_img.png" alt="" />
    </div>
    <div class="col-md-7 col-sm-7">
    <h2>{{ $hostell->name }}</h2>
    {{ $hostell->address }}
    <p>Tel : {{ $hostell->contact_number1 }} {{ $hostell->contact_number1 }} <br> E-mail : {{ $hostell->email }}</p>
    </div>
    </div>
    @endforeach
     
    @foreach($hostel1 as $hostel)
    <div class="footer_row">
    <div class="col-md-5 col-sm-5 padding_none">
    <img class="imgfull-width" src="../assets/front/images/foo_add_img.png" alt="" />
    </div>
    <div class="col-md-7 col-sm-7">
    <h2>{{ $hostel->name }}</h2>
    {{ $hostel->address }}
    <p>Tel : {{ $hostel->contact_number1 }} {{ $hostel->contact_number1 }} <br> E-mail : {{ $hostel->email }}</p>
    </div>
    </div>
    @endforeach
     
     
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
    <?php
    $i=1;
    ?>
    @foreach($hostels as $hostel)
    <li <?php if($i==1){?>class="hidden_mobile contactclose" <?php }else{ ?> class="padding_none contactclose" <?php } ?>>
    <a href="#bottom-tab<?php echo $i;?>">
    <div class="socail12">
    <img class="rev_hide" src="../assets/front/images/location.png" alt="" />
    <img class="rev_show" src="../assets/front/images/location_active.png" alt="" />
    <h2 <?php if($i==2){ ?> class="hidden_mobile" <?php } ?>>{{$hostel->name}}</h2>
    </div>
    </a>
    </li>
    <?php $i++; ?>
    @endforeach
     
    <li class="padding_none contact_cities contactclose">
    <a href="#bottom-tab3">
    <div class="socail12">
    <img class="rev_hide" src="../assets/front/images/contacts.png" alt="" />
    <img class="rev_show" src="../assets/front/images/contacts_active.png" alt="" />
    <h2 class="hidden_mobile">{{ trans('greet.Contact us !') }}</h2>
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
     


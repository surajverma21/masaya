@section('header')

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="top_header">
    <div class="pull-left left_exp">{{ trans('greet.Experience_Masaya') }}</div>
    <ul class="pull-right top_links">
        <li><a href="#">Se connector</a></li>
        <li><a href="#">{{ trans('greet.Register') }}</a></li>
        @foreach ($langs as $lang)
            <li><a href="javascript:void(0)" title ="{{ $lang->name }}" onclick="return change('{{ $lang->lang_code }}')"><img src="{{URL::to('/')}}/../uploads/languages/{{ $lang->icon }}" alt="" /></a></li>
        @endforeach
        <li><a href="#">COP$</a></li>
    </ul>
</div>
<!-- Header -->
<header class="main_h">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
            </button>
            <a href="#" class="navbar-brand mobile_hidden"><img src="../assets/front/images/logo.png" alt="" /></a>
            <a href="#" class="rev-brand deskt_hidden"><img src="../assets/front/images/logo_reasponsive.png" alt="" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="#"><span>Nos Hostels</span><br />Bogota</a></li>
                <li class="nav-item"><a href="#"><span> &nbsp; </span><br />Santa Marta</a></li>
                <li class="nav-item"><a href="#"><span>Voyagaz en colombie</span><br /> Tips & travels</a></li>
            </ul>
        </div>
        <div class="pull-right reserver_con" ><a href="#">{{ trans('greet.Book Now') }}</a></div>
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
<!-- Header -->
    @stop
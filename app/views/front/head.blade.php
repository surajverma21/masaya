@section('head')
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masaya-Hostels</title>
    {{ HTML::style('../assets/front/css/bootstrap.css') }}
    {{ HTML::style('../assets/front/css/bootstrap-select.min.css') }}
    {{ HTML::style('../assets/front/css/style.css') }}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    <!-- select box -->
    {{ HTML::script('../assets/front/js/common.js') }}
   
    <!-- accordion -->   
    {{ HTML::script('../app/views/front/jquery.js') }}
    {{ HTML::script('../app/views/front/jquery-ui.js') }}
    <!-- accordion -->

</head>
@stop
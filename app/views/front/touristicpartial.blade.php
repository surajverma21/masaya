<ul class="detail_listing2">
@foreach($touristic as $tours)
<li>
    {{ $tours->description}}
    <div class="list_month-detail text-center">{{$tours->time_on_point}}</div>
</li>
@endforeach
    </ul>
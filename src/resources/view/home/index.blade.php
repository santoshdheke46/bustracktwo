@extends('bustracking::common.layout')

@section('content')
    <button onclick="getLocation()">Try It</button>
    <p id="demo"></p>
@endsection

@push('js')
<script>
    var x = document.getElementById("demo");

    setInterval(function () {
        getLocation();
    },5000);

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        $.post('{{ url('api/developer/ssgroup/but_track') }}', {
            'bus_id': 1,
            'lat': position.coords.latitude,
            'long': position.coords.longitude
        }).done(function (response) {
            console.log('ok',response);
        }).fail(function (error) {
            alert('error');
        });
//        x.innerHTML = "Latitude: " + position.coords.latitude +
//                "<br>Longitude: " + position.coords.longitude;
    }
</script>
@endpush
@extends('bustracking::common.layout')

@section('content')

    <div class="page-title">
        <div class="title_left">
            <h3>Bus Tracking Page</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bus
                        <small>List</small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="javascript:void(0)" id="load" class="btn btn-dark btn-sm">
                                <i class="fa fa-plus"></i> Add Bus Tracking</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="map" style="width:100%;height:400px;"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
<script type="text/javascript">

    function initMaps() {

        var latitude = 27.6888163; // YOUR LATITUDE VALUE
        var longitude = 85.3932482; // YOUR LONGITUDE VALUE

        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: latitude,
                lng: longitude
            },
            zoom: 11
        });

        map.setTilt(90);

        var marker = new google.maps.Marker({
            position: {
                lat: latitude,
                lng: longitude
            },
            map: map,
            zoom: 100,
            title: "Santosh"
        });

        marker1.setMap(map);

        marker1.addListener('click', function () {
            $.post('{{ url('api/developer/ssgroup/but_track/location/1') }}').done(function (response) {
alert('test');
                var marker = new google.maps.Marker({
                    position: {
                        lat: response.data.lat,
                        lng: response.data.long
                    },
                    map: map,
                    zoom: 100,
                    title: "Santosh"
                });

//            function changeMarkerPosition(marker) {
//                var latlng = new google.maps.LatLng(response.data.lat, response.data.long);
//                marker.setPosition(latlng);
//            }
            }).fail(function (error) {
                console.log('error', error);
            });
        });
    }


    setInterval(function () {
        $.post('{{ url('api/developer/ssgroup/but_track/location/1') }}').done(function (response) {

            var marker = new google.maps.Marker({
                position: {
                    lat: response.data.lat,
                    lng: response.data.long
                },
                map: map,
                zoom: 100,
                title: "Santosh"
            });

//            function changeMarkerPosition(marker) {
//                var latlng = new google.maps.LatLng(response.data.lat, response.data.long);
//                marker.setPosition(latlng);
//            }
        }).fail(function (error) {
            console.log('error', error);
        });
    }, 3000);


</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ config('bus.googlemap_key') }}"
        async defer></script>
@endpush

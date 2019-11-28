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
                            <a href="{{ route(config('bus.url_prefix').'.bus.create') }}" class="btn btn-dark btn-sm">
                                <i
                                        class="fa fa-plus"></i> Add Bus Tracking</a>
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
{{--<script type="text/javascript">--}}


{{--function initMap() {--}}

{{--var latitude = 27.686933; // YOUR LATITUDE VALUE--}}
{{--var longitude = 85.385113; // YOUR LONGITUDE VALUE--}}


{{--var myLatLng = {lat: latitude, lng: longitude};--}}

{{--map = new google.maps.Map(document.getElementById('map'), {--}}
{{--center: myLatLng,--}}
{{--zoom: 14--}}
{{--});--}}

{{--var marker = new google.maps.Marker({--}}
{{--position: myLatLng,--}}
{{--map: map,--}}
{{--zoom: 100,--}}
{{--            icon: '{{ asset('ssgroup/src/images/img.jpg') }}',--}}
{{--title: latitude + ', ' + longitude--}}
{{--});--}}
{{--}--}}


{{--</script>--}}

<script>

        var map;
        var InforObj = [];
        var centerCords = {
            lat: 27.686933,
            lng: 85.385113
        };
        var markersOnMap = [{
            placeName: "Australia (Uluru)",
            LatLng: [{
                lat: 27.6885824,
                lng: 85.39439759999999
            }]
        },
            {
                placeName: "Australia (Melbourne)",
                LatLng: [{
                    lat: 27.686663,
                    lng: 85.385233
                }]
            }
        ];

        window.onload = function () {
            initMap();
        };

        function addMarkerInfo() {
            for (var i = 0; i < markersOnMap.length; i++) {
                var contentString = '<div id="content"><h1>' + markersOnMap[i].placeName +
                        '</h1><p>Lorem ipsum dolor sit amet, vix mutat posse suscipit id, vel ea tantas omittam detraxit.</p></div>';

                const marker = new google.maps.Marker({
                    position: markersOnMap[i].LatLng[0],
                    map: map
                });

                const infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 200
                });

                marker.addListener('click', function () {
                    closeOtherInfo();
                    infowindow.open(marker.get('map'), marker);
                    InforObj[0] = infowindow;
                });
            }
        }

        function closeOtherInfo() {
            if (InforObj.length > 0) {
                /* detach the info-window from the marker ... undocumented in the API docs */
                InforObj[0].set("marker", null);
                /* and close it */
                InforObj[0].close();
                /* blank the array */
                InforObj.length = 0;
            }
        }

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: centerCords
            });
            addMarkerInfo();
        }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ config('bus.googlemap_key') }}"
        async defer></script>
@endpush

@extends('layouts.app',['attr'=>'data-col="2-columns" class=" 2-columns "'])

@section('content')


    <div class="wrapper nav-collapsed menu-collapsed">

    @include('parts.sidebar')
    <!-- Navbar (Header) Starts-->
    @include('parts.navbar')
    <!-- Navbar (Header) Ends-->

        <style>
            .map .overview {
                position: absolute;
                top: 5%;
                right: 3%;
                width: 37%;
                /*background-color: #00000040;*/
            }

            .map .list {
                position: absolute;
                right: 3%;
                width: 37%;
                background-color: #00000040;
            }
        </style>


        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 map">
                            <div id="markers"></div>
                            <div class="overview">
                                <div class="card" style="margin: 0;">
                                    <div class="card-body">
                                        <div class="card-img">
                                            <img class="card-img-top img-fluid"
                                                 src="" id="farm-image" alt="Card image cap">
                                            <h4 class="card-title" id="today-code" style="font-size: 16px;">Sunny</h4>
                                        </div>
                                        <div class="card-block" style="padding: 0;">
                                            <div class="row" id="weather-days"
                                                 style="margin: 0 4px 0 4px;font-size: 0.8em;max-height: 110px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 text-center">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="widget widget-stats bg-green" style="border-radius: 5px;">
                                            <div class="stats-info">
                                                <h4 style="padding: 10px;">Progress #1</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 hidden-xs">
                                        <div class="widget widget-stats bg-blue" style="border-radius: 5px;">
                                            <div class="stats-info">
                                                <h4 style="padding: 10px;">Progress #2</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="col-12 mt-1 " style="border-bottom: 1px solid #80808059;">
                                    <i class="icon-pointer red"></i>
                                    <span class="white">
                                        Farms Overview
                                    </span>
                                </div>
                                <table class="col-10 offset-1 mt-2" style="color: #fff;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a</td>
                                        <td>b</td>
                                        <td>c</td>
                                        <td>d</td>
                                    </tr>
                                    <tr>
                                        <td>a</td>
                                        <td>b</td>
                                        <td>c</td>
                                        <td>d</td>
                                    </tr>
                                    <tr>
                                        <td>a</td>
                                        <td>b</td>
                                        <td>c</td>
                                        <td>d</td>
                                    </tr>
                                    <tr>
                                        <td>a</td>
                                        <td>b</td>
                                        <td>c</td>
                                        <td>d</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            @include('parts.footer')

        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @include('parts.asside')

    <script>

        function rnd(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        var distributedSeriesBarChart = new Chartist.Bar('#distributed-bar-chart', {
                labels: ["XS", "S", "M"],
                series: [50, 70, 120]
            },
            {
                showGrid: true,
                distributeSeries: true,
            });


        // maps

        var fields = {!! json_encode($fields) !!};

        function setSizes() {
            /*
                 * set map height
                 */
            var fullHeight = $('html').height();
            var fullHeight = fullHeight - $(".navbar").height();
            var fullHeight = fullHeight - $(".footer").height();
            var fullHeight = fullHeight - 40;
            $("#markers").css('height', fullHeight);

            /*
             * set map boxes
             */
            var boxHeight1 = fullHeight * 0.5;
            var boxHeight2 = fullHeight * 0.3;
            $(".map .overview").height(boxHeight1);
            $(".map .list").height(boxHeight2);
            $(".map .list").css('top', boxHeight1 + 80 + 'px');

            /*
             * set overview weather image height
             */
            $(".card-img-top").height(boxHeight1 * 0.4);
            $("#weather-days").height(boxHeight1 * 0.4);
        }


        document.addEventListener("DOMContentLoaded", function (event) {

            window.currentBox = "";
            $(window).on('resize', function () {
                setSizes();
            });

            $(window).on("load", function () {


                setSizes();

                // Map Markers
                // ------------------------------

                map = new GMaps({
                    div: '#markers',
                    lat: 4.753760,
                    lng: 101.989250,
                    zoom: 7,
                    styles: [{
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{"hue": "#5500ff"}]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{"hue": "#00ff1c"}]
                    }, {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{"color": "#6195a0"}]
                    }, {
                        "featureType": "administrative.province",
                        "elementType": "geometry.stroke",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{"lightness": "0"}, {"saturation": "0"}, {"color": "#f5f5f2"}, {"gamma": "1"}]
                    }, {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{"lightness": "-3"}, {"gamma": "1.00"}]
                    }, {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "geometry.stroke",
                        "stylers": [{"weight": "3.83"}]
                    }, {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "labels.text.fill",
                        "stylers": [{"hue": "#07ff00"}]
                    }, {
                        "featureType": "landscape.natural.terrain",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [{"color": "#bae5ce"}, {"visibility": "on"}]
                    }, {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"lightness": 45}, {"visibility": "simplified"}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{"color": "#dbdbdb"}, {"visibility": "simplified"}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "labels.text",
                        "stylers": [{"color": "#4e4e4e"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{"color": "#787878"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "transit.station.airport",
                        "elementType": "labels.icon",
                        "stylers": [{"hue": "#0a00ff"}, {"saturation": "-77"}, {"gamma": "0.57"}, {"lightness": "0"}]
                    }, {
                        "featureType": "transit.station.rail",
                        "elementType": "labels.text.fill",
                        "stylers": [{"color": "#43321e"}]
                    }, {
                        "featureType": "transit.station.rail",
                        "elementType": "labels.icon",
                        "stylers": [{"hue": "#ff6c00"}, {"lightness": "4"}, {"gamma": "0.75"}, {"saturation": "-68"}]
                    }, {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{"color": "#eaf6f8"}, {"visibility": "on"}]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{"color": "#c7eced"}]
                    }, {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{"lightness": "-49"}, {"saturation": "-53"}, {"gamma": "0.79"}]
                    }]
                });

                var colors = ['FF0000', '14ADCE', '0CC27E'];

                jQuery.each(fields, function (i, val) {

                    var marker = {};
                    marker[i] = map.addMarker({
                        icon: {
                            'url': 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=' + rnd(1, 10) + '|' + colors[rnd(0, 2)] + '|000000',
                            scaledSize: new google.maps.Size(18, 30),
                            labelOrigin: new google.maps.Point(0, 40),
                        },
                        lat: val.x,
                        lng: val.y,
                        title: i,
                        label: {
                            text: i,
                            color: "white",
                            fontSize: '14px',
                        },
                        click: function (e) {
                            if (console.log)
                                console.log(e);
                            // alert('You clicked in ' + i +  ' marker');
                        },
                        mouseover: function (e) {
                            this.infoWindow.open(this.map, this);
                            // updateBoxes(i);
                        },
                        mouseout: function (e) {
                            this.infoWindow.close(this.map, this);
                        },
                        infoWindow: {
                            content: '<p>Field Name: ' + i + '</p>'
                        }
                    });

                    google.maps.event.addListener(marker[i], "dblclick", function (e) {
                        window.location.href = "/farm/" + i + "/info";
                    });
                    google.maps.event.addListener(marker[i], "click", function (e) {
                        updateBoxes(i);
                    });
                    currentBox = i;
                });
                window.updateBoxes = function (farm) {

                    if (farm === '') {
                        // console.log('first');
                        farm = currentBox;
                    }
                    else if (currentBox === farm) {
                        // console.log('old');
                        return;
                    }
                    else {
                        currentBox = farm;
                        // console.log('new');
                    }

                    $(".loading").show();
                    $(".loaded").hide();

                    axios.post('/farm/' + farm + '/info', {}).then((response) => {
                        console.log(response);
                        $("#farm-image").attr('src', 'https://dummyimage.com/300x100/007a00/ffffff.png&text=' + farm);
                        $(".loading").hide();
                        $(".loaded").show();
                        distributedSeriesBarChart.update();
                        lineChart2.update();


                        // weather loop
                        if (response.data.weather != false) {
                            $("#today-code").html(response.data.weather[(new Date).getDate()].events);
                            $("#weather-days").html('');
                            jQuery.each(response.data.weather, function (i, v) {
                                // console.log(v);
                                var html;
                                html = '<div data-sort="' + v.day + '" class="day col-2 text-center">\n' +
                                    // '                                                <span class="display-block">' + v.dayString + ' <small>' + v.day + '</small></span>\n' +
                                    '                                                <span class="display-block">' + v.dayString + '</span>\n' +
                                    '                                                <i style="font-size: 1.6em !important" class="wi ' + v.css + ' display-block warning my-2"></i>\n' +
                                    '                                                <span class="display-block" style="font-size: 0.8em;">' + v.tempMin + '&deg;/' + v.tempMax + '&deg;</span>\n' +
                                    '                                            </div>';
                                $("#weather-days").append(html);
                            });
                        }


                    }).catch((error) => {
                        console.log(error);
                        alert('error.response.data');
                    });
                };
                updateBoxes('');
            });
        });

    </script>
@endsection

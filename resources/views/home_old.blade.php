@extends('layouts.app',['attr'=>'data-col="2-columns" class=" 2-columns "'])

@section('content')


    <div class="wrapper nav-collapsed menu-collapsed">

    @include('parts.sidebar')
    <!-- Navbar (Header) Starts-->
    @include('parts.navbar')
    <!-- Navbar (Header) Ends-->


        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{--<div class="card-header">--}}
                                {{--<h4 class="card-title">Markers</h4>--}}
                                {{--</div>--}}
                                <div class="card-body">
                                    <div class="card-block">
                                        {{--<p class="card-text"><strong>Latitude</strong> and <strong>Longitude</strong> are required. You can also attach additional information with <code>details</code>, which will be passed to Event object (<code>e</code>) in the events previously defined.</p>--}}
                                        <div id="markers" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-8 offset-2 mt-lg-2 mb-lg-2 loading">
                            <p class="text-center" style="color: grey;">
                                <img src="/app-assets/img/loading.gif" alt="">
                            </p>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6 loaded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid height-300"
                                             src="" id="farm-image" alt="Card image cap">
                                        <h4 class="card-title" id="today-code">Sunny</h4>
                                        <a class="btn btn-floating halfway-fab bg-primary"><i class="ft-plus"></i></a>
                                    </div>
                                    <div class="card-block mt-2">
                                        <div class="row" id="weather-days">
                                            {{--<div class="col-2 text-center">--}}
                                            {{--<span class="display-block">Mon</span>--}}
                                            {{--<i class="wi wi-day-sunny display-block warning font-large-1 my-3"></i>--}}
                                            {{--<span class="display-block">13&deg;</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-2 text-center">--}}
                                            {{--<span class="display-block">Tue</span>--}}
                                            {{--<i class="wi wi-day-cloudy display-block warning font-large-1 my-3"></i>--}}
                                            {{--<span class="display-block">12&deg;</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-2 text-center">--}}
                                            {{--<span class="display-block">Wed</span>--}}
                                            {{--<i class="wi wi-day-cloudy-gusts display-block warning font-large-1 my-3"></i>--}}
                                            {{--<span class="display-block">10&deg;</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-2 text-center">--}}
                                            {{--<span class="display-block">Thu</span>--}}
                                            {{--<i class="wi wi-day-cloudy-windy display-block warning font-large-1 my-3"></i>--}}
                                            {{--<span class="display-block">12&deg;</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-2 text-center">--}}
                                            {{--<span class="display-block">Fri</span>--}}
                                            {{--<i class="wi wi-day-fog display-block warning font-large-1 my-3"></i>--}}
                                            {{--<span class="display-block">9&deg;</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-2 text-center">--}}
                                            {{--<span class="display-block">Sat</span>--}}
                                            {{--<i class="wi wi-day-lightning display-block warning font-large-1 my-3"></i>--}}
                                            {{--<span class="display-block">6&deg;</span>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6 loaded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-block">
                                        <div id="distributed-bar-chart" class="height-450">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6 loaded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-block">
                                        <div class="chart-info mb-2">
                                            <span class="text-uppercase mr-3"><i
                                                        class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                                            <span class="text-uppercase"><i
                                                        class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                                        </div>
                                        <div id="line-chart2" class="height-450 lineChart2 lineChart2Shadow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6 loaded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-block">
                                        <h4 class="card-title">DAILY DIET</h4>
                                        <p class="card-text">Some quick example text to build on the card.</p>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span class="badge bg-primary float-right">4</span> Protein Milk
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge bg-info float-right">2</span> oz Water
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge bg-warning float-right">6</span> Vegetable Juice
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge bg-success float-right">1</span> Sugar Free Jello-O
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge bg-danger float-right">3</span> Protein Meal
                                        </li>
                                    </ul>
                                    <div class="card-block">
                                        <a class="card-link success">Card link</a>
                                        <a class="card-link success">Another link</a>
                                    </div>
                                </div>
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

    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Dashboard</div>--}}

    {{--<div class="panel-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--You are logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

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


        document.addEventListener("DOMContentLoaded", function (event) {
            //do work
            window.currentBox = "";

            $(window).on("load", function () {

                // Map Markers
                // ------------------------------

                map = new GMaps({
                    div: '#markers',
                    lat: 4.753760,
                    lng: 101.989250,
                    zoom: 7,
                    styles: [{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"hue":"#5500ff"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"hue":"#00ff1c"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#6195a0"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":"0"},{"saturation":"0"},{"color":"#f5f5f2"},{"gamma":"1"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"-3"},{"gamma":"1.00"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.stroke","stylers":[{"weight":"3.83"}]},{"featureType":"landscape.natural.landcover","elementType":"labels.text.fill","stylers":[{"hue":"#07ff00"}]},{"featureType":"landscape.natural.terrain","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#bae5ce"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#dbdbdb"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#4e4e4e"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#787878"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.airport","elementType":"labels.icon","stylers":[{"hue":"#0a00ff"},{"saturation":"-77"},{"gamma":"0.57"},{"lightness":"0"}]},{"featureType":"transit.station.rail","elementType":"labels.text.fill","stylers":[{"color":"#43321e"}]},{"featureType":"transit.station.rail","elementType":"labels.icon","stylers":[{"hue":"#ff6c00"},{"lightness":"4"},{"gamma":"0.75"},{"saturation":"-68"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#eaf6f8"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c7eced"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":"-49"},{"saturation":"-53"},{"gamma":"0.79"}]}]
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
                            color: "black",
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
                        $("#farm-image").attr('src', 'https://dummyimage.com/600x400/007a00/ffffff.png&text=' + farm);
                        $(".loading").hide();
                        $(".loaded").show();
                        distributedSeriesBarChart.update();
                        lineChart2.update();


                        // weather loop

                        $("#today-code").html(response.data.weather[(new Date).getDate()].events);
                        $("#weather-days").html('');
                        jQuery.each(response.data.weather, function (i, v) {
                            console.log(v);
                            var html;
                            html = '<div data-sort="' + v.day + '" class="day col-2 text-center">\n' +
                                '                                                <span class="display-block">' + v.dayString + ' <small>' + v.day + '</small></span>\n' +
                                '                                                <i class="wi ' + v.css + ' display-block warning font-large-1 my-3"></i>\n' +
                                '                                                <span class="display-block">' + v.tempMin + '&deg; - ' + v.tempMax + '&deg;</span>\n' +
                                '                                            </div>';
                            $("#weather-days").append(html);
                        });


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

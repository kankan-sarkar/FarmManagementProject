@extends('layouts.app')

@section('content')
    <style>
        .custom-accordion {
            width: 100%;
            margin-bottom: 10px;
        }

        .custom-accordion-header {
            background-color: #00a0a0;
            border-radius: 4px;
            padding-left: 18px;
            color: white;
        }

        .custom-accordion-header h5 {
            line-height: 35px;
            padding: 0px;
            margin: 0px;
        }

        .custom-accordion-body {
            border: 1px solid #dfdfdf;
            background: white;
            padding: 0 20px;
            border-radius: 4px;
        }

        .custom-accordion-show-more, .custom-accordion-show-less {
            text-align: center;
        }

        .custom-accordion-show-less a:hover, .custom-accordion-show-more a:hover {
            opacity: 1;
        }

        .custom-accordion-show-more a, .custom-accordion-show-less a {
            font-size: 40px;
            opacity: 0.4;
        }

        .custom-accordion-brief .row {
            margin: 0px !important;
            padding-top: 10px;
        }

        .custom-accordion-full {
            display: none;
        }

        .col-xl-6.col-lg-12 .card {
            margin: 0px !important;
        }
    </style>
    <div class="wrapper nav-collapsed menu-collapsed">

    @include('parts.sidebar')
    <!-- Navbar (Header) Starts-->
    @include('parts.navbar')
    <!-- Navbar (Header) Ends-->
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">

                    <section class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            @php
                                $i = 1;
                            @endphp
                            @foreach($fields as $index => $field)
                                <div class="custom-accordion" id="{{str_slug($index)}}">
                                    <div class="custom-accordion-header">
                                        <h5>
                                            {{$index}}
                                        </h5>
                                    </div>
                                    <div class="custom-accordion-body">
                                        <div class="custom-accordion-brief row">
                                            <div class="row col-md-6" id="weather-block">
                                                @if(false !== $field['weather'])
                                                    @foreach($field['weather'] as $data)
                                                        <div class="col-2 text-center">
                                                            <span class="display-block"
                                                                  style="height: 18px;">{{$data['dayString']}}</span>
                                                            <i class="wi {{$data['css']}} display-block primary font-large-1 my-3"></i>
                                                            <span class="display-block" style="white-space: nowrap">{{$data['tempMin']}}
                                                                °<br>{{$data['tempMax']}}
                                                                °
                                                                </span>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="col-12">
                                                            <span class="display-block">
                                                                <p>no weather data available <br/>latitude : {{$field['x']}}
                                                                    , longitude: {{$field['y']}}<br>can't get city name to query weather information </p>
                                                            </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row col-md-6" id="farm-image-block">
                                                <img class="card-img-bottom card-img-top  height-80-per"
                                                     src="https://picsum.photos/300/90?random&any={{$i}}"
                                                     {{--src="http://lorempixel.com/output/nature-q-c-1000-300-{{$i}}.jpg"--}}
                                                     alt="Card image cap">
                                                <h4 class="card-title">
                                                    @if(isset($field['weather'][intval(date('d'))]['events']))
                                                        {{$field['weather'][intval(date('d'))]['events']}}
                                                    @else
                                                        No event today
                                                    @endif
                                                </h4>
                                            </div>

                                            <div class="custom-accordion-show-more col-12">
                                                <a href="#{{str_slug($index)}}" class="ft-more-horizontal"></a>
                                            </div>
                                        </div>
                                        <div class="custom-accordion-full">
                                            <hr>
                                            <div class="row match-height">
                                                <div class="col-xl-4 col-lg-12 col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Statistics</h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <p class="font-medium-2 text-muted text-center">Hobbies</p>
                                                            <div class="{{str_slug($index)}}-bar-chart BarChartShadow BarChart height-200">
                                                            </div>

                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2"
                                                                              style="width:10px; height:10px;"></span>
                                                                        <span class="font-large-1 d-block mb-2">48</span>
                                                                        <span>Sport</span>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2"
                                                                              style="width:10px; height:10px;"></span>
                                                                        <span class="font-large-1 d-block mb-2">9</span>
                                                                        <span>Music</span>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2"
                                                                              style="width:10px; height:10px;"></span>
                                                                        <span class="font-large-1 d-block mb-2">26</span>
                                                                        <span>Travel</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Project Stats</h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <p class="font-medium-2 text-muted text-center">Project
                                                                Tasks</p>
                                                            <div class="{{str_slug($index)}}-donut-dashboard-chart donut">
                                                            </div>

                                                            <div class="card-block">
                                                                <div class="row mb-3">
                                                                    <div class="col">
                                                                        <span class="mb-1 text-muted d-block">23% - Started</span>
                                                                        <div class="progress" style="height: 5px;">
                                                                            <div class="progress-bar bg-success"
                                                                                 role="progressbar" style="width: 23%;"
                                                                                 aria-valuenow="23" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="mb-1 text-muted d-block">14% - In Progress</span>
                                                                        <div class="progress" style="height: 5px;">
                                                                            <div class="progress-bar bg-amber"
                                                                                 role="progressbar" style="width: 14%;"
                                                                                 aria-valuenow="14" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-2">
                                                                    <div class="col">
                                                                        <span class="mb-1 text-muted d-block">35% - Remaining</span>
                                                                        <div class="progress" style="height: 5px;">
                                                                            <div class="progress-bar bg-deep-purple bg-lighten-1"
                                                                                 role="progressbar" style="width: 35%;"
                                                                                 aria-valuenow="35" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="mb-1 text-muted d-block">28% - Done</span>
                                                                        <div class="progress" style="height: 5px;">
                                                                            <div class="progress-bar bg-blue"
                                                                                 role="progressbar" style="width: 28%;"
                                                                                 aria-valuenow="28" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="card-block">
                                                                <h4 class="card-title">DAILY DIET</h4>
                                                                <p class="card-text">Some quick example text to build on
                                                                    the card.</p>
                                                            </div>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <span class="badge bg-primary float-right">4</span>
                                                                    Protein Milk
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <span class="badge bg-info float-right">2</span> oz
                                                                    Water
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <span class="badge bg-warning float-right">6</span>
                                                                    Vegetable Juice
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <span class="badge bg-success float-right">1</span>
                                                                    Sugar Free Jello-O
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <span class="badge bg-danger float-right">3</span>
                                                                    Protein Meal
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

                                            <div class="custom-accordion-show-less">
                                                <a href="#{{str_slug($index)}}" class="ft-more-horizontal"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="list-group">
                                    <h6 class="list-group-item active">
                                        Filtered By Measured Date
                                    </h6>
                                </div>

                                <div class="list-group overflow-scroll height-250">
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                </div>
                                <br>

                                <div class="list-group">
                                    <h6 class="list-group-item active">
                                        Filtered By Fields
                                    </h6>
                                </div>
                                <div class="list-group overflow-scroll height-250">
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                    <a href="#" class="list-group-item">
                                        List group item heading
                                    </a>
                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-12 dropdown">
                                        <button class="btn btn-primary dropdown-toggle" style="width: inherit;"
                                                type="button"
                                                data-toggle="dropdown">
                                            Sort By:
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu list-group-item" style="width: auto">
                                            <li><a href="#">Time: last Added</a></li>
                                            <li><a href="#">Time: Date Added</a></li>
                                            <li><a href="#">Last Evets</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">

                            </div>
                        </div>
                    </section>


                </div>
            </div>
            @include('parts.footer')
        </div>
    </div>


    @include('parts.asside')

    <script>
        $(".custom-accordion-show-more a").click(function () {
            var accordion = $(this).closest('.custom-accordion');
            accordion.find(".custom-accordion-full").slideDown('slow', function () {
                var barChart = new Chartist.Bar('.' + accordion.attr('id') + '-bar-chart', {
                        labels: ["Jan", "Feb", "Mar", "Apr"],
                        series: [
                            [5, 4, 3, 7],
                            [3, 2, 9, 5]
                        ]
                    },
                    {
                        seriesBarDistance: 21,
                        axisX: {
                            showGrid: false, offset: 100
                        },
                        axisY: {
                            scaleMinSpace: 30,
                        }

                    });


                var Donutdata = {
                    series: [
                        {
                            "name": "done",
                            "className": "ct-done",
                            "value": 23
                        },
                        {
                            "name": "progress",
                            "className": "ct-progress",
                            "value": 14
                        },
                        {
                            "name": "outstanding",
                            "className": "ct-outstanding",
                            "value": 35
                        },
                        {
                            "name": "started",
                            "className": "ct-started",
                            "value": 28
                        }
                    ]
                };
                var donut = new Chartist.Pie('.' + accordion.attr('id') + '-donut-dashboard-chart', {

                    series: [
                        {
                            "name": "done",
                            "className": "ct-done",
                            "value": 23
                        },
                        {
                            "name": "progress",
                            "className": "ct-progress",
                            "value": 14
                        },
                        {
                            "name": "outstanding",
                            "className": "ct-outstanding",
                            "value": 35
                        },
                        {
                            "name": "started",
                            "className": "ct-started",
                            "value": 28
                        }
                    ]
                }, {
                    donut: true,
                    startAngle: 0,
                    labelInterpolationFnc: function (value) {
                        var total = Donutdata.series.reduce(function (prev, series) {
                            return prev + series.value;
                        }, 0);
                        return total + '%';
                    }
                });

                donut.on('draw', function (data) {
                    if (data.type === 'label') {
                        if (data.index === 0) {
                            data.element.attr({
                                dx: data.element.root().width() / 2,
                                dy: data.element.root().height() / 2
                            });
                        } else {
                            data.element.remove();
                        }
                    }
                });


                accordion.find('.card').not('.card .card').matchHeight();
            });
            accordion.find(".custom-accordion-show-more").hide();
        });
        $(".custom-accordion-show-less a").click(function () {
            var accordion = $(this).closest('.custom-accordion');
            accordion.find(".custom-accordion-full").slideUp();
            accordion.find(".custom-accordion-show-more").show();

        });


        document.addEventListener("DOMContentLoaded", function (event) {
            $(window).on("load", function () {


            });
        });
    </script>

@endsection
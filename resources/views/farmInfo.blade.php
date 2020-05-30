@extends('layouts.app',['attr'=>'data-col="2-columns" class=" 2-columns "'])


@section('content')


    <div class="wrapper nav-collapsed menu-collapsed">

    @include('parts.sidebar')
    <!-- Navbar (Header) Starts-->
        @include('parts.navbar')

        {{--        {{var_dump($fields[$farmName]['weather'][intval(date('d'))])}}--}}

        <style>
            .picker--opened {
                width: 170% !important;
            }

            .timeline-left {
                padding-left: 10px;
            }
        </style>

        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="btn-group position-absolute position-left-0 pl-2 mr-2">
                                <button type="button" onclick="return document.location.href = '/sensor/{{$farmName}}/info';"
                                        class="btn btn-raised btn-primary">Go to Pond Detail</button>
                            </div>
                            <div class="btn-group position-absolute position-right-0 p-0 mr-2">
                                <button type="button"
                                        class="btn btn-raised btn-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="width: 100%;">
                                    <span>Select Farm</span>
                                </button>
                                <div class="dropdown-menu arrow">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-submenu">
                                        <button class="dropdown-item" type="button">More Options</button>
                                        <div class="dropdown-menu arrow-left" role="menu">
                                            <button class="dropdown-item" type="button">Submenu Item</button>
                                            <button class="dropdown-item" type="button">Submenu Item</button>
                                            <button class="dropdown-item" type="button">Submenu Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/sensor/{{$farmName}}/info">
                                <img src="/app-assets/img/mapdummy1.png" class="w-100">
                            </a>

                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-lg-12 p-1">
                                    <div class="card m-0">
                                        <div class="card-body">
                                            <div class="row" style="padding: 10px;">
                                                <div class="col-12 text-center">
                                                    <div class="mt-2"></div>
                                                    {{$fields[$farmName]['weather'][intval(date('d'))]['events']}}
                                                    for
                                                    {{\Carbon\Carbon::now()->format('l')}}
                                                    <div class="mt-2"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <i class="wi {{$fields[$farmName]['weather'][intval(date('d'))]['css']}} primary font-large-1"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <span class="red">High: {{$fields[$farmName]['weather'][intval(date('d'))]['tempMax']}}
                                                        °c</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <span class="blue">Low: {{$fields[$farmName]['weather'][intval(date('d'))]['tempMin']}}
                                                        °c</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 p-1">
                                    <div class="card m-0">
                                        <div class="card-body">
                                            <div id="donut-chart1" class="donut1 m-auto width-100-per">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="card m-0">
                                        <div class="card-body">
                                            <div id="donut-chart2" class="donut1 m-auto width-100-per">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div id="line-chart2" class="height-250 lineChart2 lineChart2Shadow"></div>
                            </div>
                        </div>

                        <div class="row col-12" matchHeight="card">
                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3 py-3">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h3 class="mb-1 danger">278</h3>
                                                    <span>Pond ID {{$farmName}}</span>
                                                </div>
                                                <div class="media-right align-self-center">
                                                    <i class="icon-rocket danger font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3 py-3">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h3 class="mb-1 success">156</h3>
                                                    <span>Day of Culture</span>
                                                </div>
                                                <div class="media-right align-self-center">
                                                    <i class="icon-user success font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3 py-3">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h3 class="mb-1 warning">64.89 %</h3>
                                                    <span>Type of shrimp</span>
                                                </div>
                                                <div class="media-right align-self-center">
                                                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3 py-3">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h3 class="mb-1 primary">423</h3>
                                                    <span>Support Tickets</span>
                                                </div>
                                                <div class="media-right align-self-center">
                                                    <i class="icon-support primary font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
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
    </div>
    @include('parts.asside')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/pickadate/picker.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/pickadate/picker.date.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/pickadate/picker.time.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/pickadate/legacy.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <script src="/app-assets/js/pick-a-datetime.js" type="text/javascript"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {

            $(window).on("load", function () {

                $('[data-toggle="tooltip"]').tooltip();

                // Donut Chart 1 Starts
                var donutChart1 = new Chartist.Pie('#donut-chart1', {
                    series:
                        [
                            {
                                name: 'done',
                                className: 'ct-done',
                                value: 10
                            },
                            {
                                name: 'outstanding',
                                className: 'ct-outstanding',
                                value: 3
                            }
                        ]

                    // series: [10, 3]
                }, {
                    donut: true,
                    donutWidth: 3,
                    startAngle: 0,
                    chartPadding: 25,
                    total: 13,
                    labelInterpolationFnc: function (value) {
                        return '\ue9c9';
                    }
                });

                donutChart1.on('draw', function (data) {
                    if (data.type === 'label') {
                        if (data.index === 0) {
                            data.element.attr({
                                dx: data.element.root().width() / 2,
                                dy: (data.element.root().height() + (data.element.height() / 4)) / 2,
                                class: 'ct-label',
                                'font-family': 'feather'
                            });
                        } else {
                            data.element.remove();
                        }
                    }
                });
                // Donut Chart 1 Ends
                // Donut Chart 2 Starts
                var donutChart2 = new Chartist.Pie('#donut-chart2', {
                    series:
                        [
                            {
                                name: 'done',
                                className: 'ct-done',
                                value: 10
                            },
                            {
                                name: 'outstanding',
                                className: 'ct-outstanding',
                                value: 3
                            }
                        ]

                    // series: [10, 3]
                }, {
                    donut: true,
                    donutWidth: 3,
                    startAngle: 0,
                    chartPadding: 25,
                    total: 13,
                    labelInterpolationFnc: function (value) {
                        return '\ue9c9';
                    }
                });

                donutChart2.on('draw', function (data) {
                    if (data.type === 'label') {
                        if (data.index === 0) {
                            data.element.attr({
                                dx: data.element.root().width() / 2,
                                dy: (data.element.root().height() + (data.element.height() / 4)) / 2,
                                class: 'ct-label',
                                'font-family': 'feather'
                            });
                        } else {
                            data.element.remove();
                        }
                    }
                });
                // Donut Chart 2 Ends
                // Donut Chart 3 Starts
                var donutChart3 = new Chartist.Pie('#donut-chart3', {
                    series:
                        [
                            {
                                name: 'done',
                                className: 'ct-done',
                                value: 10
                            },
                            {
                                name: 'outstanding',
                                className: 'ct-outstanding',
                                value: 3
                            }
                        ]

                    // series: [10, 3]
                }, {
                    donut: true,
                    donutWidth: 3,
                    startAngle: 0,
                    chartPadding: 25,
                    total: 13,
                    labelInterpolationFnc: function (value) {
                        return '\ue9c9';
                    }
                });

                donutChart3.on('draw', function (data) {
                    if (data.type === 'label') {
                        if (data.index === 0) {
                            data.element.attr({
                                dx: data.element.root().width() / 2,
                                dy: (data.element.root().height() + (data.element.height() / 4)) / 2,
                                class: 'ct-label',
                                'font-family': 'feather'
                            });
                        } else {
                            data.element.remove();
                        }
                    }
                });
                // Donut Chart 3 Ends
                // Donut Chart 4 Starts
                var donutChart4 = new Chartist.Pie('#donut-chart4', {
                    series:
                        [
                            {
                                name: 'done',
                                className: 'ct-done',
                                value: 10
                            },
                            {
                                name: 'outstanding',
                                className: 'ct-outstanding',
                                value: 3
                            }
                        ]

                    // series: [10, 3]
                }, {
                    donut: true,
                    donutWidth: 3,
                    startAngle: 0,
                    chartPadding: 25,
                    total: 13,
                    labelInterpolationFnc: function (value) {
                        return '\ue9c9';
                    }
                });

                donutChart4.on('draw', function (data) {
                    if (data.type === 'label') {
                        if (data.index === 0) {
                            data.element.attr({
                                dx: data.element.root().width() / 2,
                                dy: (data.element.root().height() + (data.element.height() / 4)) / 2,
                                class: 'ct-label',
                                'font-family': 'feather'
                            });
                        } else {
                            data.element.remove();
                        }
                    }
                });
                // Donut Chart 4 Ends

                var distributedSeriesBarChart = new Chartist.Bar('#distributed-bar-chart', {
                        labels: ["XS", "S", "M"],
                        series: [50, 70, 120]
                    },
                    {
                        showGrid: true,
                        distributeSeries: true,
                    });

            });

        });
    </script>
@endsection

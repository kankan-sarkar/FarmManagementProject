@extends('layouts.app')

@section('content')
    <div class="wrapper nav-collapsed menu-collapsed">

        @include('parts.sidebar')
                <!-- Navbar (Header) Starts-->
        @include('parts.navbar')
        {{--<style>--}}
        {{--.picker--opened {--}}
        {{--width: 200% !important;--}}
        {{--}--}}
        {{--</style>--}}
                <!-- Navbar (Header) Ends-->
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-10 pr-0 h-100">
                            <div class="row">
                                <div class="col-lg-12">
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
                                    <img src="/app-assets/img/mapview.png" class="w-100">
                                </div>
                            </div>
                            <div class="row match-height">

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr-0 pb-md-0 pb-sm-0 pb-xs-0 py-2">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body primary align-self-center text-center align-items-center">
                                                        Sensor ID
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-eye primary font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-md-0 pb-sm-0 pb-xs-0 py-2">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body success align-self-center text-center align-items-center">
                                                        Sensor Client ID
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-home success font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 px-0 pl-md-2 pl-sm-2 pl-xs-2 py-2">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body purple align-self-center text-center align-items-center">
                                                        Coordinates
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-pointer purple font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 py-2">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body blue align-self-center text-center align-items-center">
                                                        Battery
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-energy blue font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row match-height">

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-2 pr-0">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body lime align-self-center text-center align-items-center">
                                                        Last Ping
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-eyeglasses lime font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-2 pt-0">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body deep-orange align-self-center text-center align-items-center">
                                                        IP Address
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-notebook deep-orange font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 px-0 pl-md-2 pl-sm-2 pl-xs-2 pb-2 pt-0">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body brown align-self-center text-center align-items-center">
                                                        Last Maintenance
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-wrench brown font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-2">
                                    <div class="card bg-light m-0" style="min-height: 80px;">
                                        <div class="card-body h-100 justify-content-center align-items-center">
                                            <div class="px-2 py-1 h-100">
                                                <div class="media h-100">
                                                    <div class="media-body deep-purple align-self-center text-center align-items-center">
                                                        Next Maintenance
                                                    </div>
                                                    <div class="media-right">
                                                        <i class="icon-control-forward deep-purple font-medium-2 float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2">
                            <div class="card m-0">
                                <div class="card-header px-2 pt-2 pb-1">
                                    <h8 class="text-bold-500 font-small-3 mt-3 mb-3">RECENT ACTIVITY</h8>
                                </div>
                                <div class="card-body overflow-scroll p-1" style="max-height: 430px;">
                                    <div id="activity" class="col-12 card timeline-left mt-0 p-0">

                                        <div id="timeline"
                                             class="timeline-left timeline-wrapper font-small-4">
                                            <ul class="timeline">
                                                <li class="timeline-line"></li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-purple bg-lighten-1"><i
                                                                    class="ft-shopping-cart"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text p-0">
                                                        <a href="#"
                                                           class="deep-purple-text medium-small">just
                                                            now</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            Jim Doe Purchased new equipments for
                                                            zonal office.</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-info bg-lighten-1"><i
                                                                    class="fa fa-plane"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text p-0">
                                                        <a href="#"
                                                           class="cyan-text medium-small">Yesterday</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            Your Next flight for USA will be on
                                                            15th August 2015.</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-success bg-lighten-1"><i
                                                                    class="ft-mic"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text">
                                                        <a href="#"
                                                           class="green-text medium-small">5
                                                            Days Ago</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            Natalya Parker Send you a voice mail
                                                            for next conference.</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-warning bg-lighten-1"><i
                                                                    class="ft-map-pin"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text p-0">
                                                        <a href="#"
                                                           class="amber-text medium-small">1
                                                            Week Ago</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            Jessy Jay open a new store at S.G
                                                            Road.</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-red bg-lighten-1"><i
                                                                    class="ft-inbox"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text">
                                                        <a href="#"
                                                           class="deep-orange-text medium-small">2
                                                            Week Ago</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            voice mail for conference.</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-cyan bg-lighten-1"><i
                                                                    class="ft-mic"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text p-0">
                                                        <a href="#"
                                                           class="brown-text medium-small">1
                                                            Month Ago</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            Natalya Parker Send you a voice mail
                                                            for next conference.</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-amber bg-lighten-1"><i
                                                                    class="ft-map-pin"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text p-0">
                                                        <a href="#"
                                                           class="deep-purple-text medium-small">3
                                                            Month Ago</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            Jessy Jay open a new store at S.G
                                                            Road.</p>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-badge"><span
                                                                class="bg-grey bg-lighten-1"><i
                                                                    class="ft-inbox"></i></span>
                                                    </div>
                                                    <div class="col s9 recent-activity-list-text p-0">
                                                        <a href="#"
                                                           class="grey-text medium-small">1 Year
                                                            Ago</a>

                                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                            voice mail for conference.</p>
                                                    </div>
                                                </li>
                                            </ul>
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

    </div>
    @include('parts.footer')


    @include('parts.asside')
            <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/pickadate/picker.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/pickadate/picker.date.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/pickadate/picker.time.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/pickadate/legacy.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <script src="/app-assets/js/pick-a-datetime.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/switchery.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/switch.min.js" type="text/javascript"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {

            $(window).on("load", function () {

                $('[data-toggle="tooltip"]').tooltip();

                // Donut Chart 1 Starts
                var donutChart1 = new Chartist.Pie('#donut-chart1', {
                    series: [
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
                    series: [
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
                    series: [
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
                    series: [
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
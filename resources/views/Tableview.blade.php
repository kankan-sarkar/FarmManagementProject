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
                        <div class="col-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
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
                                            <h4 class="card-title">Status-TableView</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-block">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Coordinates</th>
                                                        <th>Batt Volt</th>
                                                        <th>Last Ping</th>
                                                        <th>ETC</th>
                                                        <th>ETC</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="table-warning">
                                                        <th scope="row">1</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Warning</td>
                                                        <td>Column content</td>
                                                    </tr>
                                                    <tr class="table-danger">
                                                        <th scope="row">2</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Alert</td>
                                                        <td>Column content</td>

                                                    </tr>


                                                    <tr class="table-primary">
                                                        <th scope="row">3</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>O.K.</td>
                                                        <td>Column content</td>

                                                    </tr>
                                                    <tr class="table-secondary">
                                                        <th scope="row">4</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Error</td>
                                                        <td>Column content</td>

                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th scope="row">5</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Warning</td>
                                                        <td>Column content</td>
                                                    </tr>
                                                    <tr class="table-danger">
                                                        <th scope="row">6</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Alert</td>
                                                        <td>Column content</td>

                                                    </tr>


                                                    <tr class="table-primary">
                                                        <th scope="row">7</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>O.K.</td>
                                                        <td>Column content</td>

                                                    </tr>
                                                    <tr class="table-secondary">
                                                        <th scope="row">8</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Error</td>
                                                        <td>Column content</td>

                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th scope="row">9</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Warning</td>
                                                        <td>Column content</td>
                                                    </tr>
                                                    <tr class="table-danger">
                                                        <th scope="row">10</th>
                                                        <td>Latitude: 40.741895 <br> Longitude: -73.989308</td>
                                                        <td>12 V</td>
                                                        <td>12ms</td>
                                                        <td>Alert</td>
                                                        <td>Column content</td>

                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 p-0" style="margin-top: 18px;">
                                <div class="list-group">
                                    <h6 class="list-group-item active">
                                        Filter
                                    </h6>
                                </div>

                                <div class="list-group overflow-scroll height-250">
                                    <a href="#" class="list-group-item">
                                        Item 01
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 02
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 03
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 04
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 05
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 06
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 07
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 08
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 09
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 10
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 11
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 12
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 13
                                    </a>
                                    <a href="#" class="list-group-item">
                                        Item 14
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

                        </div>
                    </div>


                </div>
                @include('parts.footer')
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
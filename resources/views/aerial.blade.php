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
                        <div class="col-lg-3 p-0 pt-5 pt-lg-0">
                            <div class="col-lg-12 m-auto position-absolute position-bottom-0 pr-2 p-0">
                                <button type="button"
                                        class="btn btn-raised btn-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="width: 100%;">
                                    <span>Select Farm</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row match-height">
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="text-primary text-bold-500">
                                                Choose Date &amp; Time
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input type="text"
                                                       class="form-control pickadate-selectors picker__input"
                                                       placeholder="Start Date" readonly="" id="P655241336"
                                                       aria-haspopup="true" aria-expanded="false"
                                                       aria-readonly="false"
                                                       aria-owns="P655241336_root">

                                                <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input type="text"
                                                       class="form-control pickatime-events picker__input"
                                                       placeholder="Start Time" readonly="" id="P597664382"
                                                       aria-haspopup="true" aria-expanded="false"
                                                       aria-readonly="false"
                                                       aria-owns="P597664382_root">

                                                <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="text-primary text-bold-500">
                                                Choose end Date &amp; Time
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input type="text"
                                                       class="form-control pickadate-selectors picker__input"
                                                       placeholder="End Date" readonly="" id="P655241336"
                                                       aria-haspopup="true" aria-expanded="false"
                                                       aria-readonly="false"
                                                       aria-owns="P655241336_root">

                                                <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input type="text"
                                                       class="form-control pickatime-events picker__input"
                                                       placeholder="End Time" readonly="" id="P597664382"
                                                       aria-haspopup="true" aria-expanded="false"
                                                       aria-readonly="false"
                                                       aria-owns="P597664382_root">

                                                <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 p-0">
                                    <div class="col-lg-12 m-auto position-absolute position-bottom-0 p-0  pr-2">
                                        <button type="button"
                                                class="btn btn-raised btn-secondary dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="width: 100%;">
                                            <span>Secondary</span>
                                        </button>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="row">

                        {{--heatmap options--}}
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-6 pr-2 p-0">
                                    <button type="button"
                                            class="btn btn-raised btn-primary square" style="width: 100%;">2D Map
                                    </button>
                                </div>
                                <div class="col-6 p-0 pr-2">
                                    <button type="button"
                                            class="btn btn-raised btn-primary square" style="width: 100%;">3D Model
                                    </button>
                                </div>
                                <div class="col-6 p-0 pr-2">
                                    <button type="button"
                                            class="btn btn-raised btn-primary square" style="width: 100%;">Algae
                                    </button>
                                </div>
                                <div class="col-6 p-0 pr-2">
                                    <button type="button"
                                            class="btn btn-raised btn-primary square" style="width: 100%;">Turbidity
                                    </button>
                                </div>

                            </div>
                            <div class="row"><img class="img-fluid" style="width: 100%;"
                                                  src="/app-assets/img/heatmap.png"></div>
                            <div class="form-group row">
                                <div class="col-12 p-0 pt-2">
                                    <fieldset class="form-group">
                                        <p class="text-primary text-bold-500 m-0">
                                            Filter Type
                                        </p>
                                        <select class="form-control" id="basicSelect">
                                            <option>Option 0</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <fieldset class="form-group">
                                        <p class="text-primary text-bold-500 m-0">
                                            Algorithm
                                        </p>
                                        <select class="form-control" id="basicSelect">
                                            <option>Option 0</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group p-0">
                                    <span class="text-primary text-bold-500 m-0">
                                        Grid
                                    </span>

                                    <div class="float-right">
                                        <input type="checkbox" name="switchery" id="switchery0" class="switchery"
                                               checked/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group p-0">
                                    <span class="text-primary text-bold-500 m-0">
                                        Zones
                                    </span>

                                    <div class="float-right">
                                        <input type="checkbox" name="switchery" id="switchery0" class="switchery"
                                               checked/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group p-0">
                                    <span class="text-primary text-bold-500 m-0">
                                        healthmap
                                    </span>

                                    <div class="float-right">
                                        <input type="checkbox" name="switchery" id="switchery0" class="switchery"
                                               checked/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 p-0">
                                    <button type="button"
                                            class="btn btn-raised btn-primary square mr-1" style="width: 100%;">pH
                                    </button>
                                </div>
                                <div class="col-6 p-0">
                                    <button type="button"
                                            class="btn btn-raised btn-primary square ml-1" style="width: 100%;">DO
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <img class="img-fluid" src="/app-assets/img/aerial.png" style="width: 100%;">

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
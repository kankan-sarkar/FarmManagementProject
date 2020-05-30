@extends('layouts.app',['attr'=>'data-col="2-columns" class=" 2-columns "'])


@section('content')


    <div class="wrapper nav-collapsed menu-collapsed">

    @include('parts.sidebar')
    <!-- Navbar (Header) Starts-->
        @include('parts.navbar')

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
                        <div class="col-lg-12 d-lg-none">
                            <div class="card bg-light mt-0">
                                <div class="card-body">
                                    <div class="px-2 py-1">
                                        <div class="media">
                                            <div class="media-body primary text-center align-items-center">
                                                {{$fields[$farmName]['company']}}
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-pointer primary font-medium-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-lg-none">
                            <div class="row">
                                <div class="col-lg-12 p-1">
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

                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
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


                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="text-primary text-bold-500">
                                                Choose end Date &amp; Time
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
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
                                        <div class="col-lg-3">
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
                                        <div class="col-lg-2">
                                            <div class="row">
                                                <div class="col-lg-12 ">
                                                    <button type="button"
                                                            class="btn btn-raised btn-secondary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <span>Secondary</span>
                                                    </button>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="card bg-light mt-0">
                                                <div class="card-body">
                                                    <div class="px-2 py-1">
                                                        <div class="media">
                                                            <div class="media-body primary text-left">
                                                                <span>{{$farmName}} - {{$fields[$farmName]['company']}}</span>
                                                            </div>
                                                            <div class="media-right align-self-center">
                                                                <i class="icon-pointer primary font-medium-2 float-right"
                                                                   data-toggle="tooltip" data-placement="top"
                                                                   title="latitude: {{$fields[$farmName]['x']}} Longitude: {{$fields[$farmName]['y']}}"></i>
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
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 ">


                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 p-1">
                                    <img src="https://dummyimage.com/600x400/000/fff&text=Ground+View"
                                         class="img-fluid" style="width: 100%;">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 p-1 m-auto">
                                    <img src="https://dummyimage.com/600x400/000/fff&text=Aerial+View"
                                         class="img-fluid" style="width: 100%;">
                                </div>
                            </div>
                            <div class="row match-height">
                                <div class="col-lg-4 col-md-6 col-12 p-1">
                                    <div class="card" style="height: 482px;">
                                        <div class="card-body">
                                            <div class="card-block">
                                                <div id="distributed-bar-chart" class="height-450">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 p-1">
                                    <div class="card" style="height: 518px;z-index:99;" id="test">
                                        <div class="card-body">
                                            <div class="card-block">
                                                <h4 class="card-title">DAILY DIET</h4>

                                                <p class="card-text">Some quick example text to build on the
                                                    card.</p>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <span class="badge bg-primary float-right">4</span> Protein Milk
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge bg-info float-right">2</span> oz Water
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge bg-warning float-right">6</span> Vegetable
                                                    Juice
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge bg-success float-right">1</span> Sugar Free
                                                    Jello-O
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
                                <div class="col-lg-4 col-md-6 col-12 p-1">
                                    <div class="card" style="height: 518px;z-index:99;">
                                        <div class="card-body">
                                            <div class="card-block">
                                                <div class="chart-info mb-2">
                                                        <span class="text-uppercase mr-3"><i
                                                                    class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                                                    <span class="text-uppercase"><i
                                                                class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                                                </div>
                                                <div id="line-chart2"
                                                     class="height-450 lineChart2 lineChart2Shadow">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 p-1 d-lg-none">
                                    <div class="card">
                                        <div class="card-header">
                                            <h7 class="text-bold-500 mt-3 mb-3">RECENT ACTIVITY</h7>
                                        </div>
                                        <div class="card-body overflow-scroll p-1" style="max-height: 430px;">
                                            <div id="activity" class="col-12 card timeline-left mt-0">

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
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 p-1">
                                    <div class="card ">
                                        <div class="card-header text-center">
                                            <span class="font-medium-2 primary">Steps</span>

                                            <h3 class="font-medium-2 mt-1">3261</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="donut-chart1" class="donut1 m-auto width-70-per">
                                            </div>

                                        </div>
                                        <div class="card-header text-center">
                                            <span class="primary font-small-4">Steps Today's Target</span>

                                            <span class="font-medium-1 d-block">5000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 p-1">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <span class="font-medium-2 primary">Steps</span>

                                            <h3 class="font-medium-2 mt-1">3261</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="donut-chart2" class="donut1 m-auto width-70-per">
                                            </div>

                                        </div>
                                        <div class="card-header text-center">
                                            <span class="primary font-small-4">Steps Today's Target</span>

                                            <span class="font-medium-1 d-block">5000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 p-1">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <span class="font-medium-2 primary">Steps</span>

                                            <h3 class="font-medium-2 mt-1">3261</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="donut-chart3" class="donut1 m-auto width-70-per">
                                            </div>

                                        </div>
                                        <div class="card-header text-center">
                                            <span class="primary font-small-4">Steps Today's Target</span>

                                            <span class="font-medium-1 d-block">5000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 p-1">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <span class="font-medium-2 primary">Steps</span>

                                            <h3 class="font-medium-2 mt-1">3261</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="donut-chart4" class="donut1 m-auto width-70-per">
                                            </div>

                                        </div>
                                        <div class="card-header text-center">
                                            <span class="primary font-small-4">Steps Today's Target</span>

                                            <span class="font-medium-1 d-block">5000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="col-lg-2  d-none d-lg-block">
                            <div class="row">
                                <div class="col-lg-12 p-1">
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
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="row">
                                        <div class="col-12 p-1">
                                            <div id="activity" class="col-12 card timeline-left mt-0">
                                                <div class="col-12 mt-2 mb-2">
                                                    <h7 class="text-bold-500 primary mt-3 mb-3">RECENT ACTIVITY</h7>
                                                </div>
                                                <div id="timeline"
                                                     class="timeline-left timeline-wrapper font-small-4 overflow-scroll full-height-vh">
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
                                    <div class="ps-scrollbar-x-rail"
                                         style="width: 399px; left: 0px; bottom: 3px;">
                                        <div class="ps-scrollbar-x" tabindex="0"
                                             style="left: 0px; width: 394px;"></div>
                                    </div>
                                    <div class="ps-scrollbar-y-rail"
                                         style="top: 0px; height: 617px; right: 3px;">
                                        <div class="ps-scrollbar-y" tabindex="0"
                                             style="top: 0px; height: 310px;"></div>
                                    </div>
                                    {{--</aside>--}}
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

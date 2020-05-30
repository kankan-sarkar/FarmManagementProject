@extends('layouts.app')

@section('content')
    <div class="wrapper nav-collapsed menu-collapsed">

    @include('parts.sidebar')
    <!-- Navbar (Header) Starts-->
    @include('parts.navbar')
    <!-- Navbar (Header) Ends-->
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">

                    <section id="accordion" class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    @foreach($fields as $index => $field)
                                        <div id="headingCollapse{{str_slug($index)}}" class="card-header" @if ($field == reset($fields )) role="tab" @endif>
                                            <span style="display: inline-block;width: 120px;min-width: 120px;" data-toggle="" data-parent="#accordionWrap1"
                                               href="#accordion{{str_slug($index)}}"
                                               aria-expanded="false" aria-controls="accordion{{str_slug($index)}}"
{{--                                               class="card-title lead @if ($field != reset($fields )) collapsed @endif">{{str_slug($index)}}</a>--}}
                                               class="card-title lead">{{str_slug($index)}}</span>
                                            <a class="badge badge-primary" href="/farm/{{$index}}/info">Farm Page</a>
                                        </div>
                                        <div id="accordion{{str_slug($index)}}" role="tabpanel"
                                             aria-labelledby="headingCollapse{{str_slug($index)}}"
{{--                                             class="collapse @if ($field == reset($fields )) show @endif" @if ($field != reset($fields )) aria-expanded="false" @endif>--}}
                                             class="collapse show" aria-expanded="true">
                                            <div class="card-body">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <div class="card" style="height: 425px;">
                                                                <div class="card-body">
                                                                    <div class="card-img">
                                                                        <img class="card-img-top img-fluid height-250"
                                                                             src="/app-assets/img/photos/weather-1.jpg"
                                                                             alt="Card image cap">
                                                                        <h4 class="card-title">
                                                                            @if(isset($field['weather'][date('d')]['events']))
                                                                                {{$field['weather'][date('d')]['events']}}
                                                                            @endif
                                                                        </h4>
                                                                        {{--<a class="btn btn-floating halfway-fab bg-primary"><i--}}
                                                                                    {{--class="ft-plus"></i></a>--}}
                                                                    </div>
                                                                    <div class="card-block mt-2">
                                                                        <div class="row">
                                                                            @if(false !== $field['weather'])
                                                                                @foreach($field['weather'] as $data)
                                                                                    <div class="col-2 text-center">
                    <span class="display-block"
                          style="height: 42px;">{{$data['dayString']}}</span>
                                                                                        <i class="wi {{$data['css']}} display-block primary font-large-1 my-3"></i>
                                                                                        <span class="display-block">{{$data['tempMin']}}
                                                                                            °<br>{{$data['tempMax']}}
                                                                                            °</span>
                                                                                    </div>
                                                                                @endforeach
                                                                            @else
                                                                                <div class="col-12 text-center">
                    <span class="display-block">
                    no weather data available
                    </span>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <div class="card" style="height: 425px;">
                                                                <div class="card-body">
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">DAILY DIET</h4>

                                                                        <p class="card-text">Some quick example text to
                                                                            build on
                                                                            the
                                                                            card.</p>
                                                                    </div>
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item">
                                                                            <span class="badge bg-primary float-right">4</span>
                                                                            Protein Milk
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="badge bg-info float-right">2</span>
                                                                            oz
                                                                            Water
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="badge bg-warning float-right">6</span>
                                                                            Vegetable
                                                                            Juice
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="badge bg-success float-right">1</span>
                                                                            Sugar Free
                                                                            Jello-O
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


                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <div class="card" style="height: 535px;">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Statistics</h4>
                                                                </div>
                                                                <div class="card-body">

                                                                    <p class="font-medium-2 text-muted text-center">
                                                                        Hobbies</p>

                                                                    <div id="bar-chart"
                                                                         class="height-250 BarChartShadow BarChart">
                                                                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                             width="100%" height="100%"
                                                                             class="ct-chart-bar"
                                                                             style="width: 100%; height: 100%;">
                                                                            <g class="ct-grids"></g>
                                                                            <g>
                                                                                <g class="ct-series ct-series-a">
                                                                                    <line x1="60.749046875"
                                                                                          x2="60.748046875"
                                                                                          y1="195"
                                                                                          y2="38.33333333333334"
                                                                                          class="ct-bar"
                                                                                          ct:value="53"></line>
                                                                                    <line x1="162.245140625"
                                                                                          x2="162.244140625"
                                                                                          y1="195"
                                                                                          y2="138.33333333333331"
                                                                                          class="ct-bar"
                                                                                          ct:value="23"></line>
                                                                                    <line x1="263.741234375"
                                                                                          x2="263.740234375"
                                                                                          y1="195"
                                                                                          y2="81.66666666666666"
                                                                                          class="ct-bar"
                                                                                          ct:value="40"></line>
                                                                                    <line x1="365.237328125"
                                                                                          x2="365.236328125"
                                                                                          y1="195"
                                                                                          y2="115"
                                                                                          class="ct-bar"
                                                                                          ct:value="30"></line>
                                                                                </g>
                                                                            </g>
                                                                            <g class="ct-labels">
                                                                                <foreignObject style="overflow: visible;"
                                                                                               x="10"
                                                                                               y="220"
                                                                                               width="101.49609375"
                                                                                               height="20"><span
                                                                                            class="ct-label ct-horizontal ct-end"
                                                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                                                            style="width: 101px; height: 20px;">Sport</span>
                                                                                </foreignObject>
                                                                                <foreignObject style="overflow: visible;"
                                                                                               x="111.49609375"
                                                                                               y="220"
                                                                                               width="101.49609375"
                                                                                               height="20"><span
                                                                                            class="ct-label ct-horizontal ct-end"
                                                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                                                            style="width: 101px; height: 20px;">Music</span>
                                                                                </foreignObject>
                                                                                <foreignObject style="overflow: visible;"
                                                                                               x="212.9921875"
                                                                                               y="220"
                                                                                               width="101.49609375"
                                                                                               height="20"><span
                                                                                            class="ct-label ct-horizontal ct-end"
                                                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                                                            style="width: 101px; height: 20px;">Travel</span>
                                                                                </foreignObject>
                                                                                <foreignObject style="overflow: visible;"
                                                                                               x="314.48828125"
                                                                                               y="220"
                                                                                               width="101.49609375"
                                                                                               height="20"><span
                                                                                            class="ct-label ct-horizontal ct-end"
                                                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                                                            style="width: 101px; height: 20px;">News</span>
                                                                                </foreignObject>
                                                                            </g>
                                                                            <defs>
                                                                                <linearGradient id="gradient4" x1="0" y1="1"
                                                                                                x2="0"
                                                                                                y2="0">
                                                                                    <stop offset="0"
                                                                                          stop-color="rgba(238, 9, 121,1)"></stop>
                                                                                    <stop offset="1"
                                                                                          stop-color="rgba(255, 106, 0, 1)"></stop>
                                                                                </linearGradient>
                                                                                <linearGradient id="gradient5" x1="0" y1="1"
                                                                                                x2="0"
                                                                                                y2="0">
                                                                                    <stop offset="0"
                                                                                          stop-color="rgba(0, 75, 145,1)"></stop>
                                                                                    <stop offset="1"
                                                                                          stop-color="rgba(120, 204, 55, 1)"></stop>
                                                                                </linearGradient>
                                                                                <linearGradient id="gradient6" x1="0" y1="1"
                                                                                                x2="0"
                                                                                                y2="0">
                                                                                    <stop offset="0"
                                                                                          stop-color="rgba(132, 60, 247,1)"></stop>
                                                                                    <stop offset="1"
                                                                                          stop-color="rgba(56, 184, 242, 1)"></stop>
                                                                                </linearGradient>
                                                                                <linearGradient id="gradient7" x1="0" y1="1"
                                                                                                x2="0"
                                                                                                y2="0">
                                                                                    <stop offset="0"
                                                                                          stop-color="rgba(155, 60, 183,1)"></stop>
                                                                                    <stop offset="1"
                                                                                          stop-color="rgba(255, 57, 111, 1)"></stop>
                                                                                </linearGradient>
                                                                            </defs>
                                                                        </svg>
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
                                                                            <div class="col text-center">
                    <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2"
                          style="width:10px; height:10px;"></span>
                                                                                <span class="font-large-1 d-block mb-2">17</span>
                                                                                <span>News</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <div class="card" style="height: 535px;">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Project Stats</h4>
                                                                </div>
                                                                <div class="card-body">

                                                                    <p class="font-medium-2 text-muted text-center">Project
                                                                        Tasks</p>

                                                                    <div id="donut-dashboard-chart"
                                                                         class="height-250 donut">
                                                                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                             width="100%" height="100%"
                                                                             class="ct-chart-donut"
                                                                             style="width: 100%; height: 100%;">
                                                                            <g ct:series-name="done"
                                                                               class="ct-series ct-done">
                                                                                <path d="M304.783,113.72A90,90,0,0,0,215.492,35"
                                                                                      class="ct-slice-donut"
                                                                                      ct:value="23"
                                                                                      style="stroke-width: 60px;"></path>
                                                                            </g>
                                                                            <g ct:series-name="progress"
                                                                               class="ct-series ct-progress">
                                                                                <path d="M281.099,186.609A90,90,0,0,0,304.743,113.408"
                                                                                      class="ct-slice-donut"
                                                                                      ct:value="14"
                                                                                      style="stroke-width: 60px;"></path>
                                                                            </g>
                                                                            <g ct:series-name="outstanding"
                                                                               class="ct-series ct-outstanding">
                                                                                <path d="M127.086,141.864A90,90,0,0,0,281.314,186.38"
                                                                                      class="ct-slice-donut"
                                                                                      ct:value="35"
                                                                                      style="stroke-width: 60px;"></path>
                                                                            </g>
                                                                            <g ct:series-name="started"
                                                                               class="ct-series ct-started">
                                                                                <path d="M215.492,35A90,90,0,0,0,127.146,142.173"
                                                                                      class="ct-slice-donut"
                                                                                      ct:value="28"
                                                                                      style="stroke-width: 60px;"></path>
                                                                            </g>
                                                                            <g>
                                                                                <text dx="215.4921875" dy="125"
                                                                                      text-anchor="middle"
                                                                                      class="ct-label">100%
                                                                                </text>
                                                                            </g>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="card-block">
                                                                        <div class="row mb-3">
                                                                            <div class="col">
                                                                                <span class="mb-1 text-muted d-block">23% - Started</span>

                                                                                <div class="progress" style="height: 5px;">
                                                                                    <div class="progress-bar bg-success"
                                                                                         role="progressbar"
                                                                                         style="width: 23%;"
                                                                                         aria-valuenow="23"
                                                                                         aria-valuemin="0"
                                                                                         aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <span class="mb-1 text-muted d-block">14% - In Progress</span>

                                                                                <div class="progress" style="height: 5px;">
                                                                                    <div class="progress-bar bg-amber"
                                                                                         role="progressbar"
                                                                                         style="width: 14%;"
                                                                                         aria-valuenow="14"
                                                                                         aria-valuemin="0"
                                                                                         aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-2">
                                                                            <div class="col">
                                                                                <span class="mb-1 text-muted d-block">35% - Remaining</span>

                                                                                <div class="progress" style="height: 5px;">
                                                                                    <div class="progress-bar bg-deep-purple bg-lighten-1"
                                                                                         role="progressbar"
                                                                                         style="width: 35%;"
                                                                                         aria-valuenow="35"
                                                                                         aria-valuemin="0"
                                                                                         aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <span class="mb-1 text-muted d-block">28% - Done</span>

                                                                                <div class="progress" style="height: 5px;">
                                                                                    <div class="progress-bar bg-blue"
                                                                                         role="progressbar"
                                                                                         style="width: 28%;"
                                                                                         aria-valuenow="28"
                                                                                         aria-valuemin="0"
                                                                                         aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="clear: both;"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 18px;">
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



@endsection
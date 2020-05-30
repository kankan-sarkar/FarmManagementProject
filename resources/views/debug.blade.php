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
                        <div class="col-md-12">
                            <h3>
                                Api Data from Python Panel
                            </h3>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    BigQuery Debug Test
                                </div>
                                @if($sqlResults)
                                    {{dump($sqlResults)}}
                                @endif
                                <form class="card-body p-2" method="post" action="{{route('runSQL')}}">
                                    {{csrf_field()}}
                                    Query : <br/>
                                    <textarea class="form-group input-group" type="text" name="sql"
                                              placeholder="enter your sql query"></textarea>
                                    <button type="submit" class="btn btn-primary">
                                        Run
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        Fields Data
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>x</th>
                                                <th>y</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($fields as $name => $field)
                                                <tr>
                                                    <td>{{$field['id']}}</td>
                                                    <td>{{$name}}</td>
                                                    <td>{{$field['company']}}</td>
                                                    <td>{{$field['x']}}</td>
                                                    <td>{{$field['y']}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        Sendor Plots
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Sensor Plot</th>
                                                <th>Field</th>
                                                <th>x</th>
                                                <th>y</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sensorPlots as $name => $sensorPlot)
                                                <tr>
                                                    <td>{{$sensorPlot['id']}}</td>
                                                    <td>{{$name}}</td>
                                                    <td>{{$sensorPlot['field']}}</td>
                                                    <td>{{$sensorPlot['x']}}</td>
                                                    <td>{{$sensorPlot['y']}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        get city name from lat/lon then query for weather 7 days ahead
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        {{var_dump($weather)}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection

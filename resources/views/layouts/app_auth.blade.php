@extends('layouts.app')


@section('content')

    @include('parts.sidebar')
    @include('parts.navbar')

    <div class="main-panel">
        <div class="main-content">
            @yield('overfarmscontent')
        </div>

    </div>

    @include('parts.footer')

    @include('parts.asside')
@endsection
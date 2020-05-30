<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" id="global_token">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="60x60" href="/app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="/app-assets/img/ico/favicon-32.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="//cdn.rawgit.com/twbs/bootstrap/v4.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.js"></script>

    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po"
            type="text/javascript"></script>
    <script src="/app-assets/vendors/js/core/popper.min.js"></script>
    <script src="/app-assets/vendors/js/chartist.min.js"></script>
    <script src="/app-assets/vendors/js/pace/pace.min.js"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="/app-assets/vendors/js/toastr.min.js" type="text/javascript"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.css"/>

    <style>
        body, html {
            height: 100%;
            width: 100%;
        }

        .gradient-indigo-purple {
            background: linear-gradient(45deg, #013d24, #013d24) repeat-x !important;
        }

        .green-bg {
            background: url('/app-assets/img/bg.png');
        }
    </style>
</head>
<body {!! $attr or "" !!}>
@yield('content')

<!-- Scripts -->


<script src="{{ asset('js/app.js') }}"></script>
<script src="/app-assets/vendors/js/gmaps.min.js" type="text/javascript"></script>
{{--<script src="/app-assets/js/maps.js" type="text/javascript"></script>--}}

<script src="//cdn.rawgit.com/twbs/bootstrap/v4.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.js"></script>

<!-- Theme customizer Starts-->
{{--<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a--}}
{{--class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon"--}}
{{--class="customizer-toggle bg-danger"><i--}}
{{--class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>--}}
{{--<div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">--}}
{{--<h4 class="text-uppercase mb-0 text-bold-400">Customize Admin</h4>--}}
{{--<p>Customize Looks and feels of your profile</p>--}}
{{--<hr>--}}
{{--<!-- Sidebar Options Starts-->--}}
{{--<h6 class="text-center text-bold-500 mb-3 text-uppercase">Styling</h6>--}}
{{--<div class="cz-bg-color">--}}
{{--<div class="row p-1">--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate"--}}
{{--class="gradient-pomegranate d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna"--}}
{{--class="gradient-king-yna d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset"--}}
{{--class="gradient-ibiza-sunset d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr"--}}
{{--class="gradient-flickr d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss"--}}
{{--class="gradient-purple-bliss d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel"--}}
{{--class="gradient-man-of-steel d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love"--}}
{{--class="gradient-purple-love d-block rounded-circle"></span></div>--}}
{{--</div>--}}
{{--<div class="row p-1">--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="black"--}}
{{--class="bg-black d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="white"--}}
{{--class="bg-grey d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="primary"--}}
{{--class="bg-primary d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="success"--}}
{{--class="bg-success d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="warning"--}}
{{--class="bg-warning d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="info"--}}
{{--class="bg-info d-block rounded-circle"></span></div>--}}
{{--<div class="col"><span style="width:20px; height:20px;" data-bg-color="danger"--}}
{{--class="bg-danger d-block rounded-circle"></span></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Sidebar Options Ends-->--}}
{{--<hr>--}}
{{--<!-- Sidebar BG Image Starts-->--}}
{{--<h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Bg Image</h6>--}}
{{--<div class="cz-bg-image row">--}}
{{--<div class="col mb-3"><img src="/app-assets/img/sidebar-bg/01.jpg" width="90" class="rounded"></div>--}}
{{--<div class="col mb-3"><img src="/app-assets/img/sidebar-bg/02.jpg" width="90" class="rounded"></div>--}}
{{--<div class="col mb-3"><img src="/app-assets/img/sidebar-bg/03.jpg" width="90" class="rounded"></div>--}}
{{--<div class="col mb-3"><img src="/app-assets/img/sidebar-bg/04.jpg" width="90" class="rounded"></div>--}}
{{--<div class="col mb-3"><img src="/app-assets/img/sidebar-bg/05.jpg" width="90" class="rounded"></div>--}}
{{--<div class="col mb-3"><img src="/app-assets/img/sidebar-bg/06.jpg" width="90" class="rounded"></div>--}}
{{--</div>--}}
{{--<!-- Sidebar BG Image Ends-->--}}
{{--<hr>--}}
{{--<!-- Sidebar BG Image Toggle Starts-->--}}
{{--<div class="togglebutton">--}}
{{--<div class="switch"><span>Sidebar Bg Image</span>--}}
{{--<div class="float-right">--}}
{{--<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">--}}
{{--<input id="sidebar-bg-img" type="checkbox" checked=""--}}
{{--class="custom-control-input cz-bg-image-display">--}}
{{--<label for="sidebar-bg-img" class="custom-control-label"></label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Sidebar BG Image Toggle Ends-->--}}
{{--<hr>--}}
{{--<!-- Compact Menu Starts-->--}}
{{--<div class="togglebutton">--}}
{{--<div class="switch"><span>Compact Menu</span>--}}
{{--<div class="float-right">--}}
{{--<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">--}}
{{--<input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">--}}
{{--<label for="cz-compact-menu" class="custom-control-label"></label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Compact Menu Ends-->--}}
{{--<hr>--}}
{{--<!-- Sidebar Width Starts-->--}}
{{--<div>--}}
{{--<label for="cz-sidebar-width">Sidebar Width</label>--}}
{{--<select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">--}}
{{--<option value="small">Small</option>--}}
{{--<option value="medium" selected="">Medium</option>--}}
{{--<option value="large">Large</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--<!-- Sidebar Width Ends-->--}}
{{--</div>--}}
{{--</div>--}}
<!-- Theme customizer Ends-->

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        $(window).on("load", function () {

            $.get("{{route('getProfile')}}", function (response) {
                $('.app-sidebar').attr('data-background-color', JSON.parse(response).bg_color);
                $('.sidebar-background').css('background-image', JSON.parse(response).bg_image);
                if (JSON.parse(response).compact === 'false') {
                    $('.nav-toggle').trigger('click');
                    $('.app-sidebar').trigger('mouseleave');
                }
            });


            @if(session('errors'))
            @foreach(session('errors')->all() as $error)
            toastr.error("{{$error}}", "An error occurred ...");
            @endforeach
            @endif
            @if(session('messages'))
            @foreach(session('messages') as $error)
            toastr.success("{{$error}}", "Success!");
            @endforeach
            @endif
        });
    });
</script>

</body>
</html>

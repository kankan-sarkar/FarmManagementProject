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
                        <div data-ps-id="20db7cce-2d2e-8144-dfc4-71872bfe2c78"
                             class="customizer-content p-3 ps-container ps-theme-dark">
                            <h4 class="text-uppercase mb-0 text-bold-400">Customize Admin</h4>
                            <p>Customize Looks and feels of your profile</p>
                            <hr>
                            <!-- Sidebar Options Starts-->
                            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Styling</h6>
                            <div class="cz-bg-color">
                                <div class="row p-1">
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate"
                                                           class="gradient-pomegranate d-block rounded-circle"></span>
                                    </div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna"
                                                           class="gradient-king-yna d-block rounded-circle"></span>
                                    </div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset"
                                                           class="gradient-ibiza-sunset d-block rounded-circle"></span>
                                    </div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr"
                                                           class="gradient-flickr d-block rounded-circle"></span></div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss"
                                                           class="gradient-purple-bliss d-block rounded-circle selected"></span>
                                    </div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel"
                                                           class="gradient-man-of-steel d-block rounded-circle"></span>
                                    </div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love"
                                                           class="gradient-purple-love d-block rounded-circle"></span>
                                    </div>
                                </div>
                                <div class="row p-1">
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="black"
                                                           class="bg-black d-block rounded-circle"></span></div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="white"
                                                           class="bg-grey d-block rounded-circle"></span></div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary"
                                                           class="bg-primary d-block rounded-circle"></span></div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="success"
                                                           class="bg-success d-block rounded-circle"></span></div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning"
                                                           class="bg-warning d-block rounded-circle"></span></div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="info"
                                                           class="bg-info d-block rounded-circle"></span></div>
                                    <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger"
                                                           class="bg-danger d-block rounded-circle"></span></div>
                                </div>
                            </div>
                            <!-- Sidebar Options Ends-->
                            <hr>
                            <!-- Sidebar BG Image Starts-->
                            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Bg Image</h6>
                            <div class="cz-bg-image row">
                                <div class="col mb-3"><img src="/app-assets/img/sidebar-bg/01.jpg" width="90"
                                                           class="rounded selected"></div>
                                <div class="col mb-3"><img src="/app-assets/img/sidebar-bg/02.jpg" width="90"
                                                           class="rounded"></div>
                                <div class="col mb-3"><img src="/app-assets/img/sidebar-bg/03.jpg" width="90"
                                                           class="rounded"></div>
                                <div class="col mb-3"><img src="/app-assets/img/sidebar-bg/04.jpg" width="90"
                                                           class="rounded"></div>
                                <div class="col mb-3"><img src="/app-assets/img/sidebar-bg/05.jpg" width="90"
                                                           class="rounded"></div>
                                <div class="col mb-3"><img src="/app-assets/img/sidebar-bg/06.jpg" width="90"
                                                           class="rounded"></div>
                            </div>
                            <!-- Sidebar BG Image Ends-->
                        {{--<hr>--}}
                        <!-- Sidebar BG Image Toggle Starts-->
                        {{--<div class="togglebutton">--}}
                        {{--<div class="switch"><span>Sidebar Bg Image</span>--}}
                        {{--<div class="float-right">--}}
                        {{--<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">--}}
                        {{--<input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">--}}
                        {{--<label for="sidebar-bg-img" class="custom-control-label"></label>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <!-- Sidebar BG Image Toggle Ends-->
                            <hr>
                            <!-- Compact Menu Starts-->
                            <div class="togglebutton">
                                <div class="switch"><span>Compact Menu</span>
                                    <div class="float-right">
                                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                            <input id="cz-compact-menu" type="checkbox"
                                                   class="custom-control-input cz-compact-menu" checked>
                                            <label for="cz-compact-menu" class="custom-control-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Compact Menu Ends-->
                            <hr>
                            <!-- Sidebar Width Starts-->
                        {{--<div>--}}
                        {{--<label for="cz-sidebar-width">Sidebar Width</label>--}}
                        {{--<select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">--}}
                        {{--<option value="small">Small</option>--}}
                        {{--<option value="medium" selected="">Medium</option>--}}
                        {{--<option value="large">Large</option>--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        <!-- Sidebar Width Ends-->
                            {{--<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>--}}
                            <button id="saveProfile" class="btn btn-primary col">Save</button>

                        </div>


                    </div>

                    @include('parts.footer')
                </div>
            </div>


            @include('parts.asside')

            <script>
                document.addEventListener("DOMContentLoaded", function (event) {

                    $(window).on("load", function () {
                        $("#saveProfile").click(function () {
                            $("#saveProfile").attr('disabled', 'disabled');
                            var profile = {
                                'uid': {{$id}},
                                'bg_color': $('.app-sidebar').attr('data-background-color'),
                                'bg_image': $('.sidebar-background').css('background-image'),
                                'compact': $('.cz-compact-menu').prop('checked'),
                                '_token': $("#global_token").attr('content')
                            };
                            $.post('/settings', profile, function (data) {
                                $("#saveProfile").attr('disabled', false);
                            });
                        });
                    });

                });
            </script>
@endsection
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
                    {{--<div class="row">--}}


                    <h2>Contact Us</h2>
                    <p>Feel free to shout us by filling the contact form or visiting our social network sites like
                        Fackebook,Whatsapp,Twitter.</p>
                    <div class="row">
                        <div class="col-md-8">
                            <form class="form-horizontal" method="post" action="{{route('contactUsPost')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputName2">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName2"
                                           placeholder="your full name" name="name" value="{{old('name')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                           placeholder="jane.doe@example.com" name="email" value="{{old('email')}}">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputText">Your Message</label>
                                    <textarea class="form-control" placeholder="Description"
                                              name="message">{{old('message')}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>

                            <hr>
                            <h3>Our Social Sites</h3>
                            <ul class="list-inline banner-social-buttons">
                                <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span
                                                    class="network-name">Twitter</span></i></a></li>
                                <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span
                                                    class="network-name">Facebook</span></i></a></li>
                                <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span
                                                    class="network-name">Youtube</span></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <p>
                                Precision Agriculture Robotics is situated in Technology Park Malaysia, Bukit Jalil, at
                                the Biotechnology Incubation Centre – A quiet, out-of-the-way area that allows us to
                                conduct flight and sensor testing as required, without endangering lives or property.
                            </p>
                            <h3>Address</h3>
                            <div class="map">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=Laboratory%205%2C%20Biotechnology%20Incubation%20Centre%2C%20Technology%20Park%20Malaysia&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0" width="360"></iframe>
                                    <style>
                                        .mapouter {
                                            /*text-align: right;*/
                                            width: 100%;
                                        }

                                        .gmap_canvas {
                                            /*overflow: hidden;*/
                                            /*background: none !important;*/
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                            <p>
                                Laboratory 5, Biotechnology Incubation Centre, Technology Park Malaysia, Lebuhraya Sg.
                                Besi – Puchong, Bukit Jalil, 57000 Kuala Lumpur, Malaysia
                            </p>
                            <h3>Email:</h3>
                            <p>
                                info@pragbotix.com
                            </p>
                        </div>
                    </div>

                    {{--</div>--}}


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


@endsection
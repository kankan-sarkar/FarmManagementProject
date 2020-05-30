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

                            <div class="form-group">
                                <form class="row" method="post" action="{{route('addACLUserPost')}}">
                                    {{csrf_field()}}
                                    <div class="col-10 offset-1">
                                        <h3>
                                            Add new user
                                        </h3>
                                    </div>
                                    <div class="col-10 offset-1">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Name" required="required" value="{{old('name')}}">
                                    </div>
                                    <div class="col-10 offset-1">
                                        <input type="text" class="form-control" name="email"
                                               placeholder="Email" required="required" value="{{old('email')}}">
                                    </div>
                                    <div class="col-10 offset-1">
                                        <input type="password" class="form-control" name="password"
                                               placeholder="Password" required="required" value="{{old('password')}}">
                                    </div>
                                    <div class="col-10 offset-1">
                                        <input type="password" class="form-control" name="confirmPassword"
                                               placeholder="Confirm Password" required="required" value="{{old('confirmPassword')}}">
                                    </div>
                                    <div class="col-10 offset-1">
                                        <span>Administrator account</span>
                                        <input type="checkbox" class="switchery" name="admin" value="1">
                                    </div>
                                    <div class="col-6 offset-3">
                                        <button type="submit" class="col-12 btn btn-primary">
                                            Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @include('parts.footer')
            </div>
        </div>


    @include('parts.asside')
@endsection
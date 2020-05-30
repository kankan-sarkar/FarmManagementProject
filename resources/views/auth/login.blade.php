@extends('layouts.app',['attr' => 'data-col="1-column" class="green-bg 1-column  blank-page blank-page"'])

@section('content')

    <div class="wrapper nav-collapsed menu-collapsed">
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper"><!--Login Page Starts-->
                    <section id="login">
                        <div class="container-fluid">
                            <div class="row full-height-vh">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                    <div class="card gradient-indigo-purple text-center width-400">
                                        <div class="card-img overlap">
                                            <img alt="element 06" class="mb-1" src="https://www.pragbotix.com/wp-content/uploads/2018/09/PragbotixLogo2.png" width="190" style="    margin-top: 20px;">
                                        </div>
                                        <div class="card-body">
                                            <div class="card-block">
                                                <h2 class="white">Login</h2>
                                                <form action="{{ route('login') }}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <div class="col-md-12">
                                                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required >

                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <div class="col-md-12">
                                                            <input type="password" class="form-control" name="password" id="inputPass" placeholder="Password" required>

                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-3">
                                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="rememberme">
                                                                    <label class="custom-control-label float-left white" for="rememberme">Remember Me</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-pink btn-block btn-raised">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="float-left"><a href="{{ route('password.request') }}" class="white">Recover Password</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Login Page Ends-->
                </div>
            </div>
        </div>
    </div>

@endsection

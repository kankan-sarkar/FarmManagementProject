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
                        <div class="col-md-12 table-responsive">
                            <h3>
                                Assign Farms to Users
                            </h3>
                            <a href="{{route('addACLUser')}}" class="btn btn-primary float-right">
                                Add User
                            </a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            @if(!$user->admin)
                                                <a href="{{route('manageACL',$user->id)}}" class="btn btn-primary"><i
                                                            class="ft-settings"></i> Manage</a>
                                                <a href="{{route('settings',$user->id)}}" class="btn btn-primary"><i class="ft-settings"></i></a>
                                                <a onclick="return confirm('Are you sure you want to remove this user?');"
                                                   href="{{route('removeACLUser',$user->id)}}" class="btn btn-danger"><i
                                                            class="fa-remove fa"></i></a>
                                            @else
                                                <button class="btn btn-primary" disabled="disabled">Admin Account
                                                </button>
                                                <a href="{{route('settings',$user->id)}}" class="btn btn-primary"><i class="ft-settings"></i></a>
                                                <a onclick="return confirm('Are you sure you want to remove this user?');"
                                                   href="{{route('removeACLUser',$user->id)}}" class="btn btn-danger"><i
                                                            class="fa-remove fa"></i></a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @include('parts.footer')
            </div>
        </div>


    @include('parts.asside')
@endsection
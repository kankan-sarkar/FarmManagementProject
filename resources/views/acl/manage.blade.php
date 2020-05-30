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
                    <form class="row" action="{{route('collectACL')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="userId" value="{{$user->id}}">
                        <div class="col-md-12 table-responsive">
                            <p>
                                Permit farms view access to {{$user->email}}
                            </p>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th class="d-none d-sm-table-cell">Latitude</th>
                                    <th class="d-none d-sm-table-cell">Longitude</th>
                                    <th>Has Access?</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fields as $fieldName => $field)
                                    <tr>
                                        <td>{{$fieldName}}</td>
                                        <td>{{$field['company']}}</td>
                                        <td class="d-none d-sm-table-cell">{{$field['x']}}</td>
                                        <td class="d-none d-sm-table-cell">{{$field['y']}}</td>
                                        <td>
                                            <input type="checkbox" name="aclCollection[{{$fieldName}}]"
                                                   class="switchery"
                                                   @if($user->hasACL($fieldName)) checked @endif/>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6 offset-3">
                            <button class="col-12 btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @include('parts.footer')
        </div>
    </div>

    @include('parts.asside')

    <script src="/app-assets/vendors/js/switchery.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/switch.min.js" type="text/javascript"></script>
@endsection
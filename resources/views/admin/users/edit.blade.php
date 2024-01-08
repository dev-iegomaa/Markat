@extends('admin.assets.master')

@section('title')
    USERS | INDEX
@endsection

@push('css')
    <link href="{{asset('adminAssets/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('adminAssets/assets/css/forms/theme-checkbox-radio.css')}}">
    <link href="{{asset('adminAssets/assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container">

            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Update User</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('admin.users.update')}}" method="post" class="widget-content widget-content-area" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('admin.users._form')
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script src="{{asset('adminAssets/plugins/highlight/highlight.pack.js')}}"></script>

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{asset('adminAssets/assets/js/scrollspyNav.js')}}"></script>
    <script>
        checkall('todoAll', 'todochkbox');
        $('[data-toggle="tooltip"]').tooltip()
    </script>
@endpush

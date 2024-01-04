@extends('admin.assets.master')

@section('title')
    SETTING | INDEX
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

                    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Setting Table</h4>
                                        <button class="btn btn-primary">
                                            <a href="{{route('admin.setting.create')}}" class="text-white">Create New Slider</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover mb-4">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Type</th>
                                            <th>Value</th>
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($settings as $key => $setting)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$setting->type}}</td>
                                                <td>
                                                    @if(strstr($setting->value, 'uploaded/setting'))
                                                        <img width="100" src="{{asset($setting->value)}}" alt="setting image">
                                                    @else
                                                        {{$setting->value}}
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.setting.delete')}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{$setting->id}}">
                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.setting.edit')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$setting->id}}">
                                                        <input type="submit" class="btn btn-warning" value="Update">
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
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

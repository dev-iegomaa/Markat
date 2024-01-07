@extends('admin.assets.master')

@section('title')
    ABOUT | INDEX
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
                                        <h4>About Table</h4>
                                        @if($abouts->count() === 0)
                                            <button class="btn btn-primary">
                                                <a href="{{route('admin.about.create')}}" class="text-white">Create New About</a>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover mb-4">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Paragraph</th>
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($abouts as $key => $about)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>
                                                    <img width="100" src="{{asset($about->image)}}" alt="about image">
                                                </td>
                                                <td>{{$about->paragraph}}</td>
                                                <td>
                                                    <form action="{{route('admin.about.delete')}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{$about->id}}">
                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </form>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning" href="{{route('admin.about.edit', [$about->id])}}">Update</a>
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

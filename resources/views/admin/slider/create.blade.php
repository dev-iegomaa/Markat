@extends('admin.assets.master')

@section('title')
    SLIDER | CREATE
@endsection

@push('css')
    <link href="{{asset('adminAssets/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('adminAssets/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminAssets/assets/css/forms/switches.css')}}">
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{asset('adminAssets/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminAssets/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
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
                                        <h4>Create New Slider</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('admin.slider.insert')}}" method="post" class="widget-content widget-content-area" enctype="multipart/form-data">
                                @csrf
                                @include('admin.slider._form')
                                <input type="submit" class="btn btn-primary" value="Send">
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
    <script src="{{asset('adminAssets/assets/js/scrollspyNav.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('adminAssets/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('adminAssets/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('adminAssets/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
@endpush

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Title</span>
    </div>
    <input class="@error('title') is-invalid @enderror form-control" type="text" name="title" value="{{value(old('title', $setting->title ?? ''))}}">
</div>

@error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Email</span>
    </div>
    <input class="@error('email') is-invalid @enderror form-control" type="text" name="email" value="{{value(old('email', $setting->email ?? ''))}}">
</div>

@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Phone</span>
    </div>
    <input class="@error('phone') is-invalid @enderror form-control" type="text" name="phone" value="{{value(old('phone', $setting->phone ?? ''))}}">
</div>

@error('phone')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Tracking Apis</span>
    </div>
    <input class="@error('tracking_apis') is-invalid @enderror form-control" type="text" name="tracking_apis" value="{{value(old('tracking_apis', $setting->tracking_apis ?? ''))}}">
</div>

@error('tracking_apis')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div id="fuSingleFile" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Upload Logo</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="custom-file-container" data-upload-id="myFirstImage">
                <label>Upload About Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file" >
                    <input class="custom-file-container__custom-file__custom-file-input @error('logo') is-invalid @enderror form-control" type="file" name="logo">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>
</div>

@error('logo')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

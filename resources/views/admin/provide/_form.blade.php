<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Title</span>
    </div>
    <input class="@error('title') is-invalid @enderror form-control" type="text" name="title" value="{{value(old('title', $provide->title ?? ''))}}">
</div>

@error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Paragraph</span>
    </div>
    <input class="@error('paragraph') is-invalid @enderror form-control" type="text" name="paragraph" value="{{value(old('paragraph', $provide->paragraph ?? ''))}}">
</div>

@error('paragraph')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group row mb-4">
    <label class="col-sm-2 col-form-label text-dark">Category</label>
    <div class="col-sm-10">
        <select name="category_id" class="@error('title') is-invalid @enderror form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>
</div>

@error('category_id')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div id="fuSingleFile" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Upload Image</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="custom-file-container" data-upload-id="myFirstImage">
                <label>Upload About Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file" >
                    <input class="custom-file-container__custom-file__custom-file-input @error('image') is-invalid @enderror form-control" type="file" name="image">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>
</div>

@error('image')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

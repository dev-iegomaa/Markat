<div class="form-group row mb-4">
    <label class="col-sm-2 col-form-label text-dark">Provide</label>
    <div class="col-sm-10">
        <select name="provide_id" class="@error('provide_id') is-invalid @enderror form-control">
            @foreach($provides as $provide)
                <option value="{{$provide->id}}">{{$provide->title}}</option>
            @endforeach
        </select>
    </div>
</div>

@error('provide_id')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="widget-content widget-content-area">
    <select name="services_id[]" class="@error('service_id') is-invalid @enderror custom-select" multiple="">
        @foreach($services as $service)
        <option value="{{$service->id}}">{{$service->service}}</option>
        @endforeach
    </select>
</div>

@error('service_id')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

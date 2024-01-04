<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Service</span>
    </div>
    <input type="text" name="service" class="@error('service') is-invalid @enderror form-control" value="{{value(old('service', $service->service ?? ''))}}">
</div>

@error('service')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

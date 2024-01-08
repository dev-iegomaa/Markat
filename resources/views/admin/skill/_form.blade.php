<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Skill</span>
    </div>
    <input class="@error('skill') is-invalid @enderror form-control" type="text" name="skill" value="{{value(old('skill', $skill->skill ?? ''))}}">
</div>

@error('skill')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Progress</span>
    </div>
    <input class="@error('progress') is-invalid @enderror form-control" type="number" name="progress" value="{{value(old('progress', $skill->progress ?? ''))}}">
</div>

@error('progress')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

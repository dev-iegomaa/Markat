<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Username</span>
    </div>
    <input class="@error('name') is-invalid @enderror form-control" type="text" name="name" value="{{value(old('name', $user->name ?? ''))}}">
</div>

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Email</span>
    </div>
    <input class="@error('email') is-invalid @enderror form-control" type="text" name="email" value="{{value(old('email', $user->email ?? ''))}}">
</div>

@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Password</span>
    </div>
    <input class="@error('password') is-invalid @enderror form-control" type="text" name="password" value="{{value(old('password', ''))}}">
</div>

@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

@extends('layouts.admin')
@section('content')

<h1>{{ __('New user') }}</h1>

<form method="POST" action="{{ route('admin_users_path') }}">
@csrf
<p>
    <label for="name">{{ __('Name') }}</label><br>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>

<p>
    <label for="email">{{ __('E-Mail Address') }}</label><br>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>

<p>
    <label for="password">{{ __('Password') }}</label><br>


        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

</p>

<p>
    <label for="password_confirmation">{{ __('Confirm Password') }}</label><br>

        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</p>

<p>
    <input type="submit" name="commit" value="{{ __('Create User') }}" data-disable-with="Create User" class="btn btn-success"/>
</p>

</form>

<a href="{{ route('admin_users_path') }}">Back</a>

@endsection

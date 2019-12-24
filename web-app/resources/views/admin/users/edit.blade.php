@extends('layouts.admin')
@section('content')


<h1>{{ __('Edit user') }}</h1>

{{-- @include('users._form') --}}
<form action="{{ route('admin_user_path', $user) }}" accept-charset="UTF-8" method="post">
    @method('PATCH')
    @csrf

<p>
    <label for="name">{{ __('Name') }}</label><br>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>

<p>
    <label for="email">{{ __('E-Mail Address') }}</label><br>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>

<p>
    <input type="submit" name="commit" value="{{ __('Update Article') }}" data-disable-with="Update Article" class="btn btn-success"/>
</p>

</form>

<a href="{{ route('admin_users_path') }}">Back</a>

@endsection

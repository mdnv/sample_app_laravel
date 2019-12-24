@extends('layouts.app')

@section('content')
<div class="center jumbotron">
    <h1>Welcome to the Sample App</h1>

    <h2>
      This is the home page for the
      <a href="https://laravel.com/">Laravel</a>
      sample application.
    </h2>

    @if (Route::has('register'))
      <a class="btn btn-lg btn-primary" href="{{ route('register') }}">{{ __('Sign up now!') }}</a>
    @endif
</div>

<a href="http://rubyonrails.org/"><img alt="Laravel logo" width="200px" src="{{ asset('images/laravel.png') }}" /></a>
@endsection

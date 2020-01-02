@extends('layouts.app')

@section('content')
<!--       <div class="row">
  <aside class="col-md-4">
    <section class="user_info">
      <h1>
        <img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=80" />
        Example User
      </h1>
    </section>
    <section class="stats">
      <div class="stats">
  <a href="/users/1/following">
    <strong id="following" class="stat">
      49
    </strong>
    following
</a>  <a href="/users/1/followers">
    <strong id="followers" class="stat">
      38
    </strong>
    followers
</a></div>

    </section>
  </aside>
  <div class="col-md-8">

      <h3>Microposts (50)</h3>
      <ol class="microposts">
<li id="micropost-295">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Corrupti illo fugit architecto praesentium.

  </span>
  <span class="timestamp">
    Posted about 1 hour ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/295">delete</a>
  </span>
</li>
<li id="micropost-289">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Sapiente ut voluptas ut vel.

  </span>
  <span class="timestamp">
    Posted about 1 hour ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/289">delete</a>
  </span>
</li>
<li id="micropost-283">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Aut neque officiis commodi repellendus.

  </span>
  <span class="timestamp">
    Posted about 1 hour ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/283">delete</a>
  </span>
</li>

      </ol>

    <nav>
    <ul class="pagination">
      <li class="page-item">
  <a class="page-link" href="/users/1">&laquo; First</a>
</li>

      <li class="page-item">
  <a rel="prev" class="page-link" href="/users/1">&lsaquo; Prev</a>
</li>

            <li class="page-item">
    <a rel="prev" class="page-link" href="/users/1">1</a>
  </li>

            <li class="page-item active">
    <a data-remote="false" class="page-link">2</a>
  </li>


      <li class="page-item">
  <a rel="next" class="page-link" href="/users/1?page=2">Next &rsaquo;</a>
</li>

      <li class="page-item">
  <a class="page-link" href="/users/1?page=2">Last &raquo;</a>
</li>

    </ul>
  </nav>

  </div>
</div> -->

@guest
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

  <a href="http://rubyonrails.org/"><img alt="Laravel logo" width="200px" src="{{ asset('images/laravel.svg') }}" /></a>
@else

{{-- <div class="row">
  <aside class="col-md-4">
    <section class="user_info">
      @include('shared._user_info')
    </section>
    <section class="stats">
      @include('shared._stats')
    </section>
    <section class="micropost_form">
      @include('shared._micropost_form')
    </section>
  </aside>
  <div class="col-md-8">
    <h3>Micropost Feed</h3>
    @include('shared._feed')
  </div>
</div> --}}

<div class="row">
    <aside class="col-md-4">
      <section class="user_info">
        @include('shared._user_info')
      </section>
      <section class="stats">
        @include('shared._stats')
      </section>
      <section class="micropost_form">
        @include('shared._micropost_form_home')
      </section>
    </aside>
    <div class="col-md-8">
      <h3>Micropost Feed</h3>
      @include('shared._feed_home')





    </div>
  </div>

@endguest
@endsection

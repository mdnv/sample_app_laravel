@extends('layouts.app')
@section('title', $title)
@section('content')
<div class="row">
  <aside class="col-md-4">
    <section class="user_info">
      <img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=80" />
      <h1>{{ $user->name }}</h1>
      <span><a href="{{ route('user_path',$user->id)}}">view my profile</a></span>
      <span><b>Microposts:</b> {{ $user->comments->count() }}</span>
    </section>
    <section class="stats">
      @include('shared._stats')

        <div class="user_avatars">
          @if(!empty($users))
          @foreach ($users as $user)
            <a href="{{ route('user_path',$user->id)}}"><img alt="{{ $user->name }}" class="gravatar" src="https://secure.gravatar.com/avatar/2065436fdfe2d27dc7f06b6787a4a1af?s=30" /></a>
          @endforeach
          @endif
        </div>
    </section>
  </aside>
  <div class="col-md-8">
    <h3>{{ $title }}</h3>
      @if(!empty($users))
      <ul class="users follow">
        @include('users._user')
      </ul>
      @endif
  <nav>
    <ul class="pagination">


            <li class="page-item active">
    <a data-remote="false" class="page-link">1</a>
  </li>

            <li class="page-item">
    <a rel="next" class="page-link" href="/users/1/following?page=2">2</a>
  </li>

      <li class="page-item">
  <a rel="next" class="page-link" href="/users/1/following?page=2">Next &rsaquo;</a>
</li>

      <li class="page-item">
  <a class="page-link" href="/users/1/following?page=2">Last &raquo;</a>
</li>

    </ul>
  </nav>

  </div>
</div>
@endsection

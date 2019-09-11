@extends('layouts.app')
@section('content')
<div class="container">
<h1>Edit user</h1>

<form action="/users/{{ $user->id }}" accept-charset="UTF-8" method="post">
  @method('PATCH')
  @csrf

  @if ($errors->any())
  <div id="error_explanation">
    <h2>
      {{ $errors->count() }} errors prohibited
      this user from being saved:
    </h2>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <p>
    <label for="user_name">Name</label><br>
    <input type="text" value="{{ $user->name }}" name="name" id="user_name" />
  </p>

  <p>
    <label for="user_email">Email</label><br>
    <input type="email" value="{{ $user->email }}" name="email" id="user_email" />
  </p>

  <p>
    <input type="submit" name="commit" value="Update User" data-disable-with="Update Article" />
  </p>

</form>

<a href="{{ route('users_path') }}">Back</a>
</div>
@endsection

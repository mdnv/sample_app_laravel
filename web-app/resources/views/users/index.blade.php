@extends('layouts.app')
@section('content')

<h1>All users</h1>


{{ $users->onEachSide(5)->links() }}

<ul class="users">
  @include('users._user')
</ul>

{{ $users->onEachSide(5)->links() }}
@endsection

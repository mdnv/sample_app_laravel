@extends('layouts.app')
@section('content')

<h1>All users</h1>


  <nav>
    <ul class="pagination">
      <li class="page-item">
  <a class="page-link" href="/users">&laquo; First</a>
</li>

      <li class="page-item">
  <a rel="prev" class="page-link" href="/users">&lsaquo; Prev</a>
</li>

            <li class="page-item">
    <a rel="prev" class="page-link" href="/users">1</a>
  </li>

            <li class="page-item active">
    <a data-remote="false" class="page-link">2</a>
  </li>

            <li class="page-item">
    <a rel="next" class="page-link" href="/users?page=3">3</a>
  </li>

            <li class="page-item">
    <a class="page-link" href="/users?page=4">4</a>
  </li>

      <li class="page-item">
  <a rel="next" class="page-link" href="/users?page=3">Next &rsaquo;</a>
</li>

      <li class="page-item">
  <a class="page-link" href="/users?page=4">Last &raquo;</a>
</li>

    </ul>
  </nav>


<ul class="users">
  @foreach ($users as $user)
  <li>
  <img alt="{{ $user->name }}" class="gravatar" src="https://secure.gravatar.com/avatar/949272e115f08275bdaab4e619b918fc?s=50" />
  <a href="{{ route('user_path',$user->id)}}">{{ $user->name }}</a>
    | <a data-confirm="You sure?" rel="nofollow" data-method="delete" href=""
      onclick="event.preventDefault();
                    document.getElementById('{{ url('logout-form' . $user->id) }}').submit();">
      {{ __('delete') }}
    </a>
      <form id="{{ url('logout-form' . $user->id) }}" action="{{ route('user_path', $user->id)}}" method="post" style="display: none;">
              @csrf
              @method('DELETE')
              <input type="submit" value="Destroy" />
      </form>
</li>
@endforeach
</ul>


  <nav>
    <ul class="pagination">
      <li class="page-item">
  <a class="page-link" href="/users">&laquo; First</a>
</li>

      <li class="page-item">
  <a rel="prev" class="page-link" href="/users">&lsaquo; Prev</a>
</li>

            <li class="page-item">
    <a rel="prev" class="page-link" href="/users">1</a>
  </li>

            <li class="page-item active">
    <a data-remote="false" class="page-link">2</a>
  </li>

            <li class="page-item">
    <a rel="next" class="page-link" href="/users?page=3">3</a>
  </li>

            <li class="page-item">
    <a class="page-link" href="/users?page=4">4</a>
  </li>

      <li class="page-item">
  <a rel="next" class="page-link" href="/users?page=3">Next &rsaquo;</a>
</li>

      <li class="page-item">
  <a class="page-link" href="/users?page=4">Last &raquo;</a>
</li>

    </ul>
  </nav>

@endsection

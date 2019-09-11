@extends('layouts.app')
@section('content')
<div class="container">
<h1>All Users</h1>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th colspan="3"></th>
  </tr>

  @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td><a href="{{ route('user_path',$user->id)}}">Show</a></td>
      <td><a href="{{ route('edit_user_path',$user->id)}}">Edit</a></td>
      <td>
      @if(Auth::user()->admin && Auth::user()->id != $user->id)
        <form action="{{ route('user_path', $user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Destroy" />
        </form>
      @endif
      </td>
    </tr>
  @endforeach
</table>
</div>
@endsection

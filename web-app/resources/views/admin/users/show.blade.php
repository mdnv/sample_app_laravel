@extends('layouts.admin')
@section('content')
<p><strong>id:</strong>{{ $user->id }}</p>
<p><strong>name:</strong>{{ $user->name }}</p>
<p><strong>email:</strong>{{ $user->email }}</p>
<p><strong>email_verified_at:</strong>{{ $user->email_verified_at }}</p>
<p><strong>password:</strong>{{ $user->password }}</p>
<p><strong>remember_token:</strong>{{ $user->remember_token }}</p>
<p><strong>admin:</strong>{{ $user->admin }}</p>
<p><strong>created_at:</strong>{{ $user->created_at }}</p>
<p><strong>updated_at:</strong>{{ $user->updated_at }}</p>

<h2>Comments</h2>

@include('admin.comments._comment')

<h2>Add a comment:</h2>
@include('admin.comments._form')

<a href="{{ route('admin_edit_user_path',$user->id)}}">Edit</a> |
<a href="{{ route('admin_users_path') }}">Back</a>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
<p>
  <strong>Name:</strong>
  {{ $user->name }}
</p>

<p>
  <strong>Email:</strong>
  {{ $user->email }}
</p>

@include('shared._stats')

@if (Auth::user())
      @include('users._follow_form')
@endif


<h2>Comments</h2>

@include('comments._comment')

<h2>Add a comment:</h2>
@include('comments._form')

</div>
@endsection

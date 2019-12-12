@extends('layouts.app')
@section('content')
 <div class="row">
  <aside class="col-md-4">
    <section class="user_info">
      <h1>
        <img alt="{{ $user->name }}" class="gravatar" src="https://secure.gravatar.com/avatar/4ad56d257f750ded65c233f2c591f9c0?s=80" />
        {{ $user->name }}
      </h1>
    </section>
@include('shared._stats')

    </section>
  </aside>
  <div class="col-md-8">

  @if (Auth::user())
      @include('users._follow_form')
@endif

      <h3>Microposts ({{ $user->comments->count() }})</h3>
      <ol class="microposts">
        @include('comments._comment')
      </ol>

  {{ $comments->onEachSide(5)->links() }}

  <h2>Add a micropost:</h2>
@include('comments._form')
@endsection

  </div>
</div>











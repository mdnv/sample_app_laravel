{{-- @if(Auth::user()->id != $user->id)
  <div id="follow_form">
    @if($user->followings->count() == 1)
        @include('users._unfollow')
    @else
        @include('users._follow')
    @endif
  </div>
@endif --}}

@if(Auth::user()->id != $user->id)
  <div id="follow_form">
    @empty(Auth::user()->following($user))
        @include('users._follow')

    @else
         @include('users._unfollow')
    @endempty
  </div>
@endif

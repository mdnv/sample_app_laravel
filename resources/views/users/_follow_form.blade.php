@if(Auth::user()->id != $user->id)
  <div id="follow_form">
    @if($user->followings->count() == 1)
        @include('users._unfollow')
    @else
        @include('users._follow')
    @endif
  </div>
@endif

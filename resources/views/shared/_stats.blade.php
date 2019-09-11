 @if(empty($user))
 {{ $user = Auth::user() }}
 @endif
<div class="stats">
  <a href="{{ route('following_user_path',$user->id)}}">
    <strong id="following" class="stat">
      {{ $user->followings->count() }}
    </strong>
    following
  </a>
  <a href="{{ route('followers_user_path',$user->id)}}">
    <strong id="followers" class="stat">
      {{ $user->followers->count() }}
    </strong>
    followers
  </a>
</div>

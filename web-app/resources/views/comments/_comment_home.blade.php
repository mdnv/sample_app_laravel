@foreach ($feed_items as $comment)
<li id="micropost-303">
  <a href="{{ route('user_path',$comment->user->id)}}">{!! gravatar_for($comment->user) !!}</a>
  <span class="user"><a href="{{ route('user_path',$comment->user)}}">{{ $comment->user->name }}</a></span>
  <span class="content">
    {{ $comment->body }}
    {{-- <img src="https://mysterious-atoll-47182.herokuapp.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBCdz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--ef3e7475ea0ed48ce6b8ee444436696d74915996/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwQXZRQmFRTDBBUT09IiwiZXhwIjpudWxsLCJwdXIiOiJ2YXJpYXRpb24ifX0=--17d173499414a6796536cb2b2ba404cfe7ebd4b4/no_gravatar.gif" /> --}}
  </span>
  <span class="timestamp">
    {{-- Posted 29 days ago. --}}Posted {{ $comment->created_at->diffForHumans() }}
    @if(Auth::user()->id == $comment->user->id)
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href=""
        onclick="event.preventDefault();
                      document.getElementById('{{ url('logout-form' . $comment->id) }}').submit();">
        {{ __('delete') }}
      </a>
      <form id="{{ url('logout-form' . $comment->id) }}" action="{{ route('user_comment_path',[$comment->id,Auth::user()->id])}}" method="post" style="display: none;">
              @csrf
              @method('DELETE')
      </form>
    @endif
  </span>
</li>
@endforeach
{{--     <li id="micropost-240">
  <a href="/users/6"><img alt="Mrs. Roseanna Kreiger" class="gravatar" src="https://secure.gravatar.com/avatar/b0e247198b823a9bd5908730477b2cc2?s=50" /></a>
  <span class="user"><a href="/users/6">Mrs. Roseanna Kreiger</a></span>
  <span class="content">
    Voluptatem nesciunt odio laboriosam minus.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li> --}}

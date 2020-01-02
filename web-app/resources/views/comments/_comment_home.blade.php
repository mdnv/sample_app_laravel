@foreach ($feed_items as $comment)
<li id="micropost-303">
  <a href="{{ route('user_path',$comment->user->id)}}">{!! gravatar_for($comment->user) !!}</a>
  <span class="user"><a href="{{ route('user_path',$comment->user)}}">{{ $comment->user->name }}</a></span>
  <span class="content">
    {{ $comment->body }}
    @if(!empty($comment->avatar))
    <img src="/storage/avatars/{{ $comment->avatar }}" />
    @endif
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

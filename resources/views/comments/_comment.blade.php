@if(empty($user))
 {{ $user = Auth::user() }}
@endif
@foreach ($user->comments as $comment)
<li id="micropost-{{ $comment->id }}">
  <a href="{{ route('user_path',$user->id)}}"><img alt="{{ $comment->commenter }}" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="{{ route('user_path',$user->id)}}">{{ $comment->commenter }}</a></span>
  <span class="content">
    {{ $comment->body }}

  </span>
  <span class="timestamp">
    Posted about 5 hours ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href=""
      onclick="event.preventDefault();
                    document.getElementById('{{ url('logout-form' . $comment->id) }}').submit();">
      {{ __('delete') }}
    </a>
      <form id="{{ url('logout-form' . $comment->id) }}" action="{{ route('user_comment_path',[$comment->id,$user->id])}}" method="post" style="display: none;">
              @csrf
              @method('DELETE')
      </form>
  </span>
</li>

@endforeach





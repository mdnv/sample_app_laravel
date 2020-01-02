@if(empty($user))
 {{ $user = Auth::user() }}
@endif
@foreach ($user->comments as $comment)
<li id="micropost-{{ $comment->id }}">
  <a href="{{ route('user_path',$user->id)}}">{!! gravatar_for($user) !!}</a>
  <span class="user"><a href="{{ route('user_path',$user->id)}}">{{ $comment->commenter }}</a></span>
  <span class="content">
    {{ $comment->body }}
    @if(!empty($comment->avatar))
    <img src="/storage/avatars/{{ $comment->avatar }}" />
    @endif
  </span>
  <span class="timestamp">
    Posted about 5 hours ago.
    @if(Auth::user()->id == $comment->user->id)
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href=""
      onclick="event.preventDefault();
                    document.getElementById('{{ url('logout-form' . $comment->id) }}').submit();">
      {{ __('delete') }}
    </a>
      <form id="{{ url('logout-form' . $comment->id) }}" action="{{ route('user_comment_path',[$comment->id,$user->id])}}" method="post" style="display: none;">
              @csrf
              @method('DELETE')
      </form>
    @endif
  </span>
</li>

@endforeach





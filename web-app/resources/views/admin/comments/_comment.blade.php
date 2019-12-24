@foreach ($user->comments as $comment)
<p>
  <strong>Commenter:</strong>
  {{ $comment->commenter }}
</p>

<p>
  <strong>Comment:</strong>
  {{ $comment->body }}
</p>

<p>
  <a data-confirm="Are you sure?" rel="nofollow" data-method="delete" href="{{ route('admin_user_comments_path', $user->id, $comment->id) }}">Destroy Comment</a>
  <form action="{{ route('admin_user_comment_path',[$comment->id,$user->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Destroy Comment" />
   </form>
</p>
@endforeach

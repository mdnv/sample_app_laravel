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
  <form action="{{ route('user_comment_path',[$comment->id,$user->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Destroy Comment" />
   </form>
</p>
@endforeach

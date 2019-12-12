<form action="{{ route('user_comments_path',$user->id) }}" accept-charset="UTF-8" method="post">
  @csrf

  <p>
    <label for="comment_commenter">User</label><br>
    <input type="text" name="commenter" id="comment_commenter" />
  </p>
  <p>
    <label for="comment_body">Body</label><br>
    <textarea name="body" id="comment_body"></textarea>
  </p>
  <p>
    <input type="submit" name="commit" value="Create Micropost" data-disable-with="Create Micropost" />
  </p>
</form>

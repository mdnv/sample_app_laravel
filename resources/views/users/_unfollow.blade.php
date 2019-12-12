<form action="{{ route('relationships_path', $user->id)}}" accept-charset="UTF-8" data-remote="true" method="post">
  @csrf
  @method('DELETE')
  <input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="delete" /><input type="hidden" name="authenticity_token" value="ZjEQ6d1KVWSf0tZA0WpP6Xs+OkBP7hee7yc0PgEJVvjHgBsaLNvg8DNqL9Vu/7+6h/6npE437i8HD4HJTcGqSQ==" />
  <div class="form-group">
    <input type="submit" name="commit" value="Unfollow" class="btn btn-secondary btn-block" data-disable-with="Unfollow" />
  </div>
</form>

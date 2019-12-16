<form action="{{ route('relationships_path', $user->id)}}" accept-charset="UTF-8" data-remote="true" method="post">
  @csrf
  @method('DELETE')
  <div class="form-group">
    <input type="submit" name="commit" value="Unfollow" class="btn btn-light btn-block" data-disable-with="Unfollow" />
  </div>
</form>

<div id="follow_form">
  <form action="{{ route('relationships_path', $user->id)}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" name="commit" value="Unfollow" class="btn btn-secondary" data-disable-with="Unfollow" />
  </form>
</div>

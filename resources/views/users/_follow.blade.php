<div id="follow_form">
  <form action="{{ route('relationships_path', $user->id)}}" method="post">
    @csrf
    <div><input type="hidden" name="followed_id" id="followed_id" value="{{ $user->id }}" /></div>
    <input type="submit" name="commit" value="Follow" class="btn btn-primary" data-disable-with="Follow" />
</form>
</div>

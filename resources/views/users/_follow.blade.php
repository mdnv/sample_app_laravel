<form action="{{ route('relationships_path', $user->id)}}" accept-charset="UTF-8" data-remote="true" method="post">
  @csrf
  <div class="form-group">
    <input type="submit" name="commit" value="Follow" class="btn btn-primary btn-block" data-disable-with="Follow" />
  </div>

<form action="{{ route('relationships_path', $user->id)}}" accept-charset="UTF-8" data-remote="true" method="post">
  <input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="{{ $user->id }}" />
  <div class="form-group">
    <input type="hidden" name="followed_id" id="followed_id" value="2" />
    <input type="submit" name="commit" value="Follow" class="btn btn-primary btn-block" data-disable-with="Follow" />
  </div>

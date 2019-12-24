<form enctype="multipart/form-data" action="{{ route('user_comments_path',Auth::user()) }}" accept-charset="UTF-8" method="post">
  @csrf

  <div class="form-group">
    <input class="form-control" placeholder="Commenter..." name="commenter" id="comment_commenter" value="{{ Auth::user()->name }}" type="hidden">
  </div>

  <div class="form-group">
    <textarea class="form-control" placeholder="Compose new micropost..." name="body" id="comment_body">
</textarea>
  </div>

  <div class="form-group">
    <input type="submit" name="commit" value="Post" class="btn btn-primary btn-block" data-disable-with="Post" />
  </div>

  <div class="form-group">
    <input accept="image/jpeg,image/gif,image/png" type="file" name="image" id="comment_image" />
  </div>
</form>
<script type="text/javascript">
  $('#micropost_picture').bind('change', function() {
    var size_in_megabytes = this.files[0].size/1024/1024;
    if (size_in_megabytes > 5) {
      alert('Maximum file size is 5MB. Please choose a smaller file.');
    }
  });
</script>

@extends('layouts.app')

@section('content')
<!--       <div class="row">
  <aside class="col-md-4">
    <section class="user_info">
      <h1>
        <img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=80" />
        Example User
      </h1>
    </section>
    <section class="stats">
      <div class="stats">
  <a href="/users/1/following">
    <strong id="following" class="stat">
      49
    </strong>
    following
</a>  <a href="/users/1/followers">
    <strong id="followers" class="stat">
      38
    </strong>
    followers
</a></div>

    </section>
  </aside>
  <div class="col-md-8">

      <h3>Microposts (50)</h3>
      <ol class="microposts">
<li id="micropost-295">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Corrupti illo fugit architecto praesentium.

  </span>
  <span class="timestamp">
    Posted about 1 hour ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/295">delete</a>
  </span>
</li>
<li id="micropost-289">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Sapiente ut voluptas ut vel.

  </span>
  <span class="timestamp">
    Posted about 1 hour ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/289">delete</a>
  </span>
</li>
<li id="micropost-283">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Aut neque officiis commodi repellendus.

  </span>
  <span class="timestamp">
    Posted about 1 hour ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/283">delete</a>
  </span>
</li>

      </ol>

    <nav>
    <ul class="pagination">
      <li class="page-item">
  <a class="page-link" href="/users/1">&laquo; First</a>
</li>

      <li class="page-item">
  <a rel="prev" class="page-link" href="/users/1">&lsaquo; Prev</a>
</li>

            <li class="page-item">
    <a rel="prev" class="page-link" href="/users/1">1</a>
  </li>

            <li class="page-item active">
    <a data-remote="false" class="page-link">2</a>
  </li>


      <li class="page-item">
  <a rel="next" class="page-link" href="/users/1?page=2">Next &rsaquo;</a>
</li>

      <li class="page-item">
  <a class="page-link" href="/users/1?page=2">Last &raquo;</a>
</li>

    </ul>
  </nav>

  </div>
</div> -->

@guest
  <div class="center jumbotron">
    <h1>Welcome to the Sample App</h1>

    <h2>
      This is the home page for the
      <a href="https://laravel.com/">Laravel</a>
      sample application.
    </h2>

    @if (Route::has('register'))
      <a class="btn btn-lg btn-primary" href="{{ route('register') }}">{{ __('Sign up now!') }}</a>
    @endif
  </div>

  <a href="http://rubyonrails.org/"><img alt="Laravel logo" width="200px" src="{{ asset('images/laravel.png') }}" /></a>
@else

{{-- <div class="row">
  <aside class="col-md-4">
    <section class="user_info">
      @include('users._user_info')
    </section>
    <section class="stats">
      @include('shared._stats')
    </section>
    <section class="micropost_form">
      @include('shared._micropost_form')s
    </section>
  </aside>
  <div class="col-md-8">
    <h3>Micropost Feed</h3>
    @include('shared._feed')
  </div>
</div> --}}

<div class="row">
    <aside class="col-md-4">
      <section class="user_info">
        <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
<h1>Example User</h1>
<span><a href="/users/1">view my profile</a></span>
<span>50 microposts</span>

      </section>
      <section class="stats">
        <div class="stats">
  <a href="/users/1/following">
    <strong id="following" class="stat">
      49
    </strong>
    following
</a>  <a href="/users/1/followers">
    <strong id="followers" class="stat">
      38
    </strong>
    followers
</a></div>

      </section>
      <section class="micropost_form">
        <form enctype="multipart/form-data" action="/microposts" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="1o5zJGpKjCifVX1Oo6tVRoZZ/2FRnTsyXTBoescGZ9kLPyJWnWhaRFPVvaL7NGtY94jS6FEKOs2SHYVgIi0Viw==" />


  <div class="form-group">
    <textarea class="form-control" placeholder="Compose new micropost..." name="micropost[content]" id="micropost_content">
</textarea>
  </div>

  <div class="form-group">
    <input type="submit" name="commit" value="Post" class="btn btn-primary btn-block" data-disable-with="Post" />
  </div>

  <div class="form-group">
    <input accept="image/jpeg,image/gif,image/png" type="file" name="micropost[picture]" id="micropost_picture" />
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

      </section>
    </aside>
    <div class="col-md-8">
      <h3>Micropost Feed</h3>
        <ol class="microposts">

          <li id="micropost-303">
  <a href="/users/101"><img alt="Manh" class="gravatar" src="https://secure.gravatar.com/avatar/4ac29ee94ad2246a62c8c71275b64950?s=50" /></a>
  <span class="user"><a href="/users/101">Manh</a></span>
  <span class="content">
    sdsadad
    <img src="https://mysterious-atoll-47182.herokuapp.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBCdz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--ef3e7475ea0ed48ce6b8ee444436696d74915996/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwQXZRQmFRTDBBUT09IiwiZXhwIjpudWxsLCJwdXIiOiJ2YXJpYXRpb24ifX0=--17d173499414a6796536cb2b2ba404cfe7ebd4b4/no_gravatar.gif" />
  </span>
  <span class="timestamp">
    Posted 29 days ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/303">delete</a>
  </span>
</li>

    <li id="micropost-240">
  <a href="/users/6"><img alt="Mrs. Roseanna Kreiger" class="gravatar" src="https://secure.gravatar.com/avatar/b0e247198b823a9bd5908730477b2cc2?s=50" /></a>
  <span class="user"><a href="/users/6">Mrs. Roseanna Kreiger</a></span>
  <span class="content">
    Voluptatem nesciunt odio laboriosam minus.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-239">
  <a href="/users/5"><img alt="Terrance Rosenbaum" class="gravatar" src="https://secure.gravatar.com/avatar/4788f8d222055ddd54d12b75514cd8c3?s=50" /></a>
  <span class="user"><a href="/users/5">Terrance Rosenbaum</a></span>
  <span class="content">
    Voluptatem nesciunt odio laboriosam minus.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-238">
  <a href="/users/4"><img alt="Craig Dickinson" class="gravatar" src="https://secure.gravatar.com/avatar/2065436fdfe2d27dc7f06b6787a4a1af?s=50" /></a>
  <span class="user"><a href="/users/4">Craig Dickinson</a></span>
  <span class="content">
    Voluptatem nesciunt odio laboriosam minus.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-237">
  <a href="/users/3"><img alt="Lazaro Cassin" class="gravatar" src="https://secure.gravatar.com/avatar/03037e249b97891693d6e292289be0ff?s=50" /></a>
  <span class="user"><a href="/users/3">Lazaro Cassin</a></span>
  <span class="content">
    Voluptatem nesciunt odio laboriosam minus.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-235">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Voluptatem nesciunt odio laboriosam minus.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/235">delete</a>
  </span>
</li>
<li id="micropost-234">
  <a href="/users/6"><img alt="Mrs. Roseanna Kreiger" class="gravatar" src="https://secure.gravatar.com/avatar/b0e247198b823a9bd5908730477b2cc2?s=50" /></a>
  <span class="user"><a href="/users/6">Mrs. Roseanna Kreiger</a></span>
  <span class="content">
    Occaecati minima doloremque voluptas odio.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-233">
  <a href="/users/5"><img alt="Terrance Rosenbaum" class="gravatar" src="https://secure.gravatar.com/avatar/4788f8d222055ddd54d12b75514cd8c3?s=50" /></a>
  <span class="user"><a href="/users/5">Terrance Rosenbaum</a></span>
  <span class="content">
    Occaecati minima doloremque voluptas odio.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-232">
  <a href="/users/4"><img alt="Craig Dickinson" class="gravatar" src="https://secure.gravatar.com/avatar/2065436fdfe2d27dc7f06b6787a4a1af?s=50" /></a>
  <span class="user"><a href="/users/4">Craig Dickinson</a></span>
  <span class="content">
    Occaecati minima doloremque voluptas odio.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-231">
  <a href="/users/3"><img alt="Lazaro Cassin" class="gravatar" src="https://secure.gravatar.com/avatar/03037e249b97891693d6e292289be0ff?s=50" /></a>
  <span class="user"><a href="/users/3">Lazaro Cassin</a></span>
  <span class="content">
    Occaecati minima doloremque voluptas odio.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-229">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Occaecati minima doloremque voluptas odio.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/229">delete</a>
  </span>
</li>
<li id="micropost-228">
  <a href="/users/6"><img alt="Mrs. Roseanna Kreiger" class="gravatar" src="https://secure.gravatar.com/avatar/b0e247198b823a9bd5908730477b2cc2?s=50" /></a>
  <span class="user"><a href="/users/6">Mrs. Roseanna Kreiger</a></span>
  <span class="content">
    Dolorem velit temporibus enim tenetur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-227">
  <a href="/users/5"><img alt="Terrance Rosenbaum" class="gravatar" src="https://secure.gravatar.com/avatar/4788f8d222055ddd54d12b75514cd8c3?s=50" /></a>
  <span class="user"><a href="/users/5">Terrance Rosenbaum</a></span>
  <span class="content">
    Dolorem velit temporibus enim tenetur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-226">
  <a href="/users/4"><img alt="Craig Dickinson" class="gravatar" src="https://secure.gravatar.com/avatar/2065436fdfe2d27dc7f06b6787a4a1af?s=50" /></a>
  <span class="user"><a href="/users/4">Craig Dickinson</a></span>
  <span class="content">
    Dolorem velit temporibus enim tenetur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-225">
  <a href="/users/3"><img alt="Lazaro Cassin" class="gravatar" src="https://secure.gravatar.com/avatar/03037e249b97891693d6e292289be0ff?s=50" /></a>
  <span class="user"><a href="/users/3">Lazaro Cassin</a></span>
  <span class="content">
    Dolorem velit temporibus enim tenetur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-223">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Dolorem velit temporibus enim tenetur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/223">delete</a>
  </span>
</li>
<li id="micropost-222">
  <a href="/users/6"><img alt="Mrs. Roseanna Kreiger" class="gravatar" src="https://secure.gravatar.com/avatar/b0e247198b823a9bd5908730477b2cc2?s=50" /></a>
  <span class="user"><a href="/users/6">Mrs. Roseanna Kreiger</a></span>
  <span class="content">
    Modi sed voluptas et et.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-221">
  <a href="/users/5"><img alt="Terrance Rosenbaum" class="gravatar" src="https://secure.gravatar.com/avatar/4788f8d222055ddd54d12b75514cd8c3?s=50" /></a>
  <span class="user"><a href="/users/5">Terrance Rosenbaum</a></span>
  <span class="content">
    Modi sed voluptas et et.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-220">
  <a href="/users/4"><img alt="Craig Dickinson" class="gravatar" src="https://secure.gravatar.com/avatar/2065436fdfe2d27dc7f06b6787a4a1af?s=50" /></a>
  <span class="user"><a href="/users/4">Craig Dickinson</a></span>
  <span class="content">
    Modi sed voluptas et et.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-219">
  <a href="/users/3"><img alt="Lazaro Cassin" class="gravatar" src="https://secure.gravatar.com/avatar/03037e249b97891693d6e292289be0ff?s=50" /></a>
  <span class="user"><a href="/users/3">Lazaro Cassin</a></span>
  <span class="content">
    Modi sed voluptas et et.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-217">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Modi sed voluptas et et.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/217">delete</a>
  </span>
</li>
<li id="micropost-216">
  <a href="/users/6"><img alt="Mrs. Roseanna Kreiger" class="gravatar" src="https://secure.gravatar.com/avatar/b0e247198b823a9bd5908730477b2cc2?s=50" /></a>
  <span class="user"><a href="/users/6">Mrs. Roseanna Kreiger</a></span>
  <span class="content">
    Tenetur vel corporis quos consequuntur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-215">
  <a href="/users/5"><img alt="Terrance Rosenbaum" class="gravatar" src="https://secure.gravatar.com/avatar/4788f8d222055ddd54d12b75514cd8c3?s=50" /></a>
  <span class="user"><a href="/users/5">Terrance Rosenbaum</a></span>
  <span class="content">
    Tenetur vel corporis quos consequuntur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-214">
  <a href="/users/4"><img alt="Craig Dickinson" class="gravatar" src="https://secure.gravatar.com/avatar/2065436fdfe2d27dc7f06b6787a4a1af?s=50" /></a>
  <span class="user"><a href="/users/4">Craig Dickinson</a></span>
  <span class="content">
    Tenetur vel corporis quos consequuntur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-213">
  <a href="/users/3"><img alt="Lazaro Cassin" class="gravatar" src="https://secure.gravatar.com/avatar/03037e249b97891693d6e292289be0ff?s=50" /></a>
  <span class="user"><a href="/users/3">Lazaro Cassin</a></span>
  <span class="content">
    Tenetur vel corporis quos consequuntur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
  </span>
</li>
<li id="micropost-211">
  <a href="/users/1"><img alt="Example User" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
  <span class="user"><a href="/users/1">Example User</a></span>
  <span class="content">
    Tenetur vel corporis quos consequuntur.

  </span>
  <span class="timestamp">
    Posted 1 day ago.
      <a data-confirm="You sure?" rel="nofollow" data-method="delete" href="/microposts/211">delete</a>
  </span>
</li>

  </ol>

  <nav>
    <ul class="pagination">
      <li class="page-item">
  <a class="page-link" href="/">&laquo; First</a>
</li>

      <li class="page-item">
  <a rel="prev" class="page-link" href="/?page=2">&lsaquo; Prev</a>
</li>

            <li class="page-item">
    <a class="page-link" href="/">1</a>
  </li>

            <li class="page-item">
    <a rel="prev" class="page-link" href="/?page=2">2</a>
  </li>

            <li class="page-item active">
    <a data-remote="false" class="page-link">3</a>
  </li>

            <li class="page-item">
    <a rel="next" class="page-link" href="/?page=4">4</a>
  </li>

            <li class="page-item">
    <a class="page-link" href="/?page=5">5</a>
  </li>

            <li class="page-item">
    <a class="page-link" href="/?page=6">6</a>
  </li>

            <li class="page-item">
    <a class="page-link" href="/?page=7">7</a>
  </li>

          <li class='page-item disabled'>
  <a class="page-link" href="#">&hellip;</a>
</li>

      <li class="page-item">
  <a rel="next" class="page-link" href="/?page=4">Next &rsaquo;</a>
</li>

      <li class="page-item">
  <a class="page-link" href="/?page=10">Last &raquo;</a>
</li>

    </ul>
  </nav>


    </div>
  </div>

@endguest
@endsection

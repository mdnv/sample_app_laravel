<a href="{{ route('user_path',Auth::user()) }}"><img alt="{{ Auth::user()->name }}" class="gravatar" src="https://secure.gravatar.com/avatar/bebfcf57d6d8277d806a9ef3385c078d?s=50" /></a>
<h1>{{ Auth::user()->name }}</h1>
<span><a href="{{ route('user_path',Auth::user()) }}">view my profile</a></span>
<span>{{ Auth::user()->comments->count().'micropost' }}</span>

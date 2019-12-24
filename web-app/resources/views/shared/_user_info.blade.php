<a href="{{ route('user_path',Auth::user()) }}">{!! gravatar_for(Auth::user()) !!}</a>
<h1>{{ Auth::user()->name }}</h1>
<span><a href="{{ route('user_path',Auth::user()) }}">view my profile</a></span>
<span>{{ Auth::user()->comments->count() }} {{ Str::plural('micropost', Auth::user()->comments->count()) }}</span>


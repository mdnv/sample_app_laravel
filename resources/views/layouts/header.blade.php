<header class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" id="logo" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/help">Help</a></li>
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Log in') }}</a></li>
        @else
          <li class="nav-item"><a class="nav-link" href="{{ route('users_path') }}">{{ __('Users') }}</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
            <div class="dropdown-menu" aria-labelledby="account-dropdown">
              <a class="dropdown-item" href="{{ route('user_path',Auth::user()) }}">{{ __('Profile') }}</a>
              <a class="dropdown-item" href="{{ route('edit_user_path',Auth::user()) }}">{{ __('Settings') }}</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" rel="nofollow" data-method="delete" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </nav>
  </div>
</header>

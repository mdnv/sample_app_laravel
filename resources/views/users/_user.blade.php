@foreach ($users as $user)
<li>
<img alt="{{ $user->name }}" class="gravatar" src="https://secure.gravatar.com/avatar/949272e115f08275bdaab4e619b918fc?s=50" />
<a href="{{ route('user_path',$user->id)}}">{{ $user->name }}</a>
  | <a data-confirm="You sure?" rel="nofollow" data-method="delete" href=""
    onclick="event.preventDefault();
                  document.getElementById('{{ url('logout-form' . $user->id) }}').submit();">
    {{ __('delete') }}
  </a>
    <form id="{{ url('logout-form' . $user->id) }}" action="{{ route('user_path', $user->id)}}" method="post" style="display: none;">
            @csrf
            @method('DELETE')
    </form>
</li>
@endforeach

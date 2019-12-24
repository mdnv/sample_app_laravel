@foreach ($users as $user)
<li>
{!! gravatar_for($user) !!}
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

@extends('layouts.admin')
@section('content')
<!-- <h1>Listing Users</h1> -->
<a href="{{ route('admin_new_user_path') }}">New user</a>
<table class="table">
  <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">name</th>
    <th scope="col">email</th>
    <!-- <th scope="col">email_verified_at</th> -->
    <!-- <th scope="col">password</th> -->
    <!-- <th scope="col">remember_token</th> -->
    <th scope="col">admin</th>
    <th scope="col">created_at</th>
    <th scope="col">updated_at</th>
    <th colspan="3"></th>
  </tr>
  </thead>

  @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <!-- <td>{{ $user->email_verified_at }}</td> -->
      <!-- <td>{{ $user->password }}</td> -->
      <!-- <td>{{ $user->remember_token }}</td> -->
      <td>{{ $user->admin }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
      <td><a href="{{ route('admin_user_path',$user->id)}}">Show</a></td>
      <td><a href="{{ route('admin_edit_user_path',$user->id)}}">Edit</a></td>
      <td>
        {{-- <a id="{{$user->id}}" data-confirm="Are you sure?" rel="nofollow" data-method="delete" href="{{ route('admin_user_path', $user->id)}}">Destroy</a>
        <form action="{{ route('admin_user_path', $user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Destroy" />
        </form> --}}

        <a data-confirm="You sure?" rel="nofollow" data-method="delete" href=""
    onclick="event.preventDefault();
                  document.getElementById('{{ url('logout-form' . $user->id) }}').submit();">
    {{ __('Destroy') }}
  </a>
    <form id="{{ url('logout-form' . $user->id) }}" action="{{ route('admin_user_path', $user)}}" method="post" style="display: none;">
            @csrf
            @method('DELETE')
    </form>

      </td>
    </tr>
  @endforeach
</table>

{{ $users->onEachSide(5)->links() }}

<script>
$( 'a[data-method="delete"]' ).click(function( event ) {
  event.preventDefault();

  var url = $(this).attr('href');
  var id = $(this).attr('id');
  $.ajax({
    url: url,
    type: 'DELETE',
    // dataType: "JSON",
    data: {
      '_token': $('input[name=_token]').val(),
    },
    success: function(){
      $(this).parent().parent().remove();
  }});


   // $('.modal-footer').on('click', '.delete', function() {
   //          $.ajax({
   //              type: 'DELETE',
   //              url: 'posts/' + id,
   //              data: {
   //                  '_token': $('input[name=_token]').val(),
   //              },
   //              success: function(data) {
   //                  toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
   //                  $('.item' + data['id']).remove();
   //                  $('.col1').each(function (index) {
   //                      $(this).html(index+1);
   //                  });
   //              }
   //          });
   //      });


  return confirm('Are you sure?');
  // $( "<div>" ).append( "default " + event.type + " prevented" + url ).appendTo( "#log" );
});
</script>

@endsection

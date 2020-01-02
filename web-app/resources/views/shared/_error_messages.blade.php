@if ($errors->any())
<div id="error_explanation">
  {{-- <h2>
    {{ $errors->count() }} errors prohibited
    this article from being saved:
  </h2> --}}
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

{{-- {{ dd($feed_items) }} --}}

@if(!empty($feed_items))
<ol class="microposts">
@include('comments._comment_home')



  </ol>
 {{-- {{ $feed_items->paginate(15)->onEachSide(5)->links() }} --}}
@endif

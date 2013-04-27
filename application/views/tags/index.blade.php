@layout('site.master')

@section('content')
  <h1>Let's check out some bookmarks</h1>
  <div class="row-fluid">
    <div class="tags span8">
    @foreach ($tags as $tag)
      @if ($tag->count >= 10) 
        <span class="tag"><a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a>({{$tag->count}})</span>
      @endif
    @endforeach
    </div>
  </div>
@endsection

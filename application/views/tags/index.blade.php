@layout('site.master')

@section('content')
  <div class="row-fluid">
    <div class="tags span8">
    @foreach ($tags as $tag)
      @if ($tag->count >= 10) 
        <span class="tag"><a href="/tag/{{ $tag->name }}">{{ $tag->name }}</a>({{$tag->count}})</span>
      @endif
    @endforeach
    </div>
  </div>
@endsection

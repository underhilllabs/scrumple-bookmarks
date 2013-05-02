@layout('site.master')

@section('content')
<h1>{{$tag->name}}</h1>
@foreach ($bookmarks->results as $bookmark)
  <div class="bookmark">
    <a href="{{$bookmark->url}}">{{$bookmark->title}}</a><br />
    {{ $bookmark->created_at }} to <span>
    </span>
  </div>
@endforeach

<span>
{{ $bookmarks->links() }}
</span>
@endsection

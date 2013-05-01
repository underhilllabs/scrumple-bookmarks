@layout('site.master')

@section('content')
<h1>Let's check out some bookmarks</h1>
@foreach ($bookmarks->results as $bookmark)
  <div class="bookmark">
    <a href="{{$bookmark->url}}">{{$bookmark->title}}</a><br />
    {{ $bookmark->created_at }} to <span>
    @foreach ($bookmark->tags as $tag) 
      <a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a>
    @endforeach
    by <a href="/user/{{$bookmark->user_id}}/bookmarks/">{{ $bookmark->user()->first()->username }}</a>
    </span>
  </div>
@endforeach

<span>
<div class="pagination-centered">
{{ $bookmarks->links() }}
</div>
</span>
@endsection

@layout('site.master')

@section('content')
<h1>Let's check out {{$user->username}}'s bookmarks</h1>
@forelse ($bookmarks->results as $bookmark)
  <div class="bookmark">
    <a href="{{$bookmark->url}}">{{$bookmark->title}}</a><br />
    {{ $bookmark->created_at }} <span>
    @if ($bookmark->tags)
      to
    @endif
    @foreach ($bookmark->tags as $tag) 
      <a href="/tag/{{ $tag->name }}">{{ $tag->name }}</a>
    @endforeach
    </span>
  </div>
@empty
  <p>Well, it appears {{$user->username}} hasn't bookmarked anything. Let's all depend on our memory like {{$user->username}}, mind like a steel trout.</p>
@endforelse

<span>
<div class="pagination-centered">
{{ $bookmarks->links() }}
</div>
</span>
@endsection

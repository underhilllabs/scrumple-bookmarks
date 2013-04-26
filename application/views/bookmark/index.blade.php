<html>
<head>
<title>L3 Bookmarks!</title>
 {{ Asset::styles() }}
</head>
<body>
<h1>Let's check out some bookmarks</h1>
@foreach ($bookmarks->results as $bookmark)
  <div class="bookmark">
    <a href="{{$bookmark->url}}">{{$bookmark->title}}</a><br />
    {{ $bookmark->created_at }} to <span>
    @foreach ($bookmark->tags as $tag) 
      <a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a>
    @endforeach
    </span>
  </div>
@endforeach

<span>
{{ $bookmarks->links() }}
</span>

<html>
<head>
<title>L3 Bookmarks for {{$tag->name}}</title>
 {{ Asset::styles() }}
</head>
<body>
<h1>{{$tag->name}}</h1>
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

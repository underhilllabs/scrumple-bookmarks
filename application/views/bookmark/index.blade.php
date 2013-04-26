<html>
<head>
<title>Scrumple Bookmarks</title>
 {{ Asset::styles() }}
</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Scrumple Bookmarks</a>
    <ul class="nav">
      <li class="active"><a href="/">bookmarks</a></li>
      <li><a href="/users/">users</a></li>
      <li><a href="/tags/">tags</a></li>
    </ul>
  </div>
</div>
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
<div class="pagination-centered">
{{ $bookmarks->links() }}
</div>
</span>

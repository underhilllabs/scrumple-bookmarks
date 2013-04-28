<html>
<head>
<title>Scrumple Bookmarks</title>
 {{ Asset::styles() }}
</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="/">Scrumple Bookmarks</a>
    <ul class="nav">
      <li class=""><a href="/">bookmarks</a></li>
      <li class=""><a href="/users/">users</a></li>
      <li><a href="/tags/">tags</a></li>
    </ul>
    <ul class="nav pull-right">
    @if(Auth::user())
      <li><a href="/user/{{Auth::user()->id}}/bookmarks">{{Auth::user()->username}}</a></li>
      <li><a href="/user/logout">log out</a>
    @else
      <li><a href="/user/login">log in</a>
    @endif
    </ul>
  </div>
</div>
<div class="container-fluid">
@yield('content')
</div>
</body>
</html>

@layout('site.master')

@section('content')
<h3>Bookmark Users</h3>
@foreach ($users as $user)
  <p><a href="/user/{{$user->id}}">{{$user->username}}</a>: {{$user->bookmarkCount()}} bookmarks</p>
@endforeach
@endsection

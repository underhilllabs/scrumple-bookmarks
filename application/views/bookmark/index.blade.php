@layout('site.master')

@section('content')
@foreach ($bookmarks->results as $bookmark)
  <div class="bookmark">
    <a href="{{$bookmark->url}}">{{$bookmark->title}}</a><br />
    {{ preg_split("/ /",$bookmark->created_at)[0] }} <span>
    @if ($bookmark->tags)
      to
    @endif
    @foreach ($bookmark->tags as $tag) 
      <a href="/tag/{{ $tag->name }}">{{ $tag->name }}</a>
    @endforeach
  by <a href="/user/{{$bookmark->user_id}}/bookmarks/">{{ $bookmark->user()->first()->username }}</a>
    @if ($bookmark->user_id == Auth::user()->id)
      - <a href="/bookmarks/{{$bookmark->id}}/edit">edit</a>
      - <a href="/bookmarks/{{$bookmark->id}}/delete">delete</a>
    @endif
    </span>
  </div>
@endforeach

<span>
<div class="pagination-centered">
{{ $bookmarks->links() }}
</div>
</span>
@endsection

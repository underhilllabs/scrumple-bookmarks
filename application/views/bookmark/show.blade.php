This is the /home/grayjay/projects/laravel3-bookmarks/application/views/bookmark/show.blade.php view
Title: {{ $bookmark->title }}
@foreach ( $bookmark->tags as $tag )
  <li>{{ $tag->name }}</li>
@endforeach


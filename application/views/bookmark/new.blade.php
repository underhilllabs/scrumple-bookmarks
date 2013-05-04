@layout('site.master')

@section('content')
Welcome, {{Auth::user()->username}}
{{Form::open()}}
{{Form::token()}}

{{Form::label('address', 'Address')}}
{{Form::text('address', Input::get('address'))}}

{{Form::label('title', 'Title')}}
{{Form::text('title', Input::get('title'))}}

{{Form::label('desc', 'Description')}}
{{Form::text('desc', Input::get('desc'))}}

{{Form::label('tags', 'Tags')}}
{{Form::text('tags', Input::get('tags'))}}

{{Form::label('private', 'Private')}}
{{Form::checkbox('private', Input::get('private'))}}

<br />
{{Form::submit('Add Bookmark')}}
{{Form::close()}}
@endsection


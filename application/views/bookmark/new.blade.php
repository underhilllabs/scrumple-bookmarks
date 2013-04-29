@layout('site.master')

@section('content')
Welcome, {{Auth::user()->username}}

@endsection


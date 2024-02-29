@extends('layouts.main', [
    'current_page' => 'users'    
])

@section('content')

<h1>List of Users</h1>
{{-- sem se pujde React app --}}
<div id="root"></div>
@viteReactRefresh
@vite('resources/js/user-list/main.jsx')

    
@endsection
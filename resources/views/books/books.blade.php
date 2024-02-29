@viteReactRefresh

@extends('layouts.main', [
    'current_page' => 'books_10latest'    
])






@section('content_books_10latest')

<h3>Books 10 latest</h3>

{{$books_10latest}}

@endsection


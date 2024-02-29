@viteReactRefresh
@vite('resources/js/partners.jsx')

@extends('layouts.main', [
    'current_page' => 'authors'    
]);



@section('authors_authors')

{{-- {{dd($authors)}} --}}

@foreach ($authors as $author)

<h4>NAME:{{$author->name}}</h4><p>{{$author->bio}}</p><br>
    
@endforeach


@endsection
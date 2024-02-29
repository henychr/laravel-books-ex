
@viteReactRefresh
@vite('resources/js/partners.jsx')


@extends('layouts.main', [
    'current_page' => 'home'    
])





@section ('content_index')

            <h1>Welcome to page about books</h1>
            <h3>Few facts about books</h3>
            <div class="facts">
            <p>There are over 129 million books in existence.</p>
            <p>The most expensive book ever purchased was sold for $30.8 million.</p>
            <p>There's a word for loving the smell of old books.</p>
            <p>The longest sentence ever printed is 823 words.</p>
            </div>
            
            <div id="partners">

            </div>

            @auth

            
{{auth()->user()->name}} {{auth()->user()->id}} {{auth()->check()}}


@endauth

@endsection


@section('content_api')

<div id="latest-books"></div>
@vite('resources/js/latest-books.js')

@endsection

{{-- @section('crime_books')

<h1>Crime books</h1>

@foreach ($crime_books as $crime_book)
<div class="book">

    <?= "ID:$crime_book->id | TITLE:$crime_book->title | <br> DESCRIPTION:$crime_book->description  | Author: " ?><br>
    {{  $crime_book->authors->pluck('name')->join(', ') }}

    </div>


  
@endforeach

@endsection --}}




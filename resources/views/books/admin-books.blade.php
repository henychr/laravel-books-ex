@viteReactRefresh

@extends('layouts.main', [
    'current_page' => 'admin-books'    
])


@section('content_admin_books')

@include('common/search')


<div class="books" >

    @foreach ($books as $book)
    <a href="/admin/books/{{$book->id}}">EDIT</a>
    <a href="/admin/book/{{$book->id}}">SEE DETAIL</a>
    <div class ="book" style="display:flex;justify-content:space-between;align-items:center; margin:10px">
        <img src="{{$book->image}}" alt="" class="book-image" style="width:100px">
        <div class="book-title">Title: {{$book->title}}</div>
        <div class="book-price">Price: {{$book->price}}</div>
        <div class="book-language">Language: {{$book->language}}</div>
        <div class="book-pages">Pages: {{$book->pages}}</div>
        <div class="book-description">Description: {{$book->description}}</div>
    </div>
    @endforeach

</div>

@endsection


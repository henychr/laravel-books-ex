@viteReactRefresh
@vite('resources/js/partners.jsx')

@extends('layouts.main', [
    'current_page' => 'edit-book'    
])


@section('book-edit')


<form action="/admin/books/{{$book->id}}" method="post">
    @method('PUT')
    @csrf

    <input type="text" name="slug" placeholder="slug: title-name-isbn" value="{{$book->slug}}">   
    <input type="text" name="title" placeholder="title" value="{{$book->title}}">
     <input type="number" name="price" placeholder="price" value="{{$book->price}}">
    <input type="text" name="image" placeholder="image url" value="{{$book->image}}">
    <input type="text" name="language" placeholder="language" value="{{$book->language}}">
    <input type="text" name="pages" placeholder="pages" value="{{$book->pages}}">
    <input type="text" name="description" placeholder="description" value="{{$book->description}}">
    <button>Submit</button>
</form>


@endsection
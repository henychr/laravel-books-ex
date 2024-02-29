@viteReactRefresh
@vite('resources/js/partners.jsx')

@extends('layouts.main', [
    'current_page' => 'Create-books'    
])


@section('books-create')


<form action="/admin/books" method="post">
      @csrf
    <input type="text" name="slug" placeholder="slug: title-name-isbn">   
    <input type="text" name="title" placeholder="title">
     <input type="number" name="price" placeholder="price">
    <input type="text" name="image" placeholder="image url">
    <input type="text" name="language" placeholder="language">
    <input type="text" name="pages" placeholder="pages">
    <input type="text" name="description" placeholder="description">
    <button>Submit</button>
</form>


@endsection



@viteReactRefresh
@extends('layouts.main', [
    'current_page' => 'book-detail'    
])


@section('content')

    <div class ="book" style="display:flex;justify-content:space-between;align-items:center; margin:10px">
        <a href="/admin/books/{{$book->id}}">EDIT</a>
        <img src="{{$book->image}}" alt="" class="book-image" style="width:100px">
        <div class="book-title">Title: {{$book->title}}</div>
        <div class="book-price">Price: {{$book->price}}</div>
        <div class="book-language">Language: {{$book->language}}</div>
        <div class="book-pages">Pages: {{$book->pages}}</div>
        <div class="book-description">Description: {{$book->description}}</div>
       
    </div>
@auth
    @include('common/success_messages')
    @include('common/error_messages')

  
<br>
<br>
    <div class="review">
        <form action="/book/{{$book->id}}/review" method="post">
            @csrf

            <label>Write a review
            <input type="text" name="text" placeholder="Here" >
            </label>
            <button>Submit Review</button>
        </form>


    </div>
@endauth



@if(Auth::check())
<div class="reviews" >

    <h3>Book reviews</h3>

    @foreach ($book->reviews as $review)

    <div class ="review" style="">
               <li class="book-review">ID{{$review->id}} {{$review->text}}</li>
    @can('admin')    
        <form action="/admin/books/{{$book->id}}/reviews/{{$review->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete ugly review</button>
        </form>
        @endcan
        </div>


    @endforeach

</div>
@endif
    
@endsection
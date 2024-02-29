<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::query()
            ->with('reviews')
            ->orderBy('id', 'desc')
            ->LIMIT(20)
            ->get();



        return view('books.admin-books', compact('books'));
    }

    public function create()
    {
        return view('books.books-create');
    }

    public function store()

    {
        $book = new Book;

        $book->slug = $_POST['slug'];
        $book->title = $_POST['title'];
        $book->price = $_POST['price'];
        $book->image = $_POST['image'];
        $book->language = $_POST['language'];
        $book->pages = $_POST['pages'];
        $book->description = $_POST['description'];
        $book->save();

        return redirect('/admin/books');
    }

    public function edit($book_id)
    {

        $book = Book::findOrFail($book_id);

        return view('books.books-edit', compact('book'));
    }

    public function update($book_id)
    {

        $book = Book::findOrFail($book_id);

        $book->slug = $_POST['slug'] ?? $book->slug;
        $book->title = $_POST['title'] ?? $book->title;
        $book->price = $_POST['price'] ?? $book->price;
        $book->image = $_POST['image'] ?? $book->image;
        $book->language = $_POST['language'] ?? $book->language;
        $book->pages = $_POST['pages'] ?? $book->pages;
        $book->description = $_POST['description'] ?? $book->description;
        $book->save();

        return view('books.books-edit', compact('book'));
    }

    public function show($book_id)
    {
        $book = Book::findOrFail($book_id);

        return view('books.book-detail', compact('book'));
    }
}

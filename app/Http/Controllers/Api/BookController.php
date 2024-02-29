<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latest()
    {
        $books_10latest = Book::query()
            ->orderBy('publication_date', 'desc')
            ->limit(10)
            ->get();
        return view('books.books', compact('books_10latest'));
    }

    public function crimeBooks()
    {
        $crime_books = Book::where('category_id', 12)
            ->with('authors')
            ->orderBy('publication_date', 'desc')
            ->limit(10)
            ->get();
        return view('index.index', compact('crime_books'));
    }

    public function search(Request $request)
    {
        // $search = 'discipline';
        $search = $request->query('search');
        $search_result = Book::query()
            ->where('title', 'like', "%{$search}%")
            ->orderBy('price', 'desc')
            ->limit(10)
            ->get();
        return $search_result;
    }
}

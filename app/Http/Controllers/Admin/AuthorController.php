<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {

        $authors = Author::query()
            ->LIMIT(10)
            ->orderBy('name', 'asc')
            ->get();

        return view('authors.authors', compact('authors'));
    }

    public function create()
    {

        return view('authors.authors-create');
    }

    public function store()
    {
        $author = new Author;
        
        $author->name = $_POST['name'];
        $author->slug = $_POST['slug'];
        $author->bio = $_POST['bio'];

        $author->save();
        return redirect('/admin/authors');
    }
}

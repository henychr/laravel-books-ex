<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ReviewController extends Controller
{


    public function store(Request $request, $book_id)
    {


        $this->validate($request, [
            'text' => 'required|max:255',

        ], [
            'text' => 'Fill review with less then 255 characters',

        ]);



        //checks whether user has already submited review
        $check = Review::query()
            ->where('book_id', '=', $book_id)
            ->where('user_id', '=', auth()->user()->id)
            ->get();

        if (!empty($check[0]->id)) {
            session()->flash('error_message', 'You can submit only one review');
            return redirect('/admin/book/' . $book_id);
        }

        $review_id = Review::insertGetId([
            'book_id' => $book_id,
            'user_id' => auth()->user()->id,
            'text' => $_POST['text'],

        ]);

        if (!empty($review_id)) {
            session()->flash('success_message', 'Review saved');
        } else {
            session()->flash('error_message', 'Review not saved');
        }
        return redirect('/admin/book/' . $book_id);
    }
}

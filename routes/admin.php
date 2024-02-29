<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;




Route::get('/admin/authors', [AuthorController::class, 'index']); //list authors
Route::get('/admin/authors/create', [AuthorController::class, 'create']); //create authors
Route::post('/admin/authors', [AuthorController::class, 'store']); //store authors
Route::get('/admin/books', [BookController::class, 'index']); // view books
Route::get('/admin/books/create', [BookController::class, 'create']); //create books
Route::post('/admin/books', [BookController::class, 'store']); //store books
Route::get('/admin/books/{book_id}', [BookController::class, 'edit']); //edit book (finds to book and return to the view)
Route::put('/admin/books/{book_id}', [BookController::class, 'update']); //update book
Route::get('/admin/book/{book_id}', [BookController::class, 'show']); //show book details
Route::get('/admin/users', [UserController::class, 'index']); //show users

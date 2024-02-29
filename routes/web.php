<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\ReviewController;
use Database\Seeders\BookshopsSeeder;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

// Route::get('/', [MyController::class, 'showTitle']);

Route::get('/', function () {
    return view('index.index');
});

Route::get('/about-us', function () {
    return view('about.about-us');
});


Route::get('/crime-books', [BookController::class, 'crimeBooks']);



// Route::group(['middleware' => 'can:admin'], function () {
//     //jen priklad, uz je v adminu\, ale normalne by bylo pristupne jen pro admin usery
//     Route::get('/admin/authors/create', [AuthorController::class, 'create']); //create authors
// });

// nebo na konci za route
// Route::get('/admin/authors/create', [AuthorController::class, 'create'])->middleware('can:admin');



Route::post('/book/{book_id}/review', [ReviewController::class, 'store']);



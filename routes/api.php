<?php

use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/test/array', [TestController::class, 'arrayResponse']);
Route::get('/test/model', [TestController::class, 'modelResponse']);
Route::get('/test/collection', [TestController::class, 'collectionResponse']);
Route::get('/books/latest', [BookController::class, 'latest']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/books/search', [BookController::class, 'search']);

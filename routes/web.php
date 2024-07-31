<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


Route::post('/books', [BooksController::class, 'store'])->name('books.store');
Route::get('/', function () {
    return view('books');
});

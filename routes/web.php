<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


Route::get('/', [BooksController::class, 'index'])->name('books.index');
Route::post('/books', [BooksController::class, 'store'])->name('books.store');
Route::get('/create',[BooksController::class, 'create'])->name('books.create');
Route::delete('/books/{id}', [BooksController::class, 'destroy'])->name('books.destroy');
<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::resource('/books', BookController::class)->only('index','show');



Route::middleware('throttle:review-per-book')->group(function () {
    Route::resource('books.reviews', ReviewController::class)
        ->scoped(['reviews' => 'book'])
        ->only(['create', 'store']);
});

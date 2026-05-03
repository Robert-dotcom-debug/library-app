<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('/', '/books');
Route::redirect('/Books', '/books');
Route::redirect('/Authors', '/authors');

Route::resource('books', BookController::class);

Route::resource('authors', AuthorController::class);

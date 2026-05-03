<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/books');
Route::redirect('/Books', '/books');
Route::redirect('/Authors', '/authors');
Route::redirect('/Categories', '/categories');

Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('categories', CategoriesController::class);

Route::get('/miembros', function () {
    return view('miembros.index', [
        'members' => Member::with('user')->take(10)->get(),
    ]);
})->name('miembros.index');

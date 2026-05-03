<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('books')
            ->orderBy('name')
            ->paginate(20);

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load('books.authors', 'books.category');

        return view('categories.show', compact('category'));
    }

    public function create() { /* Guia 7 */ }
    public function store(Request $request) { /* Guia 7 */ }
    public function edit(Category $category) { /* Guia 7 */ }
    public function update(Request $request, Category $category) { /* Guia 7 */ }
    public function destroy(Category $category) { /* Guia 7 */ }
}

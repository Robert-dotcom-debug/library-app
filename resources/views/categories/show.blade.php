@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <a href="{{ route('categories.index') }}"
       class="text-sm text-slate-600 hover:text-slate-900 mb-4 inline-block">
        &larr; Volver a categorias
    </a>

    <div class="rounded-2xl shadow-sm overflow-hidden bg-white mb-8">
        <div class="px-6 py-6 text-white" style="background-color: {{ $category->color ?? '#475569' }}">
            <h1 class="text-3xl font-bold">{{ $category->name }}</h1>
            <p class="mt-2 text-white/90">
                {{ $category->description ?: 'Sin descripcion registrada.' }}
            </p>
        </div>

        <div class="px-6 py-4 flex items-center gap-3 text-sm text-slate-600">
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-slate-100 text-slate-800 font-medium">
                {{ $category->books->count() }} libros
            </span>
            <span>Slug: <code>{{ $category->slug }}</code></span>
        </div>
    </div>

    <h2 class="text-2xl font-bold text-slate-900 mb-4">Libros de la categoria</h2>

    @if($category->books->isEmpty())
        <p class="text-slate-500 italic">Esta categoria aun no tiene libros registrados.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($category->books as $book)
                <x-book-card :book="$book" />
            @endforeach
        </div>
    @endif
@endsection

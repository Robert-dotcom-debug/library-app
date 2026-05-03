@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-slate-900">Categorias</h1>
            <p class="text-slate-600 mt-1">Explora las categorias disponibles y cuantos libros contiene cada una.</p>
        </div>
    </div>

    @if($categories->isEmpty())
        <p class="text-slate-500 italic">Aun no hay categorias registradas.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($categories as $category)
                <a href="{{ route('categories.show', $category) }}"
                   class="block rounded-xl shadow-sm hover:shadow-md transition overflow-hidden bg-white">
                    <div class="p-5 text-white" style="background-color: {{ $category->color ?? '#475569' }}">
                        <h2 class="text-xl font-bold">{{ $category->name }}</h2>
                        <p class="text-sm text-white/85 mt-1">
                            {{ $category->description ?: 'Sin descripcion registrada.' }}
                        </p>
                    </div>

                    <div class="px-5 py-4 flex items-center justify-between">
                        <span class="text-slate-600 text-sm">Libros registrados</span>
                        <span class="inline-flex items-center justify-center min-w-10 px-3 py-1 rounded-full bg-slate-100 text-slate-900 font-semibold text-sm">
                            {{ $category->books_count }}
                        </span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $categories->links() }}
        </div>
    @endif
@endsection

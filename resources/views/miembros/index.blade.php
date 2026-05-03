@extends('layouts.app')

@section('title', 'Miembros')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-slate-900">Miembros</h1>
            <p class="text-slate-600 mt-1">Vista temporal para comprobar el componente <code>membership-badge</code>.</p>
        </div>
    </div>

    @if($members->isEmpty())
        <p class="text-slate-500 italic">No hay miembros para mostrar.</p>
    @else
        <div class="bg-white shadow-sm rounded overflow-hidden">
            <table class="w-full">
                <thead class="bg-slate-900 text-white text-left text-sm">
                    <tr>
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Codigo</th>
                        <th class="px-4 py-3">Tipo de membresia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr class="border-b border-slate-100 {{ $loop->even ? 'bg-slate-50' : 'bg-white' }}">
                            <td class="px-4 py-3 font-medium">{{ $member->user->name ?? 'Sin usuario' }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $member->member_code }}</td>
                            <td class="px-4 py-3">
                                <x-membership-badge :type="$member->membership_type" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection

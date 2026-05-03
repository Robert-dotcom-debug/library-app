@props(['type'])

@php
    $config = [
        'standard' => [
            'label' => 'Estandar',
            'class' => 'bg-slate-200 text-slate-800',
            'icon' => null,
        ],
        'premium' => [
            'label' => 'Premium',
            'class' => 'bg-amber-200 text-amber-900',
            'icon' => '★',
        ],
        'student' => [
            'label' => 'Estudiante',
            'class' => 'bg-blue-100 text-blue-800',
            'icon' => null,
        ],
    ];

    $badge = $config[$type] ?? [
        'label' => ucfirst((string) $type),
        'class' => 'bg-slate-100 text-slate-800',
        'icon' => null,
    ];
@endphp

<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold {{ $badge['class'] }}">
    @if($badge['icon'])
        <span aria-hidden="true">{{ $badge['icon'] }}</span>
    @endif
    <span>{{ $badge['label'] }}</span>
</span>

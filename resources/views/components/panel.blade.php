@php
    $classes =
        'bg-white/5 shadow-lg rounded-xl flex gap-6 border border-transparent hover:shadow-blue-800/35 hover:border-blue-800 transition-all duration-200 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>

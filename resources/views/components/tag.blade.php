@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/20 transition-colors duration-200 rounded-xl font-bold';

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }
@endphp

<a href="/tags/{{ $tag }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>

@props(['employer', 'width' => 90])

@php
    $asset = asset('storage/' . $employer->logo);
    if (str_starts_with($employer->logo, 'https://picsum.photos/')) {
        $asset = asset($employer->logo);
    }
@endphp

<img src="{{ $asset }}" alt="employer logo" class="rounded-lg self-start " width="{{ $width }}"
    loading="lazy" />

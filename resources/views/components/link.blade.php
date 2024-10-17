@props(['href', 'icon'])

<a href="{{ $href }}">
    <i class="{{ $icon }}"></i>
    <span class="text">{{ $slot }}</span>
</a>

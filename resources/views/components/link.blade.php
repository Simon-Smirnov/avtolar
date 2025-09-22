@props([
    'active' => false
])
<a {{ $attributes }} class="{{ $active ? 'text-yellow-500' : 'text-white' }} hover:text-brand-1 transition-all flex items-center gap-1 text-sm flex" >{{ $slot }}</a>
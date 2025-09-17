@props([
    'active' => false
])
<a {{ $attributes }} class="{{ $active ? 'text-yellow-500' : 'text-white' }} hover:text-gray-300 transition-all" >{{ $slot }}</a>
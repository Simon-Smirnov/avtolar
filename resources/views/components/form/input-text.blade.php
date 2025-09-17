@props([
    'old' => '',
    'error' => ''
])
<input 
    {{ $attributes->merge(['class' => 'border ' . ($errors->has($error) ? 'border-red-500' : 'border-gray-700') . ' rounded py-1 px-2 w-70']) }} 
    type="text"  
    value="{{ old($old) }}"
>
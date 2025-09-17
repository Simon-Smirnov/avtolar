<button 
    type="submit"
    {{ $attributes->merge(['class' => 'gray-yellow-700 rounded px-2 py-1 text-white min-w-40 flex justify-center text-center transition-all cursor-pointer hover:bg-gray-500']) }} >
    {{ $slot }}
</button>
@if (request()->routeIs('home'))
    <x-logo/>
@else
    <a class="hover:scale-1" href="{{ route('home') }}">
        <x-logo/>
    </a>
@endif
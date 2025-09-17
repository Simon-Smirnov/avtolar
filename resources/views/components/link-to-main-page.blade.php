@if (request()->routeIs('home'))
    <x-logo/>
@else
    <a href="{{ route('home') }}">
        <x-logo/>
    </a>
@endif
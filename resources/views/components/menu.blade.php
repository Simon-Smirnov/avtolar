<nav class="py-4">
    <ul class="flex gap-4">
        <li>
            <x-link href="/" :active="request()->is('/')">Main page</x-link>
        </li>
        <li>
            <x-link href="/jobs" :active="request()->is('jobs')">Jobs page</x-link>
        </li>
        <li>
            <x-link href="/contact" :active="request()->is('contact')">Contact page</x-link>
        </li>
        @auth
            <li>
                <x-link href="/jobs/create" :active="request()->is('jobs/create')">Create new job</x-link>
            </li>
        @endauth
    </ul>
</nav>
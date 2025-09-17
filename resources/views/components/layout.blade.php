<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <title>{{ $title ?? 'Автобан - магазин автозапчастей в Кирове' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <div class="bg-bg-contrast text-text-main-contrast">
                <div class="container mx-auto">
                    <div class="py-4">
                        <div>
                            Мы в контакте:
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-2">
                    <x-link-to-main-page/>
                    <x-menu/>
                </div>
                <div class="w-fit flex mx-auto mb-4 items-center gap-4">
                    <div class="text-white">Search job</div>
                    <form action="/search" class="flex items-center gap-2">
                        <x-form.input-text name="q" class="bg-white mt-0" placeholder="Gladilshik"/>
                        <x-button class="bg-yellow-700 hover:bg-yellow-500">Search</x-button>
                    </form>
                </div>
            </div>
        </header>
        <main>
            @if((request()->routeIs('home')))
                <section>
                    <img class="h-96 w-full object-cover" src="{{ Vite::asset('resources/images/main_banner.png') }}" alt="">
                </section>
            @endif
            <div class="container mx-auto py-1 px-2">
                {{ $heading }}
                {{ $slot }}
            </div>
        </main>
    </body>
</html>
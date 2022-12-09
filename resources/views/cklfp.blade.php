    @guest

        <x-contexts.public.guest>

            @isset($slot)
                {{ $slot }}
            @endisset

        </x-contexts.public.guest>

    @endguest

    @auth
        <x-contexts.private.authted>

            @isset($slot)
                {{ $slot }}
            @endisset

        </x-contexts.private.authted>
    @endauth
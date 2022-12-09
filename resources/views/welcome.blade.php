<x-templates.welcome-page>

    @guest
        <x-contexts.public.welcome>

            @isset($slot)
                {{ $slot }}
            @endisset

        </x-contexts.public.welcome>
    @endguest

</x-templates.welcome-page>

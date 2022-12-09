<x-templates.cv-page>
    <x-layouts.animations.background.stars />

        <!-- Conteúdos -->
        @isset($slot)
            {{ $slot }}
        @endisset

</x-templates.cv-page>
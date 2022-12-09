<x-templates.containers.contentor-full>
    <!-- Welcome -->
    <div id='js-contentor-welcome'>

            @isset($slot)
                {{ $slot }}
            @endisset

    </div>

</x-templates.containers.contentor-full>
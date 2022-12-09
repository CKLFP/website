<x-templates.containers.contentor-full>
<!-- Efeito de fundo - estrelas -->
        <div id='js-contentor-stars'>
            @for ($i = 1; $i <= 3; $i++)
                <div id='stars{{ $i }}'></div>
            @endfor
        </div>

</x-templates.containers.contentor-full>
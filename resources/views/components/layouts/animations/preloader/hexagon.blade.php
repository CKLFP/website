<x-templates.temp.pre-loader>
    <!-- Animação pre-loader -->
    <div id='js-pre-loader' class='pre-loader'>
        <div class='hexagon-container'>
            @for ($i = 1; $i <= 7; $i++)
            <div class='hexagon hex_{{ $i }}'></div>
            @endfor
        </div>
    </div>

</x-templates.temp.pre-loader>
<div
    x-data="{
        open: false,
        toggle(){
            this.open = this.open ? this.close() : true
        },
        close(focusAfter) {
            this.open = false
            focusAfter && focusAfter.focus()
        }
    }"
    @keydown.escape.prevent.stop="close($refs.langButton)"
    @focusin.window="! $refs.painel.contains($event.target) && close()"
    x-id="['langList']"
    class="relative"
>
    <button
        x-ref="langButton"
        @click="toggle()"
        aria-expanded="open"
        aria-controls="$id('langList')"
        type="button"
        class="btnLang"
    >
        {{ $this->currentLanguage }}
    </button>
    <div
        x-ref="painel"
        x-show="open"
        x-transition.origin.top.right
        @click.outside="close($refs.langButton)"
        :id="$id('langList')"
        style="display: none"
        class="langList"
    >
        @foreach($this->language_list as $language => $this->availableLanguage)
            @if($this->availableLanguage === $this->currentLanguage)
                <span class="langLink">{{ $language }}</span>
            @else
                <a class="langLink no-underline" href="/{{ $this->availableLanguage }}/{{ request()->segment(2) }}">
                    <span>{{ $language }}</span>
                </a>
            @endif
        @endforeach
    </div>
</div>
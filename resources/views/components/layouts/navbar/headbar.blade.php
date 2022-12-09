<x-templates.containers.headers.top>
    
    <x-templates.containers.headers.left.>

        <div class="contentorLogoHeader">
            <a href="{{ route('home', session('curentLang')) }}" title="{{ __(config('app.name')) }}">
                <x-logo.cw />
            </a>
        </div>
        
        <div class="contentorMenuItems">
            <div class="contentorAuth">
                <x-menu.authlinks />
                <x-language.switcher />
            </div>
        </div>

    </x-templates.containers.headers.top>
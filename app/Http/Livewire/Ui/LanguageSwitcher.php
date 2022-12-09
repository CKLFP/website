<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $language_list = '';

    public $currentLanguage = '';

    public function mount()
    {
        $this->currentLanguage = session('current_language');
        $this->language_list = config('languages.available_languages');
    }

    public function render()
    {
        return view('livewire.ui.language-switcher');
    }
}

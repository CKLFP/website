<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class Cv extends Component
{
    public $cklfpHash = '';

    public function mount()
    {
        $this->cklfpHash = md5(strtolower(trim('luis.filip@gmail.com')));
    }

    public function render()
    {
        return view('livewire.guest.cv' )->layout('cklfp');
    }
}

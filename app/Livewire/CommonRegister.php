<?php

namespace App\Livewire;

use Livewire\Component;

class CommonRegister extends Component
{
    public $registrationType = 'user';

    public function render()
    {

        return view('livewire.common-register');
    }

}

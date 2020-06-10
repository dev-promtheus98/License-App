<?php

namespace App\Http\Livewire;

use Livewire\Component;

class License extends Component
{
    public $teamSize = 2;

    public $amount = 30;

    public function render()
    {
        return view('livewire.license');
    }
}

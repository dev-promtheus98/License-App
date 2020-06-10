<?php

namespace App\Http\Livewire;

use Livewire\Component;

class License extends Component
{
    public $teamSize = 2;

    public $amount = 30;

    public function mount()
    {
        $this->amount = $this->calculateAmount($this->teamSize);
    }

    public function updatedTeamSize(int $value)
    {
        $this->amount = $this->calculateAmount($value);
    }

    public function render()
    {
        return view('livewire.license');
    }

    private function calculateAmount(int $teamSize)
    {
        return $teamSize <= 5 ? $teamSize * 15 : 50 + ($teamSize - 5) * 10;
    }
}

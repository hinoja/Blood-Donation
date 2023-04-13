<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class RegisterHospital extends Component
{
    public $step ;
    public function mount()
    {
        $this->step = 1;
    }
    public function previous(): void
    {
        $this->step--;
    }
    public function next(): void
    {
        $this->step++;
    }
    public function render()
    {
        return view('livewire.front.register-hospital');
    }
}

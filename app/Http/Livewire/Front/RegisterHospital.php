<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class RegisterHospital extends Component
{
    // Step
    public $step ,$i=1,$servicesInput=[];

    // Account
    public $hospital_name,$birth_date,$urgency_number,$description;

    // AdminData
    public $manager_name,$manager_email,$call_number,$password;

    // File
    public $logo,$description_file;

    // Services
    // public $service.0,$service.*;
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
    public function add($i): void
    {
        $this->i = ++$i;
        array_push($this->servicesInput, $i);

        $this->resetErrorBag();
    }

    public function remove($i): void
    {
        unset($this->servicesInput[$i]);
    }
    public function render()
    {
        return view('livewire.front.register-hospital');
    }
}

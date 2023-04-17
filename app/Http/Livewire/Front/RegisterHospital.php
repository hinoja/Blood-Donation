<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class RegisterHospital extends Component
{
    // Step
    public $step;

    public $i = 1;

    public $servicesInput = [];

    // Account
    public $hospital_name;

    public $birth_date;

    public $urgency_number;

    public $description;

    // AdminData
    public $manager_name;

    public $manager_email;

    public $call_number;

    public $password;

    // File
    public $logo;

    public $description_file;

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

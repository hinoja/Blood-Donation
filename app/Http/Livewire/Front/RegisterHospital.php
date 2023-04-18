<?php

namespace App\Http\Livewire\Front;

use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Stevebauman\Location\Facades\Location;

class RegisterHospital extends Component
{

    // Step
    public $step;

    public $i = 1, $servicesInput = [];

    // Account
    public $hospital_name,$urgency_email, $birth_date, $urgency_number, $description;

    // AdminData
    public $manager_name, $manager_email, $call_number, $password;

    // File
    public $logo, $description_file;

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
          // location
          $ip = request()->ip(); /*Dynamic IP address */
          $ip = '129.0.76.71'; /* Static IP address */
          $location = Location::get($ip);
        //   $this->location=$location;
        //   dd($location);
        return view('livewire.front.register-hospital',['location'=>$location]);
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;

class ManageAppointment extends Component
{
    public $events = [];

    public function render()
    {
        $this->events = json_encode(Event::all());
        return view('livewire.admin.manage-appointment');
    }
}

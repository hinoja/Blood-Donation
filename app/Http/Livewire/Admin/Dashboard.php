<?php

namespace App\Http\Livewire\Admin;

use App\Models\Hospital;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $donor, $staffHospitals, $user, $hospitals, $online, $hospitalsActive;
    public function render()
    {
        $this->user = count(User::all());
        $this->donor = count(User::where('role_id', 3)->get());
        $this->staffHospitals = count(User::where('role_id', 2)->OrWhere('role_id', 4)->get());
        $this->hospitals = count(Hospital::all());
        $this->hospitalsActive = count(Hospital::where('is_active', 1)->get());
        $online = User::whereNotNull('last_seen')->get();
        $formattedUsers = [];
        foreach ($online as  $user) {
            $formattedUser = [
                $user->where('last_seen' >= now()->subMinutes(2))
            ];
            array_push($formattedUsers, $formattedUser);
        }
        // $this->online = count(User::whereNotNull('last_seen')  ->get());
        $this->online = count($formattedUsers)  ;
            // ->where('last_seen'>= now()->subMinutes(2))

        // ('last_seen'>= now()->subMinutes(2))->get());

        return view('livewire.admin.dashboard');
    }
}

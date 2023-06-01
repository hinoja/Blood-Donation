<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Appointement;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Notifications\Admin\ValidateAppointmentNotification;

class ManageAppointment extends Component
{
    use LivewireAlert, WithPagination;
    public $name;
    public   $showForm, $appointement;

    protected $paginationTheme = 'bootstrap';

    public function closeModal()
    {
        $this->emit('closeModal');
    }
    public function showValidateForm(Appointement $appointement)
    {
        $this->emit('openValidateModal');
        $this->name = $appointement->user->name;
        $this->appointement = $appointement;
    }
    public function ActiveAppointment()
    {
        $this->closeModal();
        $this->appointement->is_validated = 1;
        $this->appointement->save();
        Notification::send($this->appointement->user->email, new ValidateAppointmentNotification($this->appointement));

        $this->alert('success', trans('the appointment has been confirmed and an e-mail sent to the potential donor'));
        return redirect()->back();
    }




    public function render()
    {
        return view('livewire.admin.manage-appointment', ['appointments' => Appointement::with(['user'])
            ->latest()
            ->paginate(7)]);
    }
}

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
    public   $showForm;

    protected $paginationTheme = 'bootstrap';

    public function closeModal()
    {
        $this->emit('closeModal');
    }
    public function showValidateForm(Appointement $appointement)
    {
        $this->emit('openValidateModal');
        $this->name = $appointement->user->name;
        // dd($this->name);
    }
    public function ActiveAppointment()
    {
        dd("test");
        $this->appointement->is_validate = 1;
        Notification::send($this->appointement->user->email, new ValidateAppointmentNotification($this->appointement));

        $this->closeModal();
        $this->alert('success', trans('The subscription has been successfully validated'));

        // toast(trans('The subscription has been successfully validated'), 'success');
    }
    // public function showModalForm(Appointement $appointment)
    // {
    //     $this->resetValidation();
    //     $this->emit('openModal');
    //     $this->displayHospital = $appointment;
    // }

    // public function showConfirmationModal(Appointement $appointment)
    // {
    //     $this->emit('closeModal');
    //     $this->emit('showConfimation');
    //     $this->data = $appointment;
    // }

    // public function ConfirmationActivate()
    // {
    //     $this->closeModal();
    //     $this->data->is_active = 1;
    //     $this->data->save();
    //     // Notification::send($this->data, new ActivateHospitalNotification($this->data['name']));
    //     $this->emit('closeModalConfirmation');
    //     $this->alert('success', trans('The account has been approved and a confirmation email has been sent to the said Appointement'));

    //     // toast(trans('The account has been approved and a confirmation email has been sent to the said Appointement '), 'success');
    //     return redirect()->back();
    // }



    public function render()
    {
        return view('livewire.admin.manage-appointment', ['appointments' => Appointement::with(['user'])
            ->latest()
            ->paginate(7)]);
    }
}

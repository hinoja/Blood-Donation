<?php

namespace App\Http\Livewire\Admin;

use App\Models\Appointement;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageAppointment extends Component
{
    use LivewireAlert, WithPagination;

    public $data, $displayHospital, $showForm;

    protected $paginationTheme = 'bootstrap';

    public function closeModal()
    {
        $this->emit('closeModal');
    }

    public function showModalForm(Appointement $appointment)
    {
        $this->resetValidation();
        $this->emit('openModal');
        $this->displayHospital = $appointment;
    }

    public function showConfirmationModal(Appointement $appointment)
    {
        $this->emit('closeModal');
        $this->emit('showConfimation');
        $this->data = $appointment;
    }

    public function ConfirmationActivate()
    {
        $this->closeModal();
        $this->data->is_active = 1;
        $this->data->save();
        // Notification::send($this->data, new ActivateHospitalNotification($this->data['name']));
        $this->emit('closeModalConfirmation');
        $this->alert('success', trans('The account has been approved and a confirmation email has been sent to the said Appointement'));

        // toast(trans('The account has been approved and a confirmation email has been sent to the said Appointement '), 'success');
        return redirect()->back();
    }



    public function render()
    {
        return view('livewire.admin.manage-appointment', ['appointments' => Appointement::with(['user'])
                                                                                                             ->latest()
                                                                                                            ->paginate(7)]);
    }
}

<?php

namespace App\Http\Livewire\Admin\Hospitals;

use Livewire\Component;
use App\Models\Hospital;
use App\Notifications\Amin\Hospitals\ActivateHospitalNotification;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageHospital extends Component
{
    use LivewireAlert, WithPagination;

    public $data, $displayHospital, $showForm;

    protected $paginationTheme = 'bootstrap';

    public function closeModal()
    {
        // $this->reset('reply');
        // $this->resetErrorBag();
        // $this->resetValidation();
        $this->emit('closeModal');
    }

    public function showModalForm(Hospital $hospital)
    {
        $this->resetValidation();
        $this->emit('openModal');
        $this->displayHospital = $hospital;
    }

    public function showConfirmationModal(Hospital $hospital)
    {
        $this->emit('closeModal');
        $this->emit('showConfimation');
        $this->data = $hospital;
    }

    public function ConfirmationActivate()
    {
        $this->closeModal();
        // $this->emit('closeModal');
        $this->data->is_active = 1;
        $this->data->save();
        // Notification::send($this->data, new ActivateHospitalNotification($this->data['name']));
        $this->emit('closeModalConfirmation');
        $this->alert('success', trans('The account has been approved and a confirmation email has been sent to the said Hospital'));

        // toast(trans('The account has been approved and a confirmation email has been sent to the said Hospital '), 'success');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.admin.hospitals.manage-hospital', ['hospitals' => Hospital::query()
            ->latest()
            ->paginate(7)]);
    }
}

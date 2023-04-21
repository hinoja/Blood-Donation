<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use App\Notifications\Admin\Contact\ContactNotification;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ContactManage extends Component
{
    use LivewireAlert, WithPagination;

    public $name,$reply,$response, $displayContact, $showForm;

    protected $paginationTheme = 'bootstrap';

    public function closeModal()
    {
        $this->reset('reply');
        $this->resetErrorBag();
        $this->resetValidation();
        $this->emit('closeModal');
    }

    public function showModalForm(Contact $contact)
    {
        $this->resetValidation();
        $this->emit('openModal');
        $this->displayContact = $contact;
    }

    public function replyMessage(Contact $contact)
    {
        $this->emit('showFormReply');
        $response = $this->validate([
            'reply' => ['required', 'string'],
        ]);
        $contact->response = $response['reply'];
        $contact->save();

        Notification::send($contact, new ContactNotification($response['reply'], $contact->subject));

        $this->closeModal();

        $this->alert('success', trans('The response was successfully sent to ').$contact->name);

        return redirect()->back();
    }

    public function showReplyInput()
    {
        $this->emit('showFormReply');
        $this->showForm = true;
    }

    public function closeReply()
    {
        $this->emit('closeFormReply');
        $this->showForm = false;
    }

    public function render()
    {
        return view('livewire.admin.contacts.contact-manage', ['messages' => Contact::query()
                                                                                                        ->latest()
                                                                                                        ->paginate(7)]);
    }
}

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
    use LivewireAlert;
    use WithPagination;

    public $name;

    public $reply;

    public $email;

    public $messageModal;

    public $subject;

    public $response;

    public $displayContact;

    public $showForm;

    protected $paginationTheme = 'bootstrap';

    public function closeModal()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
        $this->emit('closeModal');
    }

    public function showModalForm(Contact $contact)
    {
        $this->resetValidation();
        $this->emit('openModal');
        $this->displayContact = $contact;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->messageModal = $contact->message;
        $this->subject = $contact->subject;
        $this->response = $contact->response;
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

        return redirect()->route('admin.messages.index');
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
                                                                                                    ->paginate(5)]);
    }
}

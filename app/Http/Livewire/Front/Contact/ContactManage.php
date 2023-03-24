<?php

namespace App\Http\Livewire\Front\Contact;

use App\Models\Contact;
use App\Notifications\front\Contact\ContactConfirmationNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Illuminate\Support\Facades\Request;

class ContactManage extends Component
{
    public $name, $subject, $message, $email;
    public function store(Request $request)
    {
        $data = $this->validate([
            'email' => ['required', 'email'],
            'message' => ['required', 'string'],
            'subject' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
        ]);
        $contact = Contact::create($data);
        // dd($contact);
        Notification::send($contact, new ContactConfirmationNotification($data['name']));
        // dd('passer');
        return redirect()->back()->with('success', 'Your message is considerated with successfully');;
    }
    public function render()
    {
        return view('livewire.front.contact.contact-manage');
    }
}

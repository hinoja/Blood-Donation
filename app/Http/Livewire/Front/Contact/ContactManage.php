<?php

namespace App\Http\Livewire\Front\Contact;

use App\Models\Contact;
use App\Notifications\front\Contact\ContactConfirmationNotification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class ContactManage extends Component
{
    public $name;

    public $subject;

    public $message;

    public $email;

    public function store(Request $request)
    {
        $apiKey = 'Q0b2xqmiV0Uya2ISFqPzG5yuNvcEUJ';

        $data = $this->validate([
            'email' => ['required', 'email'],
            'message' => ['required', 'string'],
            'subject' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
        ]);
        // Api de verification des emails existantes
        // $reponse = Http::get('https://app.shakelist.io/api/1.0/check.php?apikey=' . $apiKey . '&email=' . $data['email'])->json();
        // if ($reponse['result'] == 'OK') {
        $contact = Contact::create($data);

        Notification::send($contact, new ContactConfirmationNotification($contact));

        Alert::alert('success', trans('Your message has been successfully sent to the platform administrator. You will receive an email as soon as possible.'), 'success')->autoclose(7000);
        // } else {
        // Alert::alert('warning', trans('Your message has not been sent to the platform administrator. Because your email address does not exist'), 'warning')->autoclose(7000);
        // }

        // return redirect()->back();
        $this->redirectRoute('front.contact');
    }

    public function render()
    {
        return view('livewire.front.contact.contact-manage');
    }
}

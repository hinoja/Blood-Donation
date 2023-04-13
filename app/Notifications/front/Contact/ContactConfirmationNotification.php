<?php

namespace App\Notifications\front\Contact;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactConfirmationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Contact $contact)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting(trans('Hello  ') . $this->contact->name)
            ->when(
                $notifiable->role_id === 1,
                fn ($mail) => $mail->subject(trans('New Message')),
                fn ($mail) => $mail->subject(trans('Message Sent'))
            )
            ->action(trans('Go to website'), url('/'))
            // ->line(trans('Your message has been successfully sent to the platform administrator. You will receive an email as soon as possible.'))
            // ->lineIf(
            //     $notifiable->role_id === 1,
            //     trans('A new message for: ') . $this->contact->subject . trans(', has been sent by ') . $this->contact->name . '.'
            // )
            ->lineIf(
                $notifiable->role_id === 1,
                trans('The content of the message: ') . $this->contact->message
            )
            ->lineIf(
                $notifiable->role_id !== 1,
                trans('Your message for: ') . $this->contact->subject . trans(' has been successfully sent to the administrator. You will receive a response as soon as possible.')
            )
            ->when(
                $notifiable->role_id === 1,
                fn ($mail) => $mail->action(trans('Go to contacts'), url('/admin/dashboard')),
                fn ($mail) => $mail->action(trans('Go to website'), url('/'))
            );
        // ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

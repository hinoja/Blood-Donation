<?php

namespace App\Notifications\Admin;

use App\Models\Appointement;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ValidateAppointmentNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Appointement $appointement)
    {    }

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
        ->greeting("Hello Dear Hospital :" . $this->appointement->user->name)
        ->subject(trans('Confirmation activate Notification'))

        ->line("🍕🍕🍕"  . trans('Congratulation ') . "🍕🍕🍕")
        ->line(
            trans('Your account  has been successfully approuved.')
        )
        ->action(trans('Go to website'), url('/'));
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

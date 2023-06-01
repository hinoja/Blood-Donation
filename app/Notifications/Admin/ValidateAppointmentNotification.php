<?php

namespace App\Notifications\Admin;

use Carbon\Carbon;
use App\Models\Appointement;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ValidateAppointmentNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Appointement $appointement)
    {
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
            ->greeting(trans('Hello  ') . $notifiable->name)
            ->subject("🍕🍕🍕" . trans('Appointment confirmation') . "🍕🍕🍕")
            ->line(trans("Your blood donation can save a life - don't forget to attend your confirmed appointment on ") . $this->appointement->FormatDate($this->appointement->start) . trans(" at ") . Carbon::parse($this->appointement->start->format('H:i:s')) . trans(" at ") . $this->appointement->hospital->name . trans(" in and get tested so that your donation can be used to help those in need."))
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

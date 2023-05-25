<?php

namespace App\Notifications\front;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisterUserNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(){}

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
            ->subject(trans('New potential donor Request'))
            ->line("Le don de sang est l'un des actes les plus importants que vous puissiez faire pour aider votre communauté.Un don de sang peut sauver jusqu'à trois vies. Serez-vous le héros qui en sauvera au moins une ?")
            // ->lineIf(
            //     $notifiable->role_id === 1,
            //     trans('A new request for a type subscription: ') . trans($this->data['type']) . ',' . trans(' has been made by: ') . $this->data['from'] . '.'
            // )
            ->action(trans('Go to website'), url('/'));
            // ->when(
            //     $notifiable->role_id === 1,
            //     fn ($mail) => $mail->action(trans('Go to subscription details'), url("/admin/subscribers/{$this->data['slug']}")),
            //     fn ($mail) => $mail->action(trans('Go to website'), url('/jobs')),
            // )
            ;
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

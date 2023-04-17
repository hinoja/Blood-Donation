<?php

namespace App\Notifications\password;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $code)
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
            ->subject(trans('Password Reset Notification'))
            // We have received your request to reset your account password
            ->line(trans('You are receiving this email because we have received a request to reset the password for your account.'))
            // ->line(trans('We have received your request to reset your account password.'))
            ->line(trans('You can use the following code to recover your account'))
            // You can use the following code to recover your account:
            ->line('CODE  :  '.$this->code)
            ->action(trans('Go to website'), url('/'))
            ->line(trans('This password reset link will expire in ').config('auth.passwords.users.expire').'minutes.')
            ->line(trans('If you did not request a password reset, no further action is required.'));
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

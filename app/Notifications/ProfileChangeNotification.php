<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class ProfileChangeNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $user = Auth::user();
        return (new MailMessage)
            ->line('Client updated profile')
            ->line("Client first name " . $user->first_name)
            ->line("Client last name " . $user->last_name)
            ->line("Client email " . $user->email)
            ->line("Client mobile number " . $user->mobile_number)
            ->line("Client date of birth " . $user->date_of_birth)
            ->line("NEXT OF KIN DETAILS")
            ->line("Next of kin first name" . $user->nok->first_name)
            ->line("Next of kin last name" . $user->nok->last_name)
            ->line("Next of kin address" . $user->nok->address)
            ->line("EMPLOYER DETAILS")
            ->line("Employer name" . $user->employer->name)
            ->line("Employer address" . $user->employer->address)
            ->line("Employer email" . $user->employer->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

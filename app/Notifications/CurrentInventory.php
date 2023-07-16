<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CurrentInventory extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via()
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail()
    {
        $message = (new MailMessage)->markdown('notifications.markdown.user-inventory',
            [
                'assets'  => $this->user->assets,
                'accessories'  => $this->user->accessories,
                'licenses'  => $this->user->licenses,
            ])
            ->subject('Inventory Report');

        return $message;
    }
}

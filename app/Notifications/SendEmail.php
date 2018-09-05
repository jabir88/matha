<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Shipping;
use App\Order;
use App\User;

class SendEmail extends Notification
{
    use Queueable;
    public $user;
    public $ship_details;
    public $order_details;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user ,Shipping $ship_details ,Order $order_details)
    {
        $this->user=$user;
      $this->ship_details=$ship_details;
      $this->order_details=$order_details;
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
        return (new MailMessage)
                    ->subject('Order Confirmation Mail')
                    ->line('Hello '.$this->ship_details->shipping_full_name." we recived your order. we send the order as soon as possiable in this address ".$this->ship_details->shipping_address)
                    ->action('Vist Our Website', url('/'))
                    ->line('Thank you for Order!');
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

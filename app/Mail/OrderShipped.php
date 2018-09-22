<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $ship_details;
    public $order_details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $ship_details, $order_details)
    {
        $this->user=$user;
        $this->ship_details=$ship_details;
        $this->order_details=$order_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders', ['user'=>$this->user,'ship_details'=>$this->ship_details,'order_details'=>$this->order_details]);
    }
}

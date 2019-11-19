<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Model\Order;

class OrderConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance
     *
     * @var Order
    */
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fabricio@official.com')
                    ->text('emails.orders.confirmed')
                    ->to($this->order->email);
    }
}

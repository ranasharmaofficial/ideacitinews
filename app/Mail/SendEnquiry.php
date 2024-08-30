<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(private $data, $get_price_data, $get_product_fields)
    {
        $this->get_product_fields = $get_product_fields;
        $this->get_price_data = $get_price_data;
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Price Enquiry',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        // $data = [
        //     'data' => $this->data,
        //     'get_price_data' => $this->get_price_data,
        //     'get_product_fields' => $this->get_product_fields
        // ];
        // dd($data);
        return new Content(
            view: 'mail.enquiry',
            with: [
                'data' => $this->data,
                'get_price_data' => $this->get_price_data,
                'get_product_fields' => $this->get_product_fields
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}

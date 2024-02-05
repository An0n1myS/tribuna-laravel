<?php

namespace App\Mail;

use App\Models\BookingEvent;
use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class newMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(int $bookingEvent_id)
    {
        $this->bookingEvent_id = $bookingEvent_id;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Онлайн квиток',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $bookingEvent = BookingEvent::where('id', '=', $this->bookingEvent_id)->first();
        $email = $bookingEvent->mail;
        $event = Event::where('id','=',$bookingEvent->event_id)->first();
        return $this
            ->to($email)
            ->subject('New Mail')
            ->markdown('email', compact(['bookingEvent','event']));
    }
}

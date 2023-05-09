<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $recipient;
    protected $subscriber;

    public function __construct(User $recipient, User $subscriber)
    {
        $this->recipient = $recipient;
        $this->subscriber = $subscriber;
    }

    /**
     * Возвращает письмо
     * @return mixed
     */
    public function build()
    {
        $subject = 'У вас новый подписчик';

        return $this->subject($subject)
            ->view('components.notification', [
                'recipient' => $this->recipient,
                'subscriber' => $this->subscriber
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
}

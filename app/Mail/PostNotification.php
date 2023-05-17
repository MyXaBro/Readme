<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $author;
    protected $subscriber;
    protected $post;

    /**
     * Create a new message instance.
     */
    public function __construct(User $author, User $subscriber, Post $post)
    {
        $this->author = $author;
        $this->subscriber = $subscriber;
        $this->post = $post;
    }

    public function build()
    {
        return $this->subject('Новая публикация от пользователя ' . $this->author->name)
            ->view('components.new_post_notification')
            ->with([
                'author' => $this->author,
                'subscriber' => $this->subscriber,
                'post' => $this->post,
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Post Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'components.new_post_notification',
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

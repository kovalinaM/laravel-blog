<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PasswordMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $password;

    /**
     * Create a new message instance.
     */
    public function __construct(string $password)
    {
        $this->password = $password;
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        return $this->subject('Ваш новый пароль')
            ->view('emails.password')
            ->with(['password' => $this->password]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Password Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.user.password',
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

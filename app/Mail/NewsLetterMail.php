<?php

namespace App\Mail;

use App\Models\NewsLetter;
use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsLetterMail extends Mailable
{
    use Queueable, SerializesModels;

    public NewsLetter $newsLetter;

    /**
     * Create a new message instance.
     */
    public function __construct(NewsLetter $newsLetter)
    {
        $this->newsLetter = $newsLetter;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'News Letter Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $projects = Project::latest()->limit(2)->get();

        return new Content(
            view: 'emails.newsletter.newsletter',
            with: [
                "newsletter" => $this->newsLetter,
                "projects"   => $projects
            ]
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

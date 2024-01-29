<?php

namespace App\Mail;

use App\Models\ContactUs;
use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    private ContactUs $contactUs;
    /**
     * Create a new message instance.
     */
    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM', null), 'Diaco contact us form'),
            replyTo: [
                new Address('info@irdiaco.ca', 'Diaco'),
            ],
            subject: 'Diaco Center Contact us',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $projects = Project::latest()->limit(2)->get();

        return new Content(
            view: 'emails.contact-us.contact-us',
            with: [
                'contact' =>  $this->contactUs,
                'projects'=>  $projects,
                'user'    =>  $this->contactUs->first_name
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

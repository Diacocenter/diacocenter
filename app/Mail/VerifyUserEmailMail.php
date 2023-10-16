<?php

namespace App\Mail;

use App\Models\Project;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class VerifyUserEmailMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope()
    {
        $verificationCodes = $this->user->verification_code;
        $name = $this->user->name;

        Log::info('Email content:', [
            'name'              => $name,
            'verification_code' => $verificationCodes,
            'to'                => $this->user->email,
            'subject'           => 'Email Verification - Landa Trip'
        ]);

        return new Envelope(
            from: env("MAIL_FROM_ADDRESS"),
            to: $this->user->email,
            bcc: env("MAIL_RECIPIENT_1"),
            subject: 'Verify User Email Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $projects = Project::latest()->limit(2)->get();
        return new Content(
            view: 'emails.verify-email.verify-email',
            with: [
                'name'              => $this->user->first_name,
                'projects'          => $projects,
                'verification_code' => $this->user->verification_code
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

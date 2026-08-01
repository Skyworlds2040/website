<?php

namespace App\Mail;

use App\Models\VendorApplication;
// Removed Queueable and ShouldQueue imports
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

// Removed "implements ShouldQueue"
class VendorApplicationSubmitted extends Mailable
{
    use SerializesModels; // Kept for proper model serialization

    public function __construct(public VendorApplication $application)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Vendor Application: ' . $this->application->business_name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.vendor_application_submitted',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

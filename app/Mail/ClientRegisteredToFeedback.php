<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientRegisteredToFeedback extends Mailable
{
    use Queueable, SerializesModels;

    public function envelope(): Envelope
    {

        return new Envelope(subject: 'Thanks for your feedback');
    }

    public function content(): Content
    {

        return new Content(view: 'emails.registered-to-feedback');
    }

    public function attachments(): array
    {

        return [
            Attachment::fromPath(storage_path('feedback/coupon-code.pdf'))
                ->as('promocode')
                ->withMime('application/pdf'),
//            Attachment::fromPath(storage_path('activities/binary-code.pdf'))
//                ->as('binary-code')
//                ->withMime('application/pdf'),
//            Attachment::fromPath(storage_path('activities/sequencing-and-debugging.pdf'))
//                ->as('sequencing-and-debugging')
//                ->withMime('application/pdf'),
//            Attachment::fromPath(storage_path('presentations/code_your_future.pdf'))
//                ->as('code-your-future')
//                ->withMime('application/pdf'),
        ];
    }
}

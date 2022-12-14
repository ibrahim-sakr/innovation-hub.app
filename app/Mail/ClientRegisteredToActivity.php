<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientRegisteredToActivity extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public Client $client, public string $activityName)
    {
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        $subject = match ($this->activityName) {
            'binary-code' => 'اكتب اسمك بلغة الكمبيوتر',
            'multiplication-table' => 'أسهل نشاط لجدول الضرب',
            'sequencing-and-debugging' => 'نشاط البرمجة',
            default => '',
        };

        return new Envelope(
            subject: $subject
        );
    }

    /**
     * Get the message content definition.
     *
     * @return Content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.registered-to-' . $this->activityName
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments(): array
    {
        $fileName = $this->activityName . '.pdf';

        return [
            Attachment::fromPath(storage_path('activities/' . $fileName))
                ->as($fileName)
                ->withMime('application/pdf'),
        ];
    }
}

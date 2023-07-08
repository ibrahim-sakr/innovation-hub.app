<?php

namespace App\Mail;

use App\Models\Activity;
use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ActivitySubscribed extends Mailable
{
    use Queueable, SerializesModels;

    private $activity;

    /**
     * Create a new message instance.
     */
    public function __construct(Registration $registered)
    {
        $this->activity = Activity::find($registered->model_id);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        return new Envelope(
            subject: match ($this->activity->slug) {
                'binary-code' => 'اكتب اسمك بلغة الكمبيوتر',
                'multiplication-table' => 'أسهل نشاط لجدول الضرب',
                'sequencing-and-debugging' => 'نشاط البرمجة',
                'programing-resources' => 'مصادر مجانية للبرمجة',
                default => '',
            }
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.activity-subscribe',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $fileName = $this->activity->slug . '.pdf';

        return [
            Attachment::fromPath(storage_path('activities/' . $fileName))
                ->as($fileName)
                ->withMime('application/pdf'),
        ];
    }
}

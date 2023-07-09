<?php

namespace App\Mail;

use App\Models\Category;
use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class CategorySubscribed extends Mailable
{
    use Queueable, SerializesModels;

    private $category;

    /**
     * Create a new message instance.
     */
    public function __construct(protected Registration $registered)
    {
        $this->category = Category::find($registered->model_id);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Category Subscribed',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.course-subscribe',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $fileName = Str::snake($this->category->name, '-') . '.jpeg';

        return [
            Attachment::fromPath(storage_path('categories/' . $fileName))
                ->as($fileName)
                ->withMime('image/jpeg'),
        ];
    }
}

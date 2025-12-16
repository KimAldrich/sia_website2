<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class InquiryReceived extends Mailable
{
    use Queueable, SerializesModels;
    public array $inquiry;
    public function __construct(array $inquiry)
    {
        $this->inquiry = $inquiry;
    }
    public function build()
    {
        $type = ucfirst($this->inquiry['type'] ?? 'contact');
        $subject = $this->inquiry['subject'] ?? 'Message';
        return $this->subject('New ' . $type . ' Message: ' . $subject)
            ->view('mail.inquiry');
    }
}

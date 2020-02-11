<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\{ContactRequestReport, ContactAttemptNote};

class SummaryReport extends Mailable
{
    use Queueable, SerializesModels;

    private $contactRequestReport;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactRequestReport $contactRequestReport)
    {
        //
        $this->contactRequestReport=$contactRequestReport;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contactRequestReport',[

            'report' => $this->contactRequestReport]);
    }
}

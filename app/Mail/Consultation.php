<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Consultation extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public function __construct($data)
    {
        $this->request = $data;
    }

    public function build()
    {
        return $this->text('mail.consultation')
            ->from('noreply@wattlewaggler-law.com');
    }

} // end Consultation

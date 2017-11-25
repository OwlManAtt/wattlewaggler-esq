<?php

namespace App\Http\Controllers;

use App\Mail\Consultation;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        Mail::to(config('app.consultation_to_addr'))->send(new Consultation($request->all()));

        $request->session()->flash('contact', 'Your message has been sent to Wattlewager & Associates. Your troubles will soon be over!');
        return redirect('/contact');
    } // end send

} // end ContactController

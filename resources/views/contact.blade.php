@extends('common.layout')

@section('content')
<h2>Contact Us</h2>
<p>Our office is located at <strong>6278 Main Ave, Downlow in the Spike</strong> aboard Absalom Station. We can be reached through the below form, or by calling us at <strong>81 271291</strong> on the station comms network.

<p>Please give us a brief overview of your situation and we'll get in touch with you to set up a free, confidential consultation with one of our legal professionals. You can expect to hear back from us within one cycle.</p>

<h3>Schedule a Free &amp; Confidential Consultation</h3>
@if ($errors->any())
<div class="alert alert-danger">
    <i class="fa fa-exclamation float-left pr-3" style="font-size: 48pt;" aria-hidden="true"></i>
    <p style="font-size: 16pt"><strong>Oops</strong>, there was an error</p>
	<ul class="ml-5">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if (Session::has('contact'))
<div class="alert alert-success" role="alert">
    {{ Session::get('contact') }}
</div>
@endif

<form method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control @isInvalid('name')" id="name" name="name" placeholder="Your full name, please!" value="{{ old('name') }}">
        @showErrors('name')
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control @isInvalid('email')" id="email" name="email" aria-describedby="email" placeholder="So we can reach you" value="{{ old('email') }}">
        @showErrors('email')
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control @isInvalid('message')" id="message" name="message" aria-describedby="messageHelp">{{ old('message') }}</textarea>
        <small id="messageHelp" class="form-text text-muted">Your message is protected by attorney-client priviledge and is <strong>completely confidential</strong>.</small>
        @showErrors('message')
    </div>

    <button type="submit" class="btn btn-primary">Send</button>
</form>

@endsection

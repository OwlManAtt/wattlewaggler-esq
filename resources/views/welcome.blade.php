@extends('common.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">Legal problems? Don't worry.</h1>
    <p class="lead">We can fix problems big or small &mdash; <strong>and get you a big payday!</strong></p>

    <div class="row">
        <div class="col-md-3 ml-auto">
            <ul class="list-unstyled">
                <li>Personal or Work Injuries</li>
                <li>Mining Claims</li>
                <li>Dockyard Red-tape</li>
            </ul>
        </div>

        <div class="col-md-3">
            <ul class="list-unstyled">
                <li>Bankruptcy</li>
                <li>Unpaid Wages</li>
                <li>Elder Law</li>
            </ul>
        </div>

        <div class="col-md-4">
            <ul class="list-unstyled">
                <li>Civil Rights Violations</li>
                <li>Private Weapon Permits &amp; Sales</li>
                <li>Criminal Cases</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mx-auto">
            <p><a class="btn btn-lg btn-block btn-info" href="/contact" role="button">
                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                Book your free confidential consultation today
                <i class="fa fa-phone ml-2" aria-hidden="true"></i>
            </a></p>
        </div>
    </div>
</div>

<div class="row marketing">
    <div class="col-lg-6">
        <h4>Our Mission</h4>
        <p>There are lots of law firms that exist to serve the needs of big corporations, but very few that'll provide that same level of excellent to you, the little guy. If you're a small-business owner, a factory worker, or any other kind of Average Joe just trying to get by, we are here to help you with all your legal problems.</p>

        <h4>Our Promise</h4>
        <p>Our lawyers will go above and beyond for you. Whether it's cleaning up red-tape to get your ship out of impound or handling bail to get your son or daughter back home, our legal team has the experience and connections to make resolving these problems painless and simple.</p>
        <p>Even if you don't think you can afford Wattlewaggler &amp; Associates, we'll still do our best to accomodate you. Payment plans are available, and if we judge your claim solid enough, we'll work pro bono and take our fee from your winnings once they've been paid out.</p>
    </div>

    <div class="col-lg-6">
        <h4>Consultations</h4>
        <p>Everybody on the 'net is quick to tell you to Lawyer Up, but that can be expensive. You've never been to law school, so maybe you're wasting your hard-earned money on expensive and ultimately-fruitless discussion with overpriced lawyers?</p>
        <p>Well, we're not like that. Our firm is here for you, the everyman. <strong>An initial consultation</strong> with our highly-trained legal staff <strong>is always free</strong>. If you think you might need our help navigating the complex web of the Pact Worlds legal system, get in touch and we can set you straight at <strong>no cost</strong>!</p>

        <p><a href="/contact" class="btn btn-lg btn-info" role="button">Book a free consultation now</a></p>
    </div>
</div>
@endsection

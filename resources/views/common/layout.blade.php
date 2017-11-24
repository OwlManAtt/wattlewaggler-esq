<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <title>Wattlewaggler and Associates</title>
    </head>
    <body>

        <header>
           <!-- Fixed navbar -->
           <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
             <a class="navbar-brand" href="#">Wattlewaggler &amp; Associates</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                   <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="/about">About</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="/testimonials">Testimonials</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="/contact">Contact</a>
                 </li>

                 {{-- @TODO make this "private"
                 <li class="nav-item">
                   <a class="nav-link" href="/blog">Blog</a>
                 </li>
                 --}}
               </ul>
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                       <a class="nav-link" href="/login">Staff Login</a>
                   </li>
               </ul>
             </div>
           </nav>
         </header>

         <!-- Begin page content -->
         <main role="main" class="container">
             @yield('content')
         </main>

         <footer class="footer">
             <div class="container">
                <div class="row pt-3">
                    <div class="col-md-6 text-muted">
                        6278 Main Ave, Downlow in the Spike &mdash; Comm ID 81 271291
                    </div>
                    <div class="col-md-6 text-right text-muted">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://twitter.com/WattleAssocLaw">
                                    <i class="fa fa-twitter" aria-hidden="true"></i> WattleAssocLaw
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/OwlManAtt/wattlewaggler-esq">
                                    <i class="fa fa-github" aria-hidden="true"></i> Open Source
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row pt-1">
                    <div class="col-md-6 text-muted">
                        &copy; Copyright 315 - 320 Wattlewaggler &amp; Associates. All rights reserved.
                    </div>
                    <div class="col-md-6 text-right text-muted">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="/legal/terms">Terms and Conditions</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/legal/privacy">Privacy Policy</a>
                            </li>
                    </div>
                </div>
             </div>
         </footer>

         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

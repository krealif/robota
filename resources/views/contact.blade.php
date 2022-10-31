@extends('layouts.base')

@section('content')
    @include('partials.navbar')
    <section class="bg-secondary py-12">
        <div class="container-xl text-center">
            <h1 class="fw-bold text-white display-5">Contact Our Sales Team</h1>
        </div>
    </section>

    <section class="container-xl py-12">
        <div class="row g-6">
            <div class="col-md-4">
                <div class="card bg-light">
                    <div class="card-body p-7">
                        <h5 class="card-title fw-bold">Contact Information</h5>
                        <ul class="list-unstyled">
                            <li><img src="assets/images/site/telephone-fill.svg" alt="telephone" class="m-3">+62853555291</li>
                            <li><img src="assets/images/site/envelope-fill.svg" alt="mail" class="m-3">info@datains.id</li>
                            <li><img src="assets/images/site/location-fill.svg" alt="mail" class="m-3">Jalan Cik Di Tiro 34, Yogyakarta 55223</li>
                        </ul>
                    </div>
                </div>

                <div class="card bg-light mt-8">
                    <div class="card-body p-7">
                        <h5 class="card-title fw-bold">Social Media</h5>
                        <div class="d-md-inline-flex mt-2">
                            <a href="#"><img class="mx-4" src="assets/images/site/facebook.svg" alt="facebook" width="24"></a>
                            <a href="#"><img class="mx-4" src="assets/images/site/whatsapp.svg" alt="whatsapp" width="24"></a>
                            <a href="#"><img class="mx-4" src="assets/images/site/instagram.svg" alt="instagram" width="24"></a>
                            <a href="#"><img class="mx-4" src="assets/images/site/linkedin.svg" alt="linkedin" width="24"></a>
                            <a href="#"><img class="mx-4" src="assets/images/site/twitter.svg" alt="twitter" width="24"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form class="container">
                    <div class="row mt-6">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firtsName"  placeholder="Input">
                        </div>

                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName"  placeholder="Input">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="email" class="form-label">Business Email Address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Input">
                    </div>

                    <div class="mt-6">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Input">
                    </div>

                    <div class="mt-6">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="companyName" placeholder="Input">
                    </div>

                    <div class="mt-6">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Input"></textarea>
                    </div>

                    <div class="mt-4 form-check">
                        <input type="checkbox" class="form-check-input outline-primary border-primary" id="privasiPolice">
                        <label class="form-check-label" for="remember">You agree to our friendly privacy policy.</label>
                    </div>

                    <button class="btn btn-primary mt-4" type="button">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <hr class="container">
    @include('partials.clients')
    @include('partials.testimonials')
    @include('partials.footer')

@endsection
@extends('layouts.base')

@section('content')
    @include('partials.navbar')
    <section class="bg-secondary pt-10 pt-md-18">
        <div class="container-xl">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-sm-11 text-md-center">
                    <div class="mx-md-auto" style="max-width: 40rem">
                        <h1 class="fw-semibold text-white display-4 mb-8">The best way to know your hotel’s performance</h1>
                    </div>
                    <a href="#" class="btn btn-primary btn-lg w-100 w-sm-auto">Get started</a>
                </div>
            </div>
            <div class="row justify-content-center mt-10 mt-md-18">
                <div class="col-12">
                    <img src="assets/images/site/screenshoot.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    @include('partials.clients')
    <hr class="container m-0">
    <section class="container-xl py-12">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">
                <h2 class="fw-semibold fs-3 m-0">Discover the key features</h2>
                <p class="text-muted mt-2 mb-0">Powerful, self-serve product and growth analytics to help you convert, engage, and retain more customers. Trusted by many world class hotels.</p>
            </div>
        </div>
        <div>
            <div class="row mt-12">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body d-flex flex-column text-center">
                            <div class="py-6">
                                <img src="assets/images/site/base.png" alt="" height="36">
                            </div>
                            <h5 class="card-title">Robust Workflow</h5>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                          </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body d-flex flex-column text-center">
                            <div class="py-6">
                                <img src="assets/images/site/base.png" alt="" height="36">
                            </div>
                            <h5 class="card-title">Robust Workflow</h5>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                          </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body d-flex flex-column text-center">
                            <div class="py-6">
                                <img src="assets/images/site/base.png" alt="" height="36">
                            </div>
                            <h5 class="card-title">Robust Workflow</h5>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                          </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body d-flex flex-column text-center">
                            <div class="py-6">
                                <img src="assets/images/site/base.png" alt="" height="36">
                            </div>
                            <h5 class="card-title">Robust Workflow</h5>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.testimonials')
    @include('partials.footer')
@endsection
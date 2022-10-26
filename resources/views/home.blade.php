@extends('layouts.base')

@section('content')
    @include('partials.navbar')
    <section class="bg-secondary pt-16">
        <div class="container-xl">
            <div class="row justify-content-md-center">
                <div class="col-md-8 col-lg-6 text-md-center">
                    <div class="mx-md-auto" style="max-width: 32rem">
                        <h1 class="fw-semibold text-white display-6 mb-6">The best way to know your hotel’s performance</h1>
                    </div>
                    <a href="#" class="btn btn-primary btn-lg w-100 w-sm-auto">Get started</a>
                </div>
            </div>
            <div class="row justify-content-center mt-12">
                <div class="col-md-10">
                    <img src="assets/images/site/screenshoot.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container-xl py-12">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">
                <h2 class="font-semibold fs-4">Discover the key features</h2>
                <p class="text-muted mt-4">Powerful, self-serve product and growth analytics to help you convert, engage, and retain more customers. Trusted by many world class hotels.</p>
            </div>
        </div>
        <div>
            <div class="row mt-8">
                <div class="col-4">
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
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Performance Marketing</h5>
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
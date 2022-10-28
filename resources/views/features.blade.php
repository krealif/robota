@extends('layouts.base')

@section('content')
    @include('partials.navbar')
    <section class="bg-secondary py-12">
        <div class="container-xl text-center">
            <h1 class="fw-semibold text-white display-5">App Features</h1>
        </div>
    </section>
    <section class="container-xl py-12">
        <div class="row g-6">
            <div class="col-md-6 d-flex flex-column gap-6">
                <div class="card bg-light">
                    <div class="card-body p-6">
                        <img class="card-img" src="assets/images/site/feature1.png" alt="Card image cap">
                        <h3 class="fs-5 fw-semibold mt-6">Informative dashoard</h3>
                        <p class="m-0 mt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.”</p>
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-body p-6">
                        <img class="card-img" src="assets/images/site/feature2.png" alt="Card image cap">
                        <h3 class="fs-5 fw-semibold mt-6">Detailed report</h3>
                        <p class="m-0 mt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.”</p>
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-body p-6">
                        <img class="card-img" src="assets/images/site/feature3.png" alt="Card image cap">
                        <h3 class="fs-5 fw-semibold mt-6">Rate shopper</h3>
                        <p class="m-0 mt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.”</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column gap-6">
                <div class="card bg-light">
                    <div class="card-body p-6">
                        <img class="card-img" src="assets/images/site/feature4.png" alt="Card image cap">
                        <h3 class="fs-5 fw-semibold mt-6">Competitor comparison</h3>
                        <p class="m-0 mt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.”</p>
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-body p-6">
                        <img class="card-img" src="assets/images/site/feature5.png" alt="Card image cap">
                        <h3 class="fs-5 fw-semibold mt-6">Review from various OTA</h3>
                        <p class="m-0 mt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="container">
    @include('partials.clients')
    @include('partials.testimonials')
    @include('partials.footer')
@endsection
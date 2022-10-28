@extends('layouts.base')

@section('content')
@include('partials.navbar')
<section class="bg-secondary py-12">
    <div class="container-xl text-center">
        <h1 class="fw-bold text-white display-5">Find a plan that's right for you</h1>
    </div>
</section>
<section class="container-xl py-12">
    <div class="row">
        <div class="col-4">
            <div class="card bg-light">
                <div class="card-body p-6">
                    <div class="text-center">
                        <h3 class="fs-4 fw-semibold mb-0">Starter</h3>
                        <span class="fs-3 fw-semibold">$49/month</span>
                    </div>
                    <hr class="my-4">
                    <div>
                        <ul>
                            <li>Access to all basic features</li>
                            <li>Basic reporting and analytics</li>
                            <li>Scheduled rate shops</li>
                            <li>Free set-up</li>
                            <li>Basic chat and email support</li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <a href="" class="btn btn-primary w-100">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-light-primary">
                <div class="card-body p-6">
                    <div class="text-center">
                        <h3 class="fs-4 fw-semibold mb-0">Business</h3>
                        <span class="fs-3 fw-semibold">$119/month</span>
                    </div>
                    <hr class="my-4 card-hr">
                    <div>
                        <ul>
                            <li>Everything in Starter, plus</li>
                            <li>Benchmark integration</li>
                            <li>OTB integration</li>
                            <li>Meta sites and OTAs</li>
                            <li>Live online support</li>
                        </ul>
                    </div>
                    <hr class="my-4 card-hr">
                    <a href="" class="btn btn-primary w-100">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-light">
                <div class="card-body p-6">
                    <div class="text-center">
                        <h3 class="fs-4 fw-semibold mb-0">Enterprise</h3>
                        <span class="fs-3 fw-semibold">Custom Pricing</span>
                    </div>
                    <hr class="my-4">
                    <div>
                        <ul>
                            <li>Everything  in Business, plus</li>
                            <li>Enchanced security & SLA</li>
                            <li>Dedicated server & resources</li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <a href="" class="btn btn-primary w-100">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
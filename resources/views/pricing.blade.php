@extends('layouts.base')

@section('content')
@include('partials.navbar')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
        <path fill="#287D3C" d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
    </symbol>
</svg>
<section class="bg-secondary py-12">
    <div class="container-xl text-center">
        <h1 class="fw-bold text-white display-5">Find a plan that's right for you</h1>
    </div>
</section>
<section class="container-xl py-12">
    <div class="row g-6">
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card bg-light">
                <div class="card-body p-6">
                    <div class="text-center">
                        <h3 class="fs-4 fw-semibold mb-0">Starter</h3>
                        <span class="fs-3 fw-semibold">$49/month</span>
                    </div>
                    <hr class="my-4">
                    <div>
                        <ul class="list-unstyled">
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Access to all basic features</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Basic reporting and analytics</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Scheduled rate shops</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Free set-up</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Basic chat and email support</li>
                            <li></li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <a href="" class="btn btn-primary w-100">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card bg-light-primary">
                <div class="card-body p-6">
                    <div class="text-center">
                        <h3 class="fs-4 fw-semibold mb-0">Business</h3>
                        <span class="fs-3 fw-semibold">$119/month</span>
                    </div>
                    <hr class="my-4">
                    <div>
                        <ul class="list-unstyled">
                            <li class="fw-semibold">Everything in Starter, plus</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Benchmark integration</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>OTB integration</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Meta sites and OTAs</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Live online support</li>
                        </ul>
                    </div>
                    <hr class="my-4 card-hr">
                    <a href="" class="btn btn-primary w-100">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card bg-light">
                <div class="card-body p-6">
                    <div class="text-center">
                        <h3 class="fs-4 fw-semibold mb-0">Enterprise</h3>
                        <span class="fs-3 fw-semibold">Custom Pricing</span>
                    </div>
                    <hr class="my-4">
                    <div>
                        <ul class="list-unstyled">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class="fw-semibold">Everything  in Business, plus</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Enchanced security & SLA</li>
                            <li class="d-flex gap-2 py-1"><svg class="bi" style="bi" width="24" height="24"><use xlink:href="#check"></use></svg>Dedicated server & resources</li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <a href="" class="btn btn-primary w-100">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="container">
@include('partials.clients')
<hr class="container">
<section class="container-xl py-12">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 text-md-center">
            <h2 class="fw-bold fs-3 m-0">Frequently Asked Questions</h2>
            <p class="text-muted mt-2 mb-0">Everything you need to know about the product and billing.</p>
        </div>
    </div>
    <div class="row g-6 mt-6">
        <div class="col-6 d-flex flex-column gap-6">
            <x-accordion
                heading="Can I change my plan later?"
                body="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam a ipsa ipsum placeat obcaecati deleniti dolor esse eum ea molestias, atque ab architecto vel animi!">
            </x-accordion>
            <x-accordion
                heading="How does billing work?"
                body="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam a ipsa ipsum placeat obcaecati deleniti dolor esse eum ea molestias, atque ab architecto vel animi!">
            </x-accordion>
            <x-accordion
                heading="Is my payment secure?"
                body="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam a ipsa ipsum placeat obcaecati deleniti dolor esse eum ea molestias, atque ab architecto vel animi!">
            </x-accordion>
        </div>
        <div class="col-6 d-flex flex-column gap-6">
            <x-accordion
                heading="Is there a free trial available?"
                body="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam a ipsa ipsum placeat obcaecati deleniti dolor esse eum ea molestias, atque ab architecto vel animi!">
            </x-accordion>
            <x-accordion
                heading="How do I change my account email?"
                body="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam a ipsa ipsum placeat obcaecati deleniti dolor esse eum ea molestias, atque ab architecto vel animi!">
            </x-accordion>
            <x-accordion
                heading="Can I upgrade to another pricing plan?"
                body="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam a ipsa ipsum placeat obcaecati deleniti dolor esse eum ea molestias, atque ab architecto vel animi!">
            </x-accordion>
        </div>
    </div>
</section>
@include('partials.testimonials')
@include('partials.footer')
@endsection
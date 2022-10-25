@extends('layouts.base')

@section('content')
    @include('partials.navbar')
    <section class="bg-secondary pt-8">
        <div class="container-xl">
            <div class="row g-6 align-items-center">
                    <div class="col-lg-6 mx-auto text-center">
                        <h1 class="text-white fw-semibold display-6 mb-4">The best way to know your hotel’s performance</h1>
                        <a class="btn btn-primary btn-lg" href="#">Get Started</a>
                    </div>
                    <div class="col-lg-9 mx-auto text-lg-center">
                        <img class="img-fluid" src="assets/images/site/screenshoot.png" alt="Robota app screenshot">
                    </div>
            </div>
        </div>
    </section>
    <section class="container-xl p-6">
        <div class="row">
            <div class="col">
                <img src="assets/images/site/company1.png" alt="" height="36">
            </div>
            <div class="col">
                <img src="assets/images/site/company2.png" alt="" height="36">
            </div>
            <div class="col">
                <img src="assets/images/site/company3.png" alt="" height="36">
            </div>
            <div class="col">
                <img src="assets/images/site/company4.png" alt="" height="36">
            </div>
            <div class="col">
                <img src="assets/images/site/company5.png" alt="" height="36">
            </div>
        </div>
    </section>
@endsection
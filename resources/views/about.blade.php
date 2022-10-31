@extends('layouts.base')

@section('content')
  @include('partials.navbar')
  <section class="bg-secondary py-12">
    <div class="container-xl text-center">
      <h1 class="fw-bold text-white display-5">About Us</h1>
    </div>
  </section>

  <section class="container-xl py-12">
    <div class="card mb-3 mb-5">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/images/site/about1.png" class="img-fluid rounded-start" alt="about robota">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title mb-6 mt-3">What is Robota</h3>
            <p class="card-text fs-5">Robota Hotel and Tourism Intelligence is an application that performs hospitality and tourism analysis with Artificial Intelligence (AI) technology. The Robota application provides analytical solutions for hospitality and tourism including competitor analysis, pricing, and customer reviews. This application is a collaboration between PT. Global Data Inspiration (Datains) and PT. Metropolitan Golden Management (MGM).</p>
            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
          </div>
        </div>
      </div>
    </div>

    <hr class="container m-8">

    <div class="card mb-5 mt-5">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/images/site/about2.png" class="img-fluid rounded-start" alt="about robota">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title mb-6 mt-3">Our Mission</h3>
            <p class="card-text fs-5">Help the hotel industry visualise and leverage data for business success. Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="container">
  @include('partials.footer')

@endsection
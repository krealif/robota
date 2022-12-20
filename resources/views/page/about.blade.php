@extends('page.layouts.base', ['title' => 'About'])


@push('styles')

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endpush

@section('content')
<section class="bg-secondary py-12">
  <div class="container-xl text-center">
    <h1 class="fw-bold text-white display-5">About Us</h1>
  </div>
</section>
<section class="container-xl py-12">
  <div class="row g-6 g-md-10" data-aos="fade-up" data-aos-duration="1500">
    <div class="col-md-4">
      <img src="assets/images/site/about1.png" class="img-fluid rounded" alt="our mission">
    </div>
    <div class="col-md-8">
      <h3 class="fs-3 fw-semibold mb-md-4 mb-2">What is Robota</h3>
      <p class="fs-5 m-0">Robota Hotel and Tourism Intelligence is an application that performs hospitality and tourism analysis with Artificial Intelligence (AI) technology. Robota provides analytical solutions for hospitality and tourism including competitor analysis, pricing, and customer reviews. This application is a collaboration between PT. Global Data Inspiration and PT. Metropolitan Golden Management.</p>
    </div>
  </div>
</section>
<hr>
<section class="container-xl py-12">
  <div class="row g-6 g-md-10" data-aos="fade-up" data-aos-duration="1000">
    <div class="col-md-4">
      <img src="assets/images/site/about2.png" class="img-fluid rounded mt-2 mt-md-0" alt="our mission">
    </div>
    <div class="col-md-8">
      <h3 class="fs-3 fw-semibold mb-md-4 mb-2">Our Mission</h3>
      <p class="fs-5 m-0">Help the hotel industry visualise and leverage data for business success. Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</section>
<hr>
@endsection

@push('scripts')
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@endpush
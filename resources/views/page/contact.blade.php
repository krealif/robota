@extends('layouts.base', ['title' => 'Contact'])

@section('content')
<section class="bg-secondary py-12">
  <div class="container-xl text-center">
    <h1 class="fw-bold text-white display-5">Contact Our Sales Team</h1>
  </div>
</section>
<section class="container-xl py-12">
  <div class="row g-6 g-md-12">
    <div class="col-md-4">
      <div class="card bg-light">
        <div class="card-body p-6">
          <h5 class="fs-5 fw-bold mb-4">Contact Information</h5>
          <ul class="list-unstyled my-0">
            <li class="d-flex gap-4 m-2 align-items-center"><img src="assets/images/site/telephone-fill.svg" alt="Telephone" height="18">+62853555291</li>
            <li class="d-flex gap-4 m-2 align-items-center"><img src="assets/images/site/envelope-fill.svg" alt="Mail" height="18">info@datains.id</li>
            <li class="d-flex gap-4 m-2 align-items-center"><img src="assets/images/site/location-fill.svg" alt="Location" height="18">Jalan Cik Di Tiro 34, Yogyakarta 55223</li>
          </ul>
        </div>
      </div>
      <div class="card bg-light mt-6">
        <div class="card-body p-6">
          <h5 class="fs-5 fw-bold mb-4">Social Media</h5>
          <ul class="list-unstyled d-inline-flex flex-wrap gap-6 mx-2 my-0">
            <li class="d-inline">
              <a href="#"><img src="assets/images/site/facebook.svg" alt="facebook" width="24"></a>
            </li>
            <li class="d-inline">
              <a href="#"><img src="assets/images/site/whatsapp.svg" alt="whatsapp" width="24"></a>
            </li>
            <li class="d-inline">
              <a href="#"><img src="assets/images/site/instagram.svg" alt="instagram" width="24"></a>
            </li>
            <li class="d-inline">
              <a href="#"><img src="assets/images/site/linkedin.svg" alt="linkedin" width="24"></a>
            </li>
            <li class="d-inline">
              <a href="#"><img src="assets/images/site/twitter.svg" alt="twitter" width="24"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <form>
        <div class="row">
          <div class="col-md-6 col-12">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firtsName"  placeholder="Enter your first name">
          </div>
          <div class="col-md-6 col-12 mt-md-0 mt-4">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName"  placeholder="Enter your last name">
          </div>
        </div>
        <div class="mt-4">
          <label for="email" class="form-label">Business Email Address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your business email">
        </div>
        <div class="mt-4">
          <label for="phoneNumber" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
        </div>
        <div class="mt-4">
          <label for="companyName" class="form-label">Company Name</label>
          <input type="text" class="form-control" id="companyName" placeholder="Enter your company name">
        </div>
        <div class="mt-4">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="3" placeholder="Enter message"></textarea>
        </div>
        <button class="btn btn-primary mt-6" type="button">Send Message</button>
      </form>
    </div>
  </div>
</section>
<hr>
@include('partials.clients')
@include('partials.testimonials')
@endsection
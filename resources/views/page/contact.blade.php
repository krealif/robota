@extends('page.layouts.base', ['title' => 'Contact'])

@section('content')
<section class="bg-secondary py-12">
  <div class="container-xl text-center">
    <h1 class="fw-bold text-white display-5">Contact Our Sales Team</h1>
  </div>
</section>
<section class="container-xl py-12" data-aos="fade-up">
  @if($message = Session::get('success'))
  <div class="alert alert-important alert-success alert-dismissible" role="alert" style="margin-top: -1.75rem">
    <div class="d-flex gap-2">
      <div><svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></div>
      <div>{{ $message }}</div>
    </div>
    <a class="btn-close btn-close" data-bs-dismiss="alert" aria-label="close"></a>
  </div>
  @endif
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
      <form method="POST" action="{{ route('contact.email') }}">
        @csrf
        <div class="row">
          <div class="col-md-6 col-12">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="Enter your first name" value="{{ old('firstName') }}" maxlength="255">
            @error('firstName')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="col-md-6 col-12 mt-md-0 mt-4">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="Enter your last name" value="{{ old('lastName') }}" maxlength="255">
            @error('lastName')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
        </div>
        <div class="mt-4">
          <label for="email" class="form-label">Business Email Address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your business email" value="{{ old('email') }}" maxlength="255">
          @error('email')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
        </div>
        <div class="mt-4">
          <label for="phoneNumber" class="form-label">Phone Number</label>
          <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" value="{{ old('phoneNumber') }}" maxlength="20">
          @error('phoneNumber')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
        </div>
        <div class="mt-4">
          <label for="companyName" class="form-label">Company Name</label>
          <input type="text" class="form-control @error('companyName') is-invalid @enderror" id="companyName" name="companyName" placeholder="Enter your company name" value="{{ old('companyName') }}" maxlength="255">
          @error('companyName')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
        </div>
        <div class="mt-4">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3" placeholder="Enter message">{{ old('message') }}</textarea>
          @error('message')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
        </div>
        <button class="btn btn-primary mt-6" type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>
<hr>
@include('page.partials.clients')
@include('page.partials.testimonial')
@endsection
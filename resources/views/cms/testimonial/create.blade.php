@extends('cms.layouts.dashboard')

@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <form class="card" method="POST" action="{{ route('testimonial.store') }}">
          @csrf
          <div class="card-header">
            <h3 class="card-title">Add a New Testimonial</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="title" class="form-label required">Title</label>
              <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
              @error('title')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="mb-3">
              <label for="name" class="form-label required">Full Name</label>
              <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
              @error('name')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="mb-3">
              <label for="company" class="form-label required">Position/Company</label>
              <input id="company" name="company" type="text" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}">
              @error('company')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="mb-3">
              <label for="testimony" class="form-label required">Testimony</label>
              <textarea id="testimony" name="testimony" class="form-control @error('testimony') is-invalid @enderror" rows="5">{{ old('testimony') }}</textarea>
              @error('testimony')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('testimonial.index') }}" class="btn btn-link">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

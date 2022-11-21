@extends('cms.layouts.dashboard')

@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <form class="card" method="POST" action="{{ route('client.store') }}">
          @csrf
          <div class="card-header">
            <h3 class="card-title">Add a New Client</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="name" class="form-label required">Name</label>
              <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
              @error('name')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div>
              <label for="image" class="form-label required">Upload Logo</label>
              <x-filepond/>
              @error('image')<div class="invalid-feedback" role="alert" style="display: block"><strong>{{ $message }}</strong></div>@enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('client.index') }}" class="btn btn-link">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


@extends('cms.layouts.dashboard')

@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <form class="card" method="POST" action="{{ route('feature.store') }}">
          @csrf
          <div class="card-header">
            <h3 class="card-title">Add a New Feature</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="title" class="form-label required">Title</label>
              <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
              @error('title')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="mb-3">
              <label for="desc" class="form-label required">Description</label>
              <textarea id="desc" name="desc" class="form-control @error('desc') is-invalid @enderror" rows="5">{{ old('desc') }}</textarea>
              @error('desc')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div>
              <label for="image" class="form-label required">Upload Image</label>
              <x-filepond/>
              @error('image')<div class="invalid-feedback" role="alert" style="display: block"><strong>{{ $message }}</strong></div>@enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('feature.index') }}" class="btn btn-link">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


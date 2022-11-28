@extends('cms.layouts.dashboard')

@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <form class="card" method="POST" action="{{ route('pricing.store') }}">
          @csrf
          <div class="card-header">
            <h3 class="card-title">Add a New Plan</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="name" class="form-label required">Name</label>
              <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
              @error('name')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="mb-3">
              <label for="price" class="form-label required">Price</label>
              <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
              @error('price')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="mb-3">
              <label for="list" class="form-label required">List (press enter to add item)</label>
              <input id="list" name="list" type="text" class="form-control @error('list') is-invalid @enderror" value="{{ collect(json_decode(old('list')))->pluck('value') }}">
              @error('list')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="true" id="recommended" name="recommended">
              <label class="form-check-label" for="recommended">
                Recommended (This will replace the current recommended plan)
              </label>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('pricing.index') }}" class="btn btn-link">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="/assets/cms/tagify.css">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<script src="/assets/cms/tagify.js"></script>
<script>
  let listInput = document.querySelector('#list');
  new Tagify(listInput);
</script>
@endpush
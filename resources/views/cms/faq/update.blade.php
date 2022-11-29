@extends('cms.layouts.dashboard')

@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <form class="card" method="POST" action="{{ route('faq.update', $faq->id) }}">
          @csrf
          @method('PUT')
          <div class="card-header">
            <h3 class="card-title">Update Existing FAQ</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
                <label for="question" class="form-label required">Question</label>
                <input id="question" name="question" type="text" class="form-control @error('question') is-invalid @enderror" value="{{ old('question', $faq->question) }}">
                @error('question')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
              </div>
              <div class="mb-3">
                <label for="answer" class="form-label required">Answer</label>
                <textarea id="answer" name="answer" class="form-control @error('answer') is-invalid @enderror" rows="5">{{ old('answer', $faq->answer) }}</textarea>
                @error('answer')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('faq.index') }}" class="btn btn-link">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

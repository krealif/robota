@extends('cms.layouts.dashboard')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Feature List
        </h2>
      </div>
      <div class="col-12 col-md-auto ms-auto d-print-none">
        <div class="btn-list">
          <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Add Feature
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    @livewire('feature-crud')
  </div>
</div>
@endsection
@extends('cms.layouts.dashboard')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Home
        </h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="col-12">
      <div class="card">
        <div class="card-body">Hello, {{ Auth::user()->username }}. Welcome to CMS Dashboard.</div>
      </div>
    </div>
  </div>
</div>
<div id="modal-delete" class="modal fade" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-title">Are you sure?</div>
        <div>If you proceed, you will delete the data.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
        <form id="form-delete" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
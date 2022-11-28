@extends('cms.layouts.dashboard')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Pricing Plan
        </h2>
      </div>
      <div class="col-12 col-md-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="{{ route('pricing.create') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Add Plan
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="col-12">
      @if($message = Session::get('success'))
      <div class="alert alert-important alert-success alert-dismissible" role="alert">
        <div class="d-flex">
          <div><svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></div>
          <div>{{ $message }}</div>
        </div>
        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
      </div>
      @endif
      <div class="card">
        <div class="table-responsive">
          @if(!$dataPricing->isEmpty())
          <table class="table table-vcenter table-mobile-md card-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>List</th>
                <th class="w-1"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataPricing as $pricing)
              <tr{{ $pricing->recommended ? ' class=bg-light-primary':'' }}>
                <td class="align-top">{{ $pricing->name }}</td>
                <td class="align-top">{{ $pricing->price }}</td>
                <td class="align-top">
                  <ul class="list-group">
                    @foreach(json_decode($pricing->list) as $item)
                    <li class="list-group-item">{{ $item }}</li>
                    @endforeach
                  </ul>
                </td>
                <td class="align-top">
                  <div class="btn-list flex-nowrap">
                    <a href="{{ route('pricing.edit', $pricing->id) }}" class="btn">
                      Edit
                    </a>
                    <button id="delete" class="btn" data-bs-toggle="modal" data-bs-target="#modal-delete" onclick="deleteItem({{ $pricing->id }})">
                      Delete
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
              <div class="card-body">There are no pricing plan yet.</div>
          @endif
        </div>
        <div class="card-footer">
          {{ $dataPricing->links() }}
        </div>
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

@push('styles')
<style>
  .card-footer * {
    margin-bottom: 0;
  }
  .bg-light-primary {
    background-color: #FDF0E6;
  }
</style>
@endpush

@push('scripts')
<script>
  function deleteItem(id) {
    const deleteForm = document.querySelector('#form-delete');
    deleteForm.action = '{{ route('pricing.index') }}/' + id;
  }
</script>
@endpush
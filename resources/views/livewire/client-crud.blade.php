<div>
  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter table-mobile-md card-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Logo</th>
              <th class="w-1"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataClient as $client)
            <tr>
              <td>{{ $client->name }}</td>
              <td><img src="{{ $client->getLogo() }}" height="48"></td>
              <td>
                <div class="btn-list flex-nowrap">
                  <button class="btn" wire:loading.attr="disabled" wire:click="edit({{ $client->id }})">
                    Edit
                  </button>
                  <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-delete" wire:click="selectItem({{ $client->id }})">
                    Delete
                  </button>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div wire:ignore.self id="modal-add" class="modal fade" tabindex="-1" aria-hidden="true">
    <form class="modal-dialog modal-dialog-centered" wire:submit.prevent="store">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add a new client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" wire:model.defer="name">
            @error('name')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div>
            <label for="logo" class="form-label">Upload Logo</label>
            <x-filepond wire:model="logo"/>
            @error('logo')<div class="invalid-feedback" role="alert" style="display: block"><strong>{{ $message }}</strong></div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <span wire:loading wire:target="store" class="spinner-border spinner-border-sm me-2" role="status"></span>
            Add Client
          </button>
        </div>
      </div>
    </form>
  </div>
  <div wire:ignore.self id="modal-edit" class="modal fade" tabindex="-1" aria-hidden="true">
    <form class="modal-dialog modal-dialog-centered" wire:submit.prevent="update">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit a client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" wire:model.defer="name">
            @error('name')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div>
            <label for="logo" class="form-label">Upload New Logo</label>
            <x-filepond wire:model="logo"/>
            @error('logo')<div class="invalid-feedback" role="alert" style="display: block"><strong>{{ $message }}</strong></div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <span wire:loading wire:target="update" class="spinner-border spinner-border-sm me-2" role="status"></span>
            Edit Client
          </button>
        </div>
      </div>
    </form>
  </div>
  <div wire:ignore.self id="modal-delete" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-title">Are you sure?</div>
          <div>If you proceed, you will delete the data.</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroy">
            <span wire:loading wire:target="destroy" class="spinner-border spinner-border-sm me-2" role="status"></span>
            Yes
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script>
  window.addEventListener('closeModal', (event) => {
    let modalType = "modal-" + event.detail.modal
      bootstrap.Modal.getOrCreateInstance(document.getElementById(modalType)).hide();
  });

  window.addEventListener('showModal', (event) => {
    let modalType = "modal-" + event.detail.modal
      bootstrap.Modal.getOrCreateInstance(document.getElementById(modalType)).show();
  });

  document.querySelector('#modal-add').addEventListener('hidden.bs.modal', () => {
    Livewire.emit('resetModal')
  });

  document.querySelector('#modal-edit').addEventListener('hidden.bs.modal', () => {
    Livewire.emit('resetModal')
  });
</script>
@endpush
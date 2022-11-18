<div>
  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter table-mobile-md card-table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Image</th>
              <th class="w-1"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataFeature as $feature)
            <tr>
              <td>{{ $feature->title }}</td>
              <td>{{ $feature->desc }}</td>
              <td><img src="{{ $feature->getImage() }}" class="img-fluid"></td>
              <td>
                <div class="btn-list flex-nowrap">
                  <button class="btn" wire:loading.attr="disabled" wire:click="edit({{ $feature->id }})">
                    Edit
                  </button>
                  <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-delete" wire:click="selectItem({{ $feature->id }})">
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
          <h5 class="modal-title">Add a new feature</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" wire:model.defer="title">
            @error('title')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea id="desc" class="form-control @error('desc') is-invalid @enderror" wire:model.defer="desc" rows="4"></textarea>
            @error('desc')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div>
            <label for="image" class="form-label">Upload Image</label>
            <x-filepond wire:model="image"/>
            @error('image')<div class="invalid-feedback" role="alert" style="display: block"><strong>{{ $message }}</strong></div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <span wire:loading wire:target="store" class="spinner-border spinner-border-sm me-2" role="status"></span>
            Add Feature
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
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" wire:model.defer="title">
            @error('title')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea id="desc" class="form-control @error('desc') is-invalid @enderror" wire:model.defer="desc" rows="4"></textarea>
            @error('desc')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div>
            <label for="image" class="form-label">Upload New Image</label>
            <x-filepond wire:model="image"/>
            @error('image')<div class="invalid-feedback" role="alert" style="display: block"><strong>{{ $message }}</strong></div>@enderror
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
<div class="accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}" aria-expanded="false" aria-controls="{{ $id }}">{{ $heading }}</button>
    </h2>
    <div id="{{ $id }}" class="accordion-collapse collapse">
      <div class="accordion-body pt-0">
        <p class="mb-0">{{ $body }}</p>
      </div>
    </div>
</div>
</div>
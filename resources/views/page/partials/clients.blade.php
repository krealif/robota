<section class="container-xl py-12">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 text-center">
      <h2 class="fw-bold fs-3 m-0">Trusted by world class hotels</h2>
    </div>
  </div>
  <div class="row gap-6 mt-8 justify-content-center">
    @foreach ($dataClient as $client)
    <div class="col-lg-2 col-sm-3 col-4 px-2 text-center">
      <img class="img-fluid" style="max-height: 2.5rem" src="{{ $client->getImage() }}" alt="{{ $client->name }}">
    </div>
    @endforeach
  </div>
</section>
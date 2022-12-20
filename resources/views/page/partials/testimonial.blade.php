<section class="bg-light py-12">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 text-md-center" data-aos="fade-up">
        <h2 class="fw-bold fs-3 m-0">What Our Clients Says</h2>
        <p class="text-muted mt-2 mb-0">Hear from some of our amazing clients whore are using Robota.</p>
      </div>
    </div>
    <div class="row g-6 mt-6">
      @foreach($dataTestimonial->split(2) as $testimonialCol)
      <div class="col-md-6 d-flex flex-column gap-6">
        @foreach($testimonialCol as $testimonial)
        <div class="card" data-aos="fade-up">
          <div class="card-body p-6">
            <blockquote class="m-0">
              <h3 class="fs-5 fw-bold">{{ $testimonial->title }}</h3>
              <p class="mx-0 my-4">"{{ $testimonial->testimony }}”</p>
            </blockquote>
            <div class="d-flex align-items-center">
              <div>
                <span class="d-block fw-semibold">{{ $testimonial->name }}</span>
                <span class="d-block text-muted fs-6">{{ $testimonial->company }}</span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endforeach
    </div>
  </div>
</section>
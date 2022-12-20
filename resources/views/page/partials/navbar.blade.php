
<nav class="navbar bg-white navbar-expand-sm sticky-top shadow-sm">
  <div class="container-xl">
    <a class="navbar-brand d-inline-flex align-items-center" href="/">
      <img src="assets/images/site/robota-logo.svg" alt="Robota Logo" height="18">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link{{ request()->is('/') ? ' active' : '' }} hov" href="/">Home</a>
        </li>
        <li class="nav-item hov">
          <a class="nav-link{{ request()->is('contact') ? ' active' : '' }} hov" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ request()->is('about') ? ' active' : '' }} hov" href="/about">About</a>
        </li>
        <li class="nav-item py-2 py-sm-0">
        <a href="/login" class="btn btn-primary ms-sm-2 w-100 w-md-auto">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
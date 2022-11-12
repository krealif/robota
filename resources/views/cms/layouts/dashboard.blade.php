<!DOCTYPE html>
<html lang="en">
<head>
    @include('cms.partials.head')
    @livewireStyles
    @stack('styles')
</head>
<body class="theme-light">
  <div class="page">
    <header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="." class="fs-2 fw-bold text-decoration-none">CMS</a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item d-none d-md-flex me-3">
          </div>
          <div class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link fw-semibold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <span>{{ Auth::user()->username }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a class="dropdown-item" href="http://mybook.test/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>
              <form id="logout-form" action="{{ route('cms.logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
          <div class="container-xl">
            <ul class="navbar-nav">
              <li class="nav-item{{ request()->is('cms') ? ' active' : '' }}">
                <a class="nav-link" href="/cms">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline> <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path> <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path> </svg>
                  </span>
                  <span class="nav-link-title">Home</span>
                </a>
              </li>
              <li class="nav-item {{ request()->is('cms/client') ? ' active' : '' }}"">
                <a class="nav-link" href="/cms/client">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <circle cx="9" cy="7" r="4"></circle> <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path> <path d="M16 3.13a4 4 0 0 1 0 7.75"></path> <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path> </svg>
                  </span>
                  <span class="nav-link-title">Clients Logo</span>
                </a>
              </li>
              <li class="nav-item {{ request()->is('cms/pricing') ? ' active' : '' }}"">
                <a class="nav-link" href="/cms/pricing">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-businessplan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <ellipse cx="16" cy="6" rx="5" ry="3"></ellipse> <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path> <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path> <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path> <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path> <path d="M5 15v1m0 -8v1"></path> </svg>
                  </span>
                  <span class="nav-link-title">Pricings</span>
                </a>
              </li>
              <li class="nav-item {{ request()->is('cms/feature') ? ' active' : '' }}"">
                <a class="nav-link" href="/cms/feature">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <path d="M4 4h6v8h-6z"></path> <path d="M4 16h6v4h-6z"></path> <path d="M14 12h6v8h-6z"></path> <path d="M14 4h6v4h-6z"></path> </svg>
                  </span>
                  <span class="nav-link-title">Features</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="page-wrapper">
      <div class="page-header d-print-none">
        <div class="container-xl">
          @yield('header')
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          @yield('body')
        </div>
      </div>
    </div>
  </div>
</body>
@livewireScripts
<script src="/assets/cms/tabler.min.js"></script>
@stack('scripts')
</html>
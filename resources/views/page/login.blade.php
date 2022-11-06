<!DOCTYPE html>
<html lang="en">
<head>
  @include('page.partials.head', ['title' => 'Login'])
</head>
<body>
  <section class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="d-flex flex-column justify-content-between vh-100">
          <a class="py-4" href="/">
            <img src="assets/images/site/robota-logo.svg" alt="Robota Logo" height="18">
          </a>
          <form class="container" style="max-width: 480px">
            <h1 class="fw-bold fs-3">Login</h1>
            <p class="text-muted mb-0">Please enter your details.</p>
    
            <div class="mt-6">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
            </div>
            <div class="mt-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Enter your password">
            </div>
            <div class="mt-4 form-check">
              <input type="checkbox" class="form-check-input outline-primary border-primary" id="remember">
              <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <button class="btn btn-primary w-100 mt-4" type="button">Log in</button>
          </form>
          <div class="py-4">
            <span class="fw-lighter fs-6 m-0 p-0">© 2022 Robota.  All Rights Reserved.</span>
          </div>
        </div>
      </div>
      <div class="d-lg-flex d-none justify-content-center align-items-center col-lg-6 bg-secondary vh-100">
        <div>
          <img src="assets/images/site/login.png" alt="robota" height="240">
        </div>
      </div>
    </div>
  </section>
</body>
</html>
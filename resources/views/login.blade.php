@extends('layouts.base')

@section('content')
<section class="d-flex">
    <div class="container-lg w-100">
        <div class="row flex-column justify-content-between align-items-center min-vh-100">
            <div class="col-12 py-4 px-5">
                <img src="assets/images/site/robota-logo.svg" alt="Robota Logo" height="18">
            </div>
            <div class="col-12 col-xl-9 col-lg-12 col-sm-9 px-lg-5 px-sm-3 px-5">
                <form>
                    <h1 class="fw-bold fs-3">Login</h1>
                    <p class="text-muted mb-0">Please enter your details.</p>

                    <div class="mt-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                    </div>

                    <div class="mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Enter your password">
                    </div>

                    <div class="mt-3 form-check">
                        <input type="checkbox" class="form-check-input outline-primary border-primary" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <button class="btn btn-primary w-100 mt-3" type="button">Log in</button>
                </form>
            </div>
            <div class="col-12 py-4 px-5">
                <p class="fw-lighter fs-6 m-0 p-0">© 2022 Robota</p>
            </div>
        </div>
    </div>
    <div class="d-lg-flex d-none w-100 bg-secondary justify-content-center align-items-center min-vh-100">
        <img src="assets/images/site/login.png" alt="robota" height="240">
    </div>
</section>
@endsection
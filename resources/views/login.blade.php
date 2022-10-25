<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fontbit.io" crossorigin>
        <title>Robota</title>
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-black">
            
                        <div class="px-5 ms-xl-4">
                            <img src="assets/images/site/robota-logo.svg" class="mt-4" alt="Robota Logo" height="28">
                        </div>
                
                        <div class="d-flex p-5 m-4 align-items-center">
                            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    
                                <form style="width: 23rem;">
                    
                                <h3 class="fw-bold mb-1 pb-1 " style="letter-spacing: 1px;">Log in</h3>
                                <p class="text-muted">Please enter your details.</p>
                    
                                <div class="form-outline mb-4 pt-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control form-control-lg fs-6" placeholder="Enter your email"/>
                                </div>
                    
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" class="form-control form-control-lg fs-6" placeholder="••••••••"/>
                                </div>

                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input outline-primary border-primary" id="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                    
                                <div class="d-grid gap-2 pt-1 mb-4">
                                    <button class="btn btn-primary btn-sm btn-block bg-primary" type="button">Log in</button>
                                </div>
                    
                                </form>

                            </div>

                        </div>

                        <p class="mt-4 px-5 pt-5 fw-lighter fs-6">© 2022 Robota</p>

                    </div>

                    <div class="col-sm-6 px-0 vh-100 bg-secondary">

                        <div class="d-flex align-items-center vh-100 px-5">
                            <img src="assets/images/site/login.png" class="px-5 m-4" alt="robota" height="280">
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
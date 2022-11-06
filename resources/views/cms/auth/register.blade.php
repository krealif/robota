<!DOCTYPE html>
<html lang="en">
<head>
  @include('cms.partials.head')
</head>
<body>
<body>
  <div class="page page-center">
    <div class="container container-tight py-4">
      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4">Register</h2>
          <form method="POST" action="{{ route('cms.register') }}">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Enter your username">
              @error('username')
              <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password'</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
              @error('password')
              <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="password-confirm" class="form-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your confirm password">
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</body>
</html>
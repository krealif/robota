<!DOCTYPE html>
<html lang="en">
<head>
  @include('cms.partials.head', ['title' => 'Login'])
</head>
<body>
<body>
  <div class="page page-center">
    <div class="container container-tight py-4">
      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4">CMS Login</h2>
          <form method="POST" action="{{ route('cms.login') }}">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label required">Username</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Enter your username">
                @error('username')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
            </div>
            <div class="mb-2">
              <label for="password" class="form-label required">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
              @error('password')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
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
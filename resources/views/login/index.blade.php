<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BlogLivester | Login</title>

  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/login-register.css">
</head>

<body class="bg-primary">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-10 col-sm-8 col-lg-5 form-box">
        {{-- @if (session()->has('success') || session('loginStatus'))
        <div class="alert {{session('loginStatus') ? 'alert-danger' : 'alert-success' }} alert-dismissible fade show"
          role="alert">
          {{ session('success')}} {{ session('loginStatus')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}

        <h2 class="text-center mb-5">Login</h2>
        <form method="POST" action="" autocomplete="off">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
              name="username" autofocus required>

            @error('username')
            <div class="invalid-feedback mb-3">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
              name="password" required>

            @error('password')
            <div class="invalid-feedback mb-3">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button type="submit" class="w-100 btn btn-lg btn-success mt-4">Login</button>
        </form>

        <p class="login-text text-center mt-3 text-secondary">Not registered? <a href="/register">Register
            Now!</a>
        </p>
      </div>
    </div>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BlogLivester | Register</title>

  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/login-register.css">
</head>

<body class="bg-primary">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-10 col-sm-8 col-lg-5 form-box">
        <h2 class="text-center mb-5">Register</h2>
        <form method="POST" action="/register" autocomplete="off">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" required value="{{old('name')}}"
              id="name" name="name" required autofocus>

            @error('name')
            <div class="invalid-feedback mb-3">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
              name="username" value="{{old('username')}}" required>

            @error('username')
            <div class=" invalid-feedback mb-3">
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

            <small class="text-secondary mt-2">Should have at least one uppercase letter, one lowercase letter, and one
              number</small>
          </div>

          <button type="submit" class="w-100 btn btn-lg btn-success mt-4">Register</button>
        </form>

        <p class="login-text text-center mt-3 text-secondary">Already registered? <a href="/login">Login
            Now!</a>
        </p>
      </div>
    </div>
  </div>
  <script src="/js/bootstrap.js"></script>
</body>

</html>
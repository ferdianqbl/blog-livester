<nav class="navbar navbar-expand-lg p-0 fixed-top" id="my-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">
      BL
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item">
          <a class="nav-link{{Request::is('/') ? ' active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{Request::is('author') ? ' active' : '' }}" href="/author">Author</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{Request::is('category') ? ' active' : '' }}" href="/category">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{Request::is('posts') ? ' active' : '' }}" href="/posts">Posts</a>
        </li>
        <li class="nav-item d-block d-lg-none">
          <a class="btn-custom-primary d-inline-block d-lg-none" href="/login">
            Login
          </a>
        </li>
      </ul>
    </div>
    @auth
    <div class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welcome, {{(auth()->user()->username)}}
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/editor"><i class="bi bi-journals"></i> Dashboard</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
              Logout</button>
          </form>
        </li>
      </ul>
    </div>
    @else
    <a class="btn-custom-primary d-none d-lg-inline-block" href="/login">
      Login
    </a>
    @endauth
  </div>
</nav>
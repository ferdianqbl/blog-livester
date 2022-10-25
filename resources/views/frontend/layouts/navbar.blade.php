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
        <li class="nav-item d-block d-lg-none">
          <a class="btn-custom-primary d-inline-block d-lg-none" href="/login">
            Login
          </a>
        </li>
      </ul>
    </div>
    <a class="btn-custom-primary d-none d-lg-inline-block" href="/login">
      Login
    </a>
  </div>
</nav>
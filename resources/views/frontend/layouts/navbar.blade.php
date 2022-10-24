<nav class="navbar navbar-expand-lg p-0" id="my-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">
      BL
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link{{Request::is('/') ? ' active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{Request::is('author') ? ' active' : '' }}" href="/author">Author</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{Request::is('category') ? ' active' : '' }}" href="/category">Category</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
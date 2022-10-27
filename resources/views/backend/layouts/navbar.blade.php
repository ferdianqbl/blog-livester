<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <!-- Navbar Brand-->
  <a class="navbar-brand ps-3" href="index.html">BLogLivester</a>
  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
      class="fas fa-bars"></i></button>
  <!-- Navbar-->
  <ul class="navbar-nav ms-auto me-3 me-lg-4">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="POST" class="mb-0">
        @csrf
        <button type="submit" class="btn nav-link px-3 py-0 bg-dark border-0">Logout <span data-feather="log-out"
            class="align-text-bottom"></span></button>
      </form>
    </div>
  </ul>
</nav>
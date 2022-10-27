<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link{{Request::is('editor') ? ' active' : '' }}" href="/editor">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>

        <div class="sb-sidenav-menu-heading">Content</div>
        <a class="nav-link{{Request::is('editor/posts') ? ' active' : '' }}" href="/editor/posts">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Posts
        </a>
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <a class="nav-link text-white" href="/">
        <i class="fas fa-tachometer-alt"></i> Back to home page
      </a>
    </div>
  </nav>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Perpus Taugus</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ request()->is('/') ? ' active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ request()->is('about') ? ' active' : '' }}" href="/about">about</a>
        <a class="nav-link {{ request()->is('contact') ? ' active' : '' }}" href="/contact">contact</a>
        <a class="nav-link {{ request()->is('post') ? ' active' : '' }}" href="/posts">posts</a>
      </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light yl px-3">
    <div class="logo-img" style="background-image: url({{ asset('/img/logo1.png') }})"></div>
    <a class="text-gr title-font" href="/">Movie Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-3" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="{{ $pagename == 'home' ? 'bld' : '' }} text-gr item-font" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{ $pagename == 'watched' ? 'bld' : '' }} text-gr item-font" href="/watched">Watched</a>
        </li>
        <li class="nav-item">
          <a class="{{ $pagename == 'wishlist' ? 'bld' : '' }} text-gr item-font" href="/wishlist">Wishlist</a>
        </li>
      </ul>
    </div>

    <a type="button" href="/signin" class="gr text-wh item-font signin-btn">Sign In</a>

  </nav>

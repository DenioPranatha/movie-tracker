<nav class="nv navbar navbar-expand-lg navbar-light yl px-3">
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

    <a href="/profile">
        @if(auth()->check() && auth()->user()->image != '')
            <?php
                $img = auth()->user()->image;
            ?>
            <div class="m-3 profile-img" style="background-image: url({{ asset('/storage'. '/' . $img ) }})"></div>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle m-3" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        @endif
    </a>

    @if(auth()->check())
        <a type="button" href="/signout" class="gr text-wh item-font signin-btn">Sign Out</a>
    @else
        <a type="button" href="/signin" class="gr text-wh item-font signin-btn">Sign In</a>
    @endif

</nav>

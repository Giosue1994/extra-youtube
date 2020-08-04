<nav>
  <div class="container flex">
    <!-- LOGO -->
    <div class="logo flex">
      <!-- Stretched menu -->
      <div class="stretched-menu">
        <i class="fas fa-bars"></i>
      </div>

      <a href="{{ route('youtube') }}"><img src="{{ asset('/img/yt_logo_rgb_dark.png') }}" alt="Youtube"></a>
      <span class="lang-it">IT</span>
    </div>

    <!-- SEARCH BAR -->
    <div class="search-bar">
      <form class="input-search flex" action="" method="get">
        <input type="text" placeholder="Cerca">
        <div class="lens" title="Cerca">
          <i class="fas fa-search"></i>
        </div>
      </form>
    </div>

    <!-- OPTIONS -->
    <div class="options">
      <ul class="list-options flex">
        <li><i class="fas fa-video"></i><i class="fas fa-plus"></i></li>
        <li><i class="fas fa-th"></i></li>
        <li><i class="fas fa-bell"></i></li>
        <li class="profile">G</li>
      </ul>
    </div>
  </div>
</nav>

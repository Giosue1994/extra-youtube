<nav>
  @include('partials.large_menu')
  <div class="container">
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
        <div class="back hidden">
          <i class="fas fa-arrow-left"></i>
        </div>
        <input type="text" placeholder="Cerca">
        <div class="lens" title="Cerca">
          <i class="fas fa-search"></i>
        </div>
      </form>
    </div>

    <!-- OPTIONS -->
    <div class="options">
      <ul class="list-options">
        <li class="btn-search hidden"><i class="fas fa-search"></i></li>
        <li class="create">
          <i class="fas fa-video"></i><i class="fas fa-plus"></i>
          <div class="dropdown hidden">
            <ul class="list-menu">
              <li><a href="#"><i class="far fa-play-circle"></i>Carica video</a></li>
              <li><a href="#"><i class="fas fa-podcast"></i>Trasmetti dal vivo</a></li>
            </ul>
          </div>
        </li>
        <li class="youtube-apps">
          <i class="fas fa-th"></i>
          <div class="dropdown hidden">
            <ul class="list-menu">
              <li><a href="#"><i class="fab fa-youtube-square"></i>YouTube TV</a></li>
            </ul>
            <ul class="list-menu">
              <li><a href="#"><i class="fas fa-podcast"></i>YouTube Music</a></li>
              <li><a href="#"><i class="fab fa-youtube"></i>YouTube Kids</a></li>
            </ul>
            <ul class="list-menu">
              <li><a href="#"><i class="fab fa-youtube"></i>Creator Academy</a></li>
              <li><a href="#"><i class="fab fa-youtube"></i>YouTube For Artist</a></li>
            </ul>
          </div>
        </li>
        <li class="notifications">
          <i class="fas fa-bell"></i>
          <div class="dropdown drop-notif hidden">
            <div class="notifications-settings flex">
              <span>Notifiche</span>
              <i class="fas fa-cog"></i>
            </div>
            <div class="notifications-box">
              <a href="#"><i class="fas fa-bell"></i></a>
              <h4>Le tue notifiche si trovano qui</h4>
              <p>Iscriviti ai tuoi canali preferiti per ricevere le notifiche sui loro nuovi video.</p>
            </div>
          </div>
        </li>
        <li class="profile">
          <span>G</span>
          <div class="dropdown drop-prof hidden">
            <div class="account flex">
              <div class="profile-picture">
                <img src="{{ asset('img/profile-picture/default-pic.png') }}" alt="Profile picture">
              </div>

              <div class="name-account flex">
                <h4>Giosuè Lentini</h4>
                <span>giosuelentini1994@gmail.com</span>
                <a href="#">Gestisci il tuo Acoount Google</a>
              </div>
            </div>
            <ul class="list-menu">
              <li><a href="#"><i class="fas fa-user-circle"></i>Il tuo canale</a></li>
              <li><a href="#"><i class="fas fa-dollar-sign"></i>Abbonamenti a pagamento</a></li>
              <li><a href="#"><i class="fas fa-cog"></i>YouTube Studio</a></li>
              <li><a href="#"><i class="fas fa-users"></i>Cambia account<i class="fas fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fas fa-sign-out-alt"></i>Esci</a></li>
            </ul>
            <ul class="list-menu">
              <li><a href="#"><i class="fas fa-sun"></i>Tema scuro: attivato<i class="fas fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fas fa-language"></i>Lingua: Italiano<i class="fas fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fas fa-globe"></i>Località: italia<i class="fas fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fas fa-cogs"></i>Impostazioni</a></li>
              <li><a href="#"><i class="fas fa-id-card"></i>I tuoi dati su Youtube</a></li>
              <li><a href="#"><i class="fas fa-question-circle"></i>Guida</a></li>
              <li><a href="#"><i class="fas fa-comment-alt"></i>Invia feedback</a></li>
              <li><a href="#"><i class="fas fa-keyboard"></i>Scorciatoie da tastiera</a></li>
            </ul>
            <ul class="list-menu">
              <li><a href="#">Modalità con restrizioni: non attiva<i class="fas fa-angle-right"></i></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

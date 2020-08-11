<section id="menu">
  <div class="large-menu">
  <div class="section-menu home">
    <ul class="list-menu">
      <li class="active"><a href="{{ route('youtube') }}"><i class="fas fa-home"></i>Home</a></li>
      <li><a href="#"><i class="fas fa-fire"></i>Tendenze</a></li>
      <li><a href="#"><i class="fas fa-boxes"></i>Iscrizioni</a></li>
    </ul>
  </div>

  <div class="section-menu video">
    <ul class="list-menu">
      <li><a href="#"><i class="fas fa-layer-group"></i>Raccolta</a></li>
      <li><a href="#"><i class="fas fa-history"></i>Cronologia</a></li>
      <li><a href="#"><i class="far fa-play-circle"></i>I tuoi video</a></li>
      <li><a href="#"><i class="fas fa-clock"></i>Guarda più tardi</a></li>
      <li><a href="#"><i class="fas fa-thumbs-up"></i>Video piaciuti</a></li>
      <li><a href="#"><i class="fab fa-gratipay"></i>Preferiti</a></li>
    </ul>
  </div>

  <div class="section-menu subscribe">
    <h4>ISCRIZIONI</h4>
    <ul class="list-menu">
      @foreach ($subscribe_list as $subscribe)
        <li>
          <a class="sub" href="#">
            <img src="{{ $subscribe['profile-picture'] }}" alt="{{ $subscribe['name'] }}">
            <span>{{ $subscribe['name'] }}</span>
            <span class="online"></span>
          </a>
        </li>
      @endforeach
      <li class="show-others"><i class="fas fa-angle-down"></i>Mostra altri @php echo count($subscribe_hide_list) @endphp</li>
    </ul>
    <ul class="hide-list list-menu">
      @foreach ($subscribe_hide_list as $subscribe)
        <li>
          <a class="sub" href="#">
            <img src="{{ $subscribe['profile-picture'] }}" alt="{{ $subscribe['name'] }}">
            <span>{{ $subscribe['name'] }}</span>
            <span class="online hidden"></span>
          </a>
        </li>
      @endforeach
      <li><a href="#"><i class="fas fa-plus-circle"></i>Sfoglia canali</a></li>
      <li class="hide-others"><i class="fas fa-angle-up"></i>Mostra meno</li>
    </ul>
  </div>

  <div class="section-menu other">
    <h4>ALTRO DA YOUTUBE</h4>
    <ul class="list-menu">
      <li><a href="#"><i class="fab fa-youtube"></i>Youtube Premium</a></li>
      <li><a href="#"><i class="fas fa-film"></i>Film</a></li>
      <li><a href="#"><i class="fas fa-gamepad"></i>Videogiochi</a></li>
      <li><a href="#"><i class="fas fa-podcast"></i>Dal vivo</a></li>
      <li><a href="#"><i class="fas fa-tshirt"></i>Moda e bellezza</a></li>
      <li><a href="#"><i class="fas fa-lightbulb"></i>Apprendimento</a></li>
    </ul>
  </div>

  <div class="section-menu settings">
    <ul class="list-menu">
      <li><a href="#"><i class="fas fa-cog"></i>Impostazioni</a></li>
      <li><a href="#"><i class="fas fa-flag"></i>Cronologia segnalazioni</a></li>
      <li><a href="#"><i class="fas fa-question-circle"></i>Guida</a></li>
      <li><a href="#"><i class="fas fa-comment-alt"></i>Invia feedback</a></li>
    </ul>
  </div>

  <div class="footer">
    <ul>
      <li><a href="#">Informazioni</a></li>
      <li><a href="#">Stampa</a></li>
      <li><a href="#">Copyright</a></li>
      <li><a href="#">Contattaci</a></li>
      <li><a href="#">Creator</a></li>
      <li><a href="#">Pubblicità</a></li>
      <li><a href="#">Sviluppatori</a></li>
    </ul>
    <ul>
      <li><a href="#">Termini</a></li>
      <li><a href="#">Privacy</a></li>
      <li><a href="#">Nome e sicurezza</a></li>
      <li><a href="#">Prova le nuove funzioni</a></li>
      <li class="copyright">© 2020 Google LLC</li>
    </ul>
  </div>
</div>
</section>

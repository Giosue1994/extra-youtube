@extends('layouts.app')

@section('title')
  Youtube
@endsection

@section('main-content')

    <section id="list-video" class="add-padding-large">
      <div class="container">
        <h2>Consigliati</h2>
        <div class="recommended flex">

          @foreach ($video_list as $video)
            <!-- Box video -->
            <div class="box-video">
              <div class="video-img">
                <a href="#"><img src="{{ $video['thumbnail'] }}" alt="img"></a>
                <div class="duration">
                  <span>{{ $video['duration'] }}</span>
                </div>
              </div>

              <div class="video-description">
                <div class="details">
                  <i class="fas fa-ellipsis-v"></i>
                  <div class="dropdown hidden">
                    <ul class="list-menu">
                      <li><a href="#"><i class="fas fa-stream"></i>Aggiungi alla coda</a></li>
                      <li><a href="#"><i class="fas fa-clock"></i>Salva in guarda più tardi</a></li>
                      <li><a href="#"><i class="fas fa-archive"></i>Salva in una playlist</a></li>
                    </ul>
                    <ul class="list-menu">
                      <li><a href="#"><i class="fas fa-ban"></i>Non mi interessa</a></li>
                      <li><a href="#"><i class="fas fa-times-circle"></i>Non consigliare il canale</a></li>
                      <li><a href="#"><i class="fas fa-flag"></i>Segnala</a></li>
                    </ul>
                  </div>
                </div>
                <!-- Profile picture -->
                <div class="profile-picture">
                  <img src="{{ $video['profile-picture'] }}" alt="{{ $video['name'] }}">
                </div>

                <!-- Title -->
                <div class="title">
                  <h3><a href="#">{{ $video['title'] }}</a></h3>
                  <div class="video-details">
                    <span><a class="name" href="#">{{ $video['name'] }}</a></span><br>
                    <span class="visual">{{ $video['visual'] }} visualizzazioni</span>
                    <span>{{ $video['time'] }}</span>
                  </div>
                </div>
              </div>

              <!-- Hover -->
              <div class="hover">
                <div class="square watch-later">
                  <i class="fas fa-clock"></i>
                  <div class="message">
                    <span>GUARDA PIÙ TARDI</span>
                  </div>
                </div>
                <div class="square queue">
                  <i class="fab fa-gratipay"></i>
                  <div class="message">
                    <span>AGGIUNGI ALLA CODA</span>
                  </div>
                </div>
              </div>

            </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection

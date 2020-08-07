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
                </div>
                <!-- Profile picture -->
                <div class="profile-picture">
                  <img src="{{ $video['profile-picture'] }}" alt="{{ $video['name'] }}">
                </div>

                <!-- Title -->
                <div class="title">
                  <h3><a href="#">{{ $video['title'] }}</a></h3>
                  <span><a class="name" href="#">{{ $video['name'] }}</a></span><br>
                  <span class="visual">{{ $video['visual'] }} visualizzazioni</span>
                  <span>{{ $video['time'] }}</span>
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

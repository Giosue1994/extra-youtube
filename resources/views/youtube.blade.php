@extends('layouts.app')

@section('title')
  Youtube
@endsection

@section('main-content')

    <section id="list-video" class="add-padding-large">
      <div class="container">
        <h2>Consigliati</h2>
        <div class="recommended flex">

          <!-- Box video -->
          <div class="box-video">
            <div class="video-img">
              <a href=""><img src="" alt="img"></a>
              <div class="duration">
                <span>14:54</span>
              </div>
            </div>

            <div class="video-description">
              <div class="details">
                <i class="fas fa-ellipsis-v"></i>
              </div>
              <!-- Profile picture -->
              <div class="profile-picture">
                <img src="" alt="img">
              </div>

              <!-- Title -->
              <div class="title">
                <h3><a href="#">TITOLO</a></h3>
                <span><a href="#">nome canale</a></span><br>
                <span>visualizzazioni • <span>1 giorno fa</span></span>
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
        </div>
      </div>
    </section>
@endsection

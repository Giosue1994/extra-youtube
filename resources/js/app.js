require('./bootstrap');
var $ = require( "jquery" );

$(document).ready(function() {

///// MENU //////
  // al click del burger compare la finestra del menu
  $('.stretched-menu i').click(function() {
    $('header .large-menu').toggle();

    $('main .small-menu').toggleClass('visible');
    $('main .large-menu').toggleClass('visible');

    if ($('main .large-menu').hasClass('visible')) {
      $('#list-video').removeClass('add-padding-small');
      $('#list-video').addClass('add-padding-large');
      $('header .large-menu').addClass('hidden');
    }

    if ($('main .large-menu').hasClass('hidden')) {
        $('main .small-menu').show();
    }

    if ($('main .small-menu').hasClass('visible')) {
      $('main .large-menu').removeClass('visible');
      $('header .large-menu').addClass('hidden');
      $('main .large-menu').addClass('hidden');
      $('#list-video').addClass('add-padding-small');
      $('#list-video').removeClass('add-padding-large');
    }

  });

/////// SEARCH BAR ///////
  // al click della lente compare la barra di ricerca
  $('.btn-search i').click(function() {
    $('.logo').hide();
    $('.options').hide();
    $('.search-bar').show();
    $('.search-bar').css('width', '100%');
  });

  // al click della freccia torno indietro
  $('.back i').click(function() {
    $('.logo').show();
    $('.options').show();
    $('.search-bar').hide();
  });

  $(window).resize(function(){
    if ($(window).width() >= 657){
      $('.search-bar').show();
      $('.search-bar').css('width', '50%');
    } else if ($(window).width() < 657) {
      $('.logo').show();
      $('.options').show();
      $('.search-bar').hide();
    }
  });

////////// VIDEO BUTTON /////////
  // al passaggio del mouse sul quadratino mostro un messaggio
  $('.square').mouseenter( function() {
      
    });

});

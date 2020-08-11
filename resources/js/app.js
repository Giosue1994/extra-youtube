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
      $('main .large-menu').addClass('hidden');
      $('header .large-menu').addClass('hidden');
      $('#list-video').addClass('add-padding-small');
      $('#list-video').removeClass('add-padding-large');
    }
  });

  // al chlick di show-other mostro la lista di iscritti
  $('.show-others').click(function() {
    $('.show-others').hide();
    $('.hide-list').show();
  });

  $('.hide-others').click(function() {
    $('.show-others').show();
    $('.hide-list').hide();
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

////////// DROPDOWN ////////////
  //l click del tasto compare la dropdown
  $('.list-options li').click(function() {
    if (!$(this).children('.dropdown').hasClass('visible')) {
      $('.dropdown').removeClass('visible');
    }
    $(this).children('.dropdown').toggleClass('visible');
  });

  $('.details').click(function() {
    if (!$(this).children('.dropdown').hasClass('visible')) {
      $('.dropdown').removeClass('visible');
    }
    $(this).children('.dropdown').toggleClass('visible');
  });

  $('.box-video').mouseleave(function() {
    $('.details .dropdown').removeClass('visible');
  });
});

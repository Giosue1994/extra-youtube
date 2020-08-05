require('./bootstrap');
var $ = require( "jquery" );

$(document).ready(function() {

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

});

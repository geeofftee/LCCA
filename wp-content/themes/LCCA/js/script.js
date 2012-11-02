jQuery(document).ready(function($) {
  $("#contact-form").validate({});
  setTimeout(function(){
    $('.banner-text').addClass('faded-in').removeClass('is-hidden');
  }, 500);
  $('.mobile-nav-button button').click(function(){
    $('nav#access').removeClass('is-mobile-hidden').addClass('open-menu');
  });
  $('.mobile-nav-button.open-menu button').click(function(){
    $('nav#access').removeClass('open-menu').setTimeout(function(){$('nav#access').addClass('is-mobile-hidden');}, 300);
  });
});
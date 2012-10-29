jQuery(document).ready(function($) {
  $("#contact-form").validate({
  });
  setTimeout(function(){
    $('.banner-image').addClass('faded');
    setTimeout(function(){
      $('.banner-text').addClass('faded-in').removeClass('is-hidden');
    }, 800);
  }, 800);
});
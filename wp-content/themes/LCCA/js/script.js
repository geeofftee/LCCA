jQuery(document).ready(function($) {
  $("#contact-form").validate({
  });
  setTimeout(function(){
    $('.banner-image').addClass('faded');
      setTimeout(function(){
        $('.banner-text').addClass('fadein');
      }, 800);

    }, 800);
  });
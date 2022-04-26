$(function() {
  $('.top-wrapper').hide().fadeIn('slow');
  $('.main-wrapper').hide().fadeIn('slow');
  $('.contact-wrapper').hide().fadeIn('slow');
  $('.operated-wrapper').hide().fadeIn('slow');

  $('.faq-list-item').click(function() {
    var $answer = $(this).find('.answer');
    if($answer.hasClass('open')) {
      $answer.removeClass('open');
      $answer.slideUp();
      $(this).find('span').text('+');
    } else {
      $answer.addClass('open');
      $answer.slideDown();
      $(this).find('span').text('-');
    }
  });
  $('.hamburger').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.globalMenuSp').addClass('active');
      } else {
          $('.globalMenuSp').removeClass('active');
      }
  });
});

$('#open-modal').click(function() {
    $('.your-modal').show();
    $('.your-modal').removeClass('animated zoomOut').addClass('animated zoomIn');
  });
  
  $('.close-button').click(function() {
    $('.your-modal').removeClass('animated zoomIn').addClass('animated zoomOut').delay(800).fadeOut(400);
  });
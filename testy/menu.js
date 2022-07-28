$(document).ready(function(){
    $('.burger-menu').click(function(){
      $('.dropdown-content').toggleClass('show');
    });
    $(document).click(function(event) { 
        if(!$(event.target).closest('.burger-menu').length) {
            if($('.dropdown-content').is(":visible")) {
                $('.dropdown-content').toggleClass('show');
            }
        }        
    });
    });
$(document).ready(function(){
    $('.buttons').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        var filter = $(this).attr('data-filter');
        if(filter == 'all'){
            $('.image').show(400);
        } else {
            $('.image').not('.' + filter).hide(200);
            $('.image').filter('.' + filter).show(400);
        }
    });
    
    $('.collection').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true // Corrected the typo here
        }
    });
});

  // Initially hide some images
  $('.image').slice(6).addClass('hidden');

  // Handle "See More" button click event
  $('.load-more').click(function(){
      $('.image.hidden').slice(0, 6).removeClass('hidden').slideDown();
      if ($('.image.hidden').length == 0) {
          $(this).fadeOut();
      }else{
              $(this).fadeIn();     
             }
  });
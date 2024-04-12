
  (function ($) {
  
  "use strict";

    // COUNTER NUMBERS
    jQuery('.counter-thumb').appear(function() {
      jQuery('.counter-number').countTo();
    });

    // BACKSTRETCH SLIDESHOW
    $('.hero-section').backstretch([
      "images/slideshow/afro-woman-cleaning-window-with-rag-home.jpg", 
      "images/slideshow/afro-woman-holding-bucket-with-cleaning-items.jpg",
      "images/slideshow/unrecognizable-cleaner-walking-into-hotel-room-with-tools-detergents.jpg"
    ],  {duration: 2000, fade: 750});
    
    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
  
      scrollToDiv(elWrapped);
      return false;
  
      function scrollToDiv(element){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-navheight;
  
        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });
    
  })(window.jQuery);

  
  
  
 
  document.addEventListener("DOMContentLoaded", function() {
      var images = [
          "<?php echo get_template_directory_uri(); ?>/images/slideshow/afro-woman-cleaning-window-with-rag-home.jpg",
          "<?php echo get_template_directory_uri(); ?>/images/slideshow/afro-woman-holding-bucket-with-cleaning-items.jpg",
          "<?php echo get_template_directory_uri(); ?>/images/slideshow/unrecognizable-cleaner-walking-into-hotel-room-with-tools-detergents.jpg"
      ];

      var currentIndex = 0;
      var $imgs = document.querySelectorAll(".backstretch img");
      $imgs[currentIndex].classList.add("active");

      setInterval(function() {
          $imgs[currentIndex].classList.remove("active");
          currentIndex = (currentIndex + 1) % images.length;
          $imgs[currentIndex].classList.add("active");
      }, 5000); // Change images every 5 seconds
  });




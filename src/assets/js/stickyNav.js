jQuery(document).ready(function($) {
    var stickyNavTop = $('.desktop-nav').offset().top;
    var width = $(window).width();
    var isStuck = false;
    // console.log("top offset: " + stickyNavTop + ", is stuck? " + isStuck);
    if($('#masthead').hasClass('noHeader')) {
      isStuck = true;
    } else {
      var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
        width = $(window).width();
        // console.log("scroll top: " + scrollTop);
        if (scrollTop >= stickyNavTop && !isStuck && width > 640) { 
          $('#masthead').addClass('sticky');
          // console.log("sticky added");
        } else {
          $('#masthead').removeClass('sticky'); 
          // console.log("sticky removed");
        }
      };
    
      stickyNav();

      $(window).resize(function() {
        stickyNavTop = $('.desktop-nav').offset().top;
        width = $(window).width();
        // console.log("Resize: top offset: " + stickyNavTop + ", is stuck? " + isStuck);
        stickyNav();
      });

      $(window).scroll(function() {
        // console.log("Scroll: top offset: " + stickyNavTop + ", is stuck? " + isStuck);
        stickyNav();
      });
    }
  });
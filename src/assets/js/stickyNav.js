jQuery(document).ready(function($) {
    var stickyNavTop = $('.nav').offset().top;
    var isStuck = false;
    var width = $(window).width();
    

    if($('#masthead').hasClass('noHeader')) {
      isStuck = true;
    } else {
      var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
        width = $(window).width();
        if (scrollTop > stickyNavTop && !isStuck && width > 960) { 
          $('#masthead').addClass('sticky');
          // console.log("sticky added");
        } else {
          $('#masthead').removeClass('sticky'); 
          // console.log("sticky removed");
        }
      };
    
      stickyNav();

      $(window).scroll(function() {
        stickyNav();
      });
    }
  });
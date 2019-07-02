import $ from 'jquery';
"use strict";

// FUNCTIONS
function throttling(callback, limit, time) {
    /// monitor the count
    var calledCount = 0;

    /// refesh the `calledCount` varialbe after the `time` has been passed
    setInterval(function(){ calledCount = 0 }, time);

    /// creating a clousre that will be called
    return function(){
        /// checking the limit (if limit is exceeded then do not call the passed function
        if (limit > calledCount) {
            /// increase the count
            calledCount++;
            callback(); /// call the function
        } 
        else console.log('not calling because the limit has exeeded');
    };
};

// if (!Modernizr.objectfit) {
//     console.log("object fit not supported");
//     jQuery('.img-container-left, .img-container-right, .site-banner-thumbnail.home').each(function () {
//         var $container = jQuery(this),
//             imgUrl = $container.find('img').prop('src');
//         if (imgUrl) {
//           $container
//             .css('backgroundImage', 'url(' + imgUrl + ')')
//             .addClass('compat-object-fit');
//         }  
//     });
// } else if (Modernizr.objectfit) {
//     console.log("object fit supported");
    
// }

// this is a script to generate all the blocks that i need in the grid 
function gridGenerator(array) {
    var el = document.getElementsByClassName("home-grid-container");
    for(var n = 0; n < el.length; n++) {
        var element = el[n];
        var grids = array[n].grids;
        var boxSize = array[n].box;
        var hGrids = array[n].hGrids;
        var rowCount = 0;
        var alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
        for(var i = 0; i < grids; i++) {
            // create the new div
            var div = document.createElement("div");
            div.style.width = boxSize + "px";
            div.style.height = boxSize + "px";
            div.style.color = "white";
            // add in grid labels
            if(i % hGrids == 0) {
                rowCount++;
            }
            div.innerHTML = "<p class='grid-labels'>" + alphabet[i % hGrids] + rowCount + "</p>";
            // place the new div before the original
            element.insertBefore(div, element.childNodes[i]);
            // console.log(element);
            element.childNodes[i].style.animation = "fadeIn 1s";
        };
    };
};

// For every resize, the existing divs need to be removed. That is what this does by just clearing the innerHTML of all the grid-containers
function gridRemover() {
    var el = document.getElementsByClassName("home-grid-container");
    for(var n = 0; n < el.length; n++) {
        var element = el[n];
        element.innerHTML = "";
    };
}

// This function grabs the window w/h, subtracts the padding, then calculates the width of the div boxes
// to be generated. then it calculates the numbers of divs to be generated
// pack it in a object and ship it out
function windowSize(x) {
    var windows = document.getElementsByClassName("home-grid-container");
    var windowArray = [];
    for(var n = 0; n < windows.length; n++) {
        var box = windows[n];
        var width = jQuery(box).width();
        var height = jQuery(box).height();
        var boxNum = width / x;
        var grids = (width / boxNum) * Math.ceil(height / boxNum);

        // console.log(width + " - width of window");
        // console.log(height + " - height of window");
        // console.log(box + " width and height of boxes");
        // console.log(boxNum + " width and height of boxes");
        // console.log(grids + " # of boxes");

        windowArray[n] = {
            grids: grids,
            box: boxNum,
            width: width,
            height: height,
            hGrids: x
        }
    };
    // console.log(windowArray);
    return windowArray;
}

function flipFlop(x, y, z) {
    if( x <= 962) {
    //    $container = jQuery(".img-container-right");
       for(var i = 0; i < y.length; i++) {
           var $textContainer = jQuery(z[i]);
           var $container = jQuery(y[i]);
           $textContainer.insertAfter($container).addClass("switched");
        };
    } else if( x > 962 && jQuery(z).hasClass("switched")) {
        for(var i = 0; i < y.length; i++) {
            var $textContainer = jQuery(z[i]);
            var $container = jQuery(y[i]);
            $textContainer.removeClass("switched").insertBefore($container);
         };
    };
       
    //     jQuery(".img-container-right").insertBefore(jQuery(".text-container-right"));
    //     jQuery(".switch").insertAfter(jQuery(".switch-p").addClass("switched"));
    //     if( x <= 400 && jQuery(".switch-p").hasClass("switched")) {
    //         jQuery(".switch-p").removeClass("switched").insertAfter(jQuery(".switch"));
    //     };
    // } else {
    //     // jQuery(".img-container-right").insertAfter(jQuery(".text-container-right"));
    //     // jQuery(".switch").insertBefore(jQuery(".switch-p"));
    // };
}

jQuery(document).ready(function($) {
    
    
    // Function to put image at the end of the main video so that it doesn't look as low resolution

    var video = document.getElementById("myVideo");

    if(video) {
            video.addEventListener("ended", function() {
                var $video = $(video);
                $video.fadeOut("slow");
                $("#header-video-container").append("<img class='video-ended-poster' src='../wp-content/uploads/2019/06/HeaderMovie4k-Poster.jpg' alt='critical response group map image'>").fadeIn("slow");
            });
    };

    // moving the figcaption into the anchor tag of gallery items to allow for linking clicking 
    $(".blocks-gallery-item").each(function() {
        let anchor = $(this).find("a");
        let figcaption = $(this).find("figcaption");
        $(anchor).append(figcaption);
    });


    // RESIZE SCRIPT
    // -----------------------------------------------------------------------------------------------------------
    // adding ID's to all image containers on product page for switching content
    var container = document.getElementsByClassName("img-container-right");
    var textContainer = document.getElementsByClassName("text-container-right");
 
    for(var i = 0; i < container.length; i++) {
        var $this = jQuery(container[i]);
        var $that = jQuery(textContainer[i]);
        $this.attr("id", "img" + i);
        $that.attr("id", "p" + i);
        console.log(i);
    };

    // Cache all animated elements
    var $animation_elements = $('.animation-element');
    // var $animation_elements_quick = $('.animation-element-quick');
    var $window = $(window);
    var $window_width = $window.width();

    // actual function to check if in view
    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        
       
        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);
            
            element_top_position = element_top_position + (window_height / 8);
            element_bottom_position = element_bottom_position - (window_height / 8);

            //check to see if this current container is within viewport
            if($window_width > 430) {
                if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                    $element.addClass('in-view');
                    // console.log($element);
                } 
            } else {
                $element.addClass('in-view');
            }
        });

        // $.each($animation_elements_quick, function() {
        //     var $element = $(this);
        //     var element_height = $element.outerHeight();
        //     var element_top_position = $element.offset().top;
        //     var element_bottom_position = (element_top_position + element_height);

        //     //check to see if this current container is within viewport
        //     if ((element_bottom_position >= window_top_position) &&
        //         (element_top_position <= window_bottom_position)) {
        //         $element.addClass('in-view');
        //         // console.log($element);
        //     } 
        // });
    }

    // Grab scroll and resize event with callback to in_view function
    if($window.width() > 430) {
        $window.on('scroll resize', check_if_in_view);
        // Initial trigger method to fire a scroll even as soon as the window loads just in case there are things on
        // the first page to animate
        $window.trigger('scroll');
    } else {
        check_if_in_view();
    };
    
    // set the number of grids you want to span the screen
    var numGrids;

    if ($window_width < 1000) {
        numGrids = 8;
    } else {
        numGrids = 15;
    }
     
    // Initial check
    var initWindowSize = windowSize(numGrids);
    
    // fire of the grid generator to start it up if not on the product page
    // if(!$(".img-container-right").length || !$(".img-container-left").length) {
    //     console.log("working");
    if($window.width() > 430) {
        window.onload = function () { gridGenerator(initWindowSize); };
        // resize check
        $(window).on("resize", function() {
            var newWindowSize = windowSize(numGrids);
            flipFlop($window.width(), container, textContainer);
            gridRemover();
            gridGenerator(newWindowSize);
        });
    }
    
    // };
    
    // set initial position for features on product page that need to be switched around
    flipFlop($window.width(), container, textContainer);

    

    // Flexslider trigger 
    $('.mtt-slider').slick({
        autoplay: true,
        autoplaySpeed: 10000,
        slidesToShow: 3,
        nextArrow: '<div id="next-button" class="slick-next"></div>',
        prevArrow: '<div id="prev-button" class="slick-prev"></div>',
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
                }
            },
            {
            breakpoint: 769,
            settings: {
                arrows: false,
                slidesToShow: 1,
                }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,  
                slidesToShow: 1
            }
            }
        ]
    });



    // FAQ PAGE
    // ---------------------------------------------------------------------------------------------------------------------
    //hide all panels
    var panels = $(".answer-desc").hide();

    // trigger the event
    $('.toggle').click(function(e) {
        //prevent any default actions of the event
        e.preventDefault();
    
        // wrap event(this) in a jQuery Object
        var $this = $(this);
        // this is to make it easier to change if structure of html changes
        // also easier to read
        var $thisPanel = $this.parent().next();
        
        // conditional statement to check it current panels(or whatever) has open class
        // open class is something that is being added dynamically and not hard coded
        if($thisPanel.hasClass('open')) {
            // if the current panel that was clicked on has open class
            // then close(slide) up this panel and remove the class
            $thisPanel.slideUp().removeClass('open');
        } else {
            // if the class open IS NOT present on the element we clicked on then add the class
            // then open (slide) the panel.
            $thisPanel.addClass('open').slideDown();
            // this is the magic, go thru panels (which is an array of elements declared earlier)
            // and remove the open class and close(slide) them up, but NOT this panel, the panel that triggered the event
            panels.not($thisPanel).removeClass('open').slideUp();
        };
    });
    

    // STICKY NAV BAR
    // ---------------------------------------------------------------------------------------------------------------------
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


    // NAVIGATION
    // ---------------------------------------------------------------------------------------------------------------------
    // make menu appear once fully loaded
    $(".mobile-nav-button.open").animate({"opacity": "1"}, "fast");

    // grab nav-container
    var $nav = $(".mobile-nav-container");
    var $products = $(".mobile-link.product");
    var $about = $(".mobile-link.about");
    // animationObj["opacity"] = 1;
    var animationTime = 20;
    // Defining the 4 arrays i will need to loop thru
    var top = [];
    var left = [];
    var right = [];
    // some variables just in case i need to change things later
    var startLarge = 52;
    var startSmall = 42;
    var amount = 11;
    var intervalLarge = 7;
    var intervalSmall = 5;
    var $width = $(window).width();
    // make gradients unclickable
    $(".gradient").css("pointer-events","none");

    // add in the overlay needed later
    $('body').append("<div class='overlay fixed'></div>");
    var $overlay = $(".overlay.fixed");

    // Grab all the boxes in the mobile nav
    var $boxesLarge = $(".over-400 .expanded-box");
    var $boxesSmall = $(".under-400 .expanded-box");
    // Iterate thru them to give them unique id's
    if($(window).width() > 430) {
        $.each($boxesLarge, function(index) {
            var $element = $(this);
            $element.attr("id", index);
        });
    } else if ($(window).width() < 430) {
        $.each($boxesSmall, function(index) {
            var $element = $(this);
            $element.attr("id", index);
        });
    }
    

    // functions that will get the left, right, and top 
    var topFn = function(x, leftArray, rightArray) {
        // alert("in top function" + x);
        // select current object in loop
        var $element = $("#" + x);

        // console.log($element);
        $element.addClass("scaleUp").css("opacity", "1");

        // get all the elements and put them in their correct arrays
        var topLeft = $element.prev().attr("id");
        leftArray.push(topLeft);

        var topRight = $element.next().attr("id");
        rightArray.push(topRight);

        var topTop;

        if($width > 430) {
            topTop = $("#" + ($element.attr("id")-intervalLarge)).attr("id");
        } else {
            topTop = $("#" + ($element.attr("id")-intervalSmall)).attr("id");
        }
        

        return topTop;
    };

    var rightFn = function(x) {
        // alert("in right function");
        // select current object in loop
        var $element = $("#" + x);
        
        // animate current object in loop
        // $element.animate(animationObj, animationTime, function() {
            $element.addClass("scaleUp").css("opacity", "1");
        // });

        // get the element to the left of current element
        var $nextElement = $element.next().attr("id");
    
        return $nextElement;
    };

    var leftFn = function(x) {
        // alert("in left function");
        // select current object in loop
        var $element = $("#" + x);
        // animate current object in loop
        // $element.animate(animationObj, animationTime, function() {
            $element.addClass("scaleUp").css("opacity", "1");
        // });

        // get the element to the left of current element
        var $nextElement = $element.prev().attr("id");
        
        return $nextElement;
    };

    function wave(start) {
        // alert("in wave function");
        // start the array of with initial value
        var i = 1;     
        top.push(start);   

        function myLoop() {           //  create a loop function
            setTimeout(function () {        //  call a 3s setTimeout when the loop is called
                // console.log("CURRENT STEP " + i);
                
                var topReturned;
                var rightReturned = [];
                var leftReturned = [];
                // console.log("in first level loop " + i);
            
                    // console.log("-------------------------------------------");
                    // console.log("in second level loop " + i);
                    for(var t = 0; t < top.length; t++) {
                        // console.log("-------------------------------------------");
                        console.log("   in top loop " + t);
                        var currentTop = $("#" + top[t]).attr("id");
                        topReturned = topFn(currentTop, left, right);
                        // console.log("   " + top);
                    };
                    for(var l = 0; l < left.length; l++) {
                        // console.log("-------------------------------------------");
                        console.log("   in left loop " + l);
                        // console.log("   left value = " + left[l]);
                        var leftVal = leftFn($("#" + left[l]).attr("id"), left);
                        // basically checking to make sure that it isnt grabbing the id of the box that is on the right side
                        // i do this by check the remainder and excluding anything that isn't supposed to be there
                        if($width < 430) {
                            if(leftVal != undefined && leftVal % intervalSmall != 4 ) {
                                leftReturned.push(leftVal);
                            } else {
                                continue;
                            }
                        } else {
                            if(leftVal != undefined && leftVal % intervalLarge != 6 ) {
                                leftReturned.push(leftVal);
                            } else {
                                continue;
                            }
                        }
                        
                        console.log("   left values = " + left);
                        
                    };
                    for(var r = 0; r < right.length; r++) {
                        console.log("-------------------------------------------");
                        console.log("   in right loop " + r);
                        // console.log("   right value = " + right[r]);
                        // console.log("   right values = " + right);
                        var rightVal = rightFn($("#" + right[r]).attr("id"), right);
                        if($width < 430) {
                            if(rightVal != undefined && rightVal % intervalSmall != 0) {
                                rightReturned.push(rightVal);
                            } else {
                                continue;
                            }
                        } else {
                            if(rightVal != undefined && rightVal % intervalLarge != 0) {
                                rightReturned.push(rightVal);
                            } else {
                                continue;
                            }
                        }
                        
                        
                    };

                    // Clear array
                    top = [];
                    right = [];
                    left = [];
                    // add returned value from topFn()
                    top.push(topReturned);

                    for(var loop = 0; loop < rightReturned.length; loop++) {
                        right.push(rightReturned[loop]);
                    }

                    for(var loop = 0; loop < leftReturned.length; loop++) {
                        left.push(leftReturned[loop]);
                    }
                i++;                     //  increment the counter
                if (i < amount) {            //  if the counter < 10, call the loop function
                    myLoop();             //  ..  again which will trigger another 
                }                        //  ..  setTimeout()
            }, animationTime);
        }

        myLoop();
    };

    $nav.click(function() {
        var $width = $(window).width();
        var $popOutLarge = $(".mobile-nav-popup-container.over-400");
        var $popOutSmall = $(".mobile-nav-popup-container.under-400");
        var menuButton = document.getElementsByClassName("mobile-nav-button");
        // testing whether i need to use the large box grid or the small one
        if($width > 430) {
            if($popOutLarge.hasClass("open-container")) {
                $popOutLarge.removeClass("open-container").css("display", "none");
                $(".expanded-box").removeClass("scaleUp");
                $(menuButton[1]).animate({opacity: 0}, animationTime);
                $(menuButton[0]).animate({opacity: 1}, animationTime);
                $overlay.fadeOut();
                // clear arrays for next time
                top = [];
                right = [];
                left = [];
                $(".expanded-box").css("opacity", "0");
            } else {
                $popOutLarge.addClass("open-container").css("display", "block");
                $(menuButton[1]).animate({opacity: 1}, animationTime);
                $(menuButton[0]).animate({opacity: 0}, animationTime);
                $overlay.fadeIn();
                wave(startLarge);
            }
        } else {
            if($popOutSmall.hasClass("open-container")) {
                $popOutSmall.removeClass("open-container").css("display", "none");
                $(".expanded-box").removeClass("scaleUp");
                $(menuButton[2]).animate({opacity: 0}, animationTime);
                $(menuButton[0]).animate({opacity: 1}, animationTime);
                $overlay.fadeOut();
                // clear arrays for next time
                top = [];
                right = [];
                left = [];
                $(".expanded-box").css("opacity", "0");
            } else {
                $popOutSmall.addClass("open-container").css("display", "block");
                $(menuButton[2]).animate({opacity: 1}, animationTime);
                $(menuButton[0]).animate({opacity: 0}, animationTime);
                $overlay.fadeIn();
                wave(startSmall);
            }
        }
        
    });

    $products.click(function() {
        $(".sub-link-product").toggleClass("opened");
        $(".content-mobile.sub-menu-mobile.product-arrow").toggleClass("gone");
    });

    $about.click(function() {
        $(".sub-link-about").toggleClass("opened");
        $(".content-mobile.sub-menu-mobile.about-arrow").toggleClass("gone");
    });
});
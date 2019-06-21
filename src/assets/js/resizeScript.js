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
                console.log(element);
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
    var $animation_elements_quick = $('.animation-element-quick');
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
            
            element_top_position = element_top_position + (window_height / 3);
            element_bottom_position = element_bottom_position - (window_height / 3);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
                // console.log($element);
            } 
        });

        $.each($animation_elements_quick, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
                // console.log($element);
            } 
        });
    }

    // Grab scroll and resize event with callback to in_view function
    $window.on('scroll resize', check_if_in_view);

    // Initial trigger method to fire a scroll even as soon as the window loads just in case there are things on
    // the first page to animate
    $window.trigger('scroll');

    // set the number of grids you want to span the screen
    var numGrids;

    if ($window_width < 1000) {
        numGrids = 8;
    } else {
        numGrids = 15;
    }
     
    // set the padding that the parent div container has so the boxes fit correctly
    var padding = 40;
    // Initial check
    var initWindowSize = windowSize(numGrids);
    
    // fire of the grid generator to start it up if not on the product page
    // if(!$(".img-container-right").length || !$(".img-container-left").length) {
    //     console.log("working");
    window.onload = function () { gridGenerator(initWindowSize); }
    // };
    
    // set initial position for features on product page that need to be switched around
    flipFlop($window.width(), container, textContainer);

    // resize check
    $(window).on("resize", function() {
        var newWindowSize = windowSize(numGrids);
        flipFlop($window.width(), container, textContainer);
        gridRemover();
        gridGenerator(newWindowSize);
    });

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
    
});




import $ from 'jquery';
"use strict";

// FUNCTIONS
function moveFigcaptionIntoAnchor(container, wrapper, insert) {
    $(container).each(function() {
        let anchor = $(this).find(wrapper);
        let figcaption = $(this).find(insert);
        $(anchor).append(figcaption);
    });
}

function hiResVideoEnding(id, container, src, alt) {
    // Function to put image at the end of the main video so that it doesn't look as low resolution
    let video = document.getElementById(id);
    let alt2 = alt ? alt : alt = "End of video poster";

    if(video) {
        video.addEventListener("ended", function() {
            var $video = $(video);
            $video.fadeOut("slow");
            $(container).append(`<img class='video-ended-poster' src='${src}' alt='${alt2}'>`).fadeIn("slow");
        });
    } else {
        console.log("video container not selected or not available, no image added");
    };
}

function addUniqueIDCreator(element, prefix) {
    // adding ID's to all image containers on product page for switching content
    var container = document.getElementsByClassName(element);
 
    for(var i = 0; i < container.length; i++) {
        var $this = jQuery(container[i]);
        $this.attr("id", prefix + i);
    };
}

//chunking function
function chunk (arr, len) {

    var chunks = [],
        i = 0,
        n = arr.length;
  
    while (i < n) {
      chunks.push(arr.slice(i, i += len));
    }
  
    return chunks;
}

function chunkAndReorder(arr, col, flipBlock) {
    for(let reset of arr) {
        $(reset).find(flipBlock).each(function(index) {
            $(this).removeClass("reorder-1 reorder-2");
        })
    }
    let threeArray = chunk(arr, col);
    for(let i = 0; i < threeArray.length; i++) {
        if(i % 2 !== 0) {
            for(let change of threeArray[i]) {
                $(change).find(flipBlock).last().addClass("reorder-1");
                $(change).find(flipBlock).first().addClass("reorder-2");
            }
        }
    }
}

//add classes to news page to flip text from right to left at different screen sizes
function newsBlockFlip(container, block) {
    let flipContainer = $(container);
    let flipBlock = $(block);
    let width = $(window).width();
    let widths = {
        medium: 640,
        middle: 840,
        large: 1024,
        xlarge: 1200,
        xxlarge: 1440,
    };

    let switcher = function() {
        if(width > widths.xxlarge) {
            chunkAndReorder(flipContainer, 3, flipBlock);
        } else if (width > widths.large && width < widths.xxlarge) {
            chunkAndReorder(flipContainer, 2, flipBlock);
        } else if (width > widths.medium && width < widths.large) {
            chunkAndReorder(flipContainer, 1, flipBlock);
        } else {
            for(let reset of flipContainer) {
                $(reset).find(flipBlock).each(function(index) {
                    $(this).removeClass("reorder-1 reorder-2");
                })
            }
        }
    };

    $(window).resize(function() {
        width = $(window).width();
        switcher();
    });

    switcher();
}

function animationEvent(animationClass) {
    // Cache all animated elements
    var $animation_elements = $(animationClass);
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
            
            element_top_position = (element_top_position - 150) + (window_height / 8);
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
}


$(document).ready(function($) {

    // make page visible once all is loaded
    $("html").css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 500);

    moveFigcaptionIntoAnchor(".blocks-gallery-item", "a", "figcaption");

    hiResVideoEnding("myVideo","#header-video-container", "../wp-content/uploads/2019/06/HeaderMovie4k-Poster.jpg");

    newsBlockFlip(".post-grid-block-inside", ".post-grid-block-inside-cell");

    animationEvent('.animation-element');

    // Colored slide up thing on news page
    let colorArray = [
        "#23408a",
        "#8a6d23",
        "#408a23",
        "#6d238a", 
        "#989898",
        "#23408a",
        "#ffc52a",
        "#3adb76",
        "#ffae00",
        "#cc4b37"
    ];

    $(".cover-link").hover(function() {
        let overlay = $(this).siblings(".post-grid-block-inside-cell").children(".entry-media").children(".overlay");
        if($(overlay).is(":hidden")) {
            $(overlay).css("background", colorArray[Math.floor(Math.random() * 10)]).fadeIn(200);
        }
    }, function() {
        let overlay = $(this).siblings(".post-grid-block-inside-cell").children(".entry-media").children(".overlay");
        if($(overlay).is(":visible")) {
            $(overlay).fadeOut(200);
        }
    });

    $(".resource-grid-block .post-grid-block-inside-cell").each(function(index){
        if(index > 9) {
            index = index - 9;
        };

        $(this).css("border", `1px solid ${colorArray[index]}`);
        $(this).children(".entry-inner").css("color", `${colorArray[index]}`);
    });

    $(".resource-grid-block .background").each(function(index) {
        $(this).css("background", colorArray[index]);
    });

    $(".format-video iframe").wrap("<div class='iframe-container'></div>");
});
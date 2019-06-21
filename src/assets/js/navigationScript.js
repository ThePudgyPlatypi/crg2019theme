 // make menu appear once fully loaded
$(".mobile-nav-button.open").animate({"opacity": "1"}, "fast");

// grab nav-container
var $nav = $(".mobile-nav-container");
var $products = $(".mobile-link.product");
var $about = $(".mobile-link.about");
var animationObj = {
    opacity: 1
};
// animationObj["opacity"] = 1;
var animationTime = 20;
// Defining the 4 arrays i will need to loop thru
var top = [];
var left = [];
var right = [];
var mainArray = [left, top, right];
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
var topFn = function(x, topArray, leftArray, rightArray) {
    // alert("in top function" + x);
    // select current object in loop
    var $element = $("#" + x);

    // console.log($element);
    $element.animate(animationObj, animationTime, function() {
        $element.addClass("scaleUp");
    });
    

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

var rightFn = function(x, y) {
    // alert("in right function");
    // select current object in loop
    var $element = $("#" + x);
    
    // animate current object in loop
    $element.animate(animationObj, animationTime, function() {
        $element.addClass("scaleUp");
    });

    // get the element to the left of current element
    var $nextElement = $element.next().attr("id");

    return $nextElement;
};

var leftFn = function(x, y) {
    // alert("in left function");
    // select current object in loop
    var $element = $("#" + x);
    // animate current object in loop
    $element.animate(animationObj, animationTime, function() {
        $element.addClass("scaleUp");
    });

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
            console.log("CURRENT STEP " + i);
            
            var topReturned;
            var rightReturned = [];
            var leftReturned = [];
            // console.log("in first level loop " + i);
        
                // console.log("-------------------------------------------");
                // console.log("in second level loop " + i);
                for(var t = 0; t < top.length; t++) {
                    // console.log("-------------------------------------------");
                    // console.log("   in top loop " + t);
                    var currentTop = $("#" + top[t]).attr("id");
                    topReturned = topFn(currentTop, top, left, right);
                    // console.log("   " + top);
                };
                for(var l = 0; l < left.length; l++) {
                    // console.log("-------------------------------------------");
                    // console.log("   in left loop " + l);
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
                    // console.log("-------------------------------------------");
                    // console.log("   in right loop " + r);
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
    var $this = $(this);
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

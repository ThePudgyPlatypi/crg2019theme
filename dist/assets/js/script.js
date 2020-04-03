/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ }),
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(6);


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _jquery = __webpack_require__(0);

var _jquery2 = _interopRequireDefault(_jquery);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

"use strict";

// FUNCTIONS
function moveFigcaptionIntoAnchor(container, wrapper, insert) {
    (0, _jquery2.default)(container).each(function () {
        var anchor = (0, _jquery2.default)(this).find(wrapper);
        var figcaption = (0, _jquery2.default)(this).find(insert);
        (0, _jquery2.default)(anchor).append(figcaption);
    });
}

function hiResVideoEnding(id, container, src, alt) {
    // Function to put image at the end of the main video so that it doesn't look as low resolution
    var video = document.getElementById(id);
    var alt2 = alt ? alt : alt = "End of video poster";

    if (video) {
        video.addEventListener("ended", function () {
            var $video = (0, _jquery2.default)(video);
            $video.fadeOut("slow");
            (0, _jquery2.default)(container).append("<img class='video-ended-poster' src='" + src + "' alt='" + alt2 + "'>").fadeIn("slow");
        });
    } else {
        console.log("video container not selected or not available, no image added");
    };
}

// function addUniqueIDCreator(element, prefix) {
//     // adding ID's to all image containers on product page for switching content
//     var container = document.getElementsByClassName(element);

//     for(var i = 0; i < container.length; i++) {
//         var $this = jQuery(container[i]);
//         $this.attr("id", prefix + i);
//     };
// }

//chunking function
function chunk(arr, len) {

    var chunks = [],
        i = 0,
        n = arr.length;

    while (i < n) {
        chunks.push(arr.slice(i, i += len));
    }

    return chunks;
}

function chunkAndReorder(arr, col, flipBlock) {
    var _iteratorNormalCompletion = true;
    var _didIteratorError = false;
    var _iteratorError = undefined;

    try {
        for (var _iterator = arr[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
            var reset = _step.value;

            (0, _jquery2.default)(reset).find(flipBlock).each(function (index) {
                (0, _jquery2.default)(this).removeClass("reorder-1 reorder-2");
            });
        }
    } catch (err) {
        _didIteratorError = true;
        _iteratorError = err;
    } finally {
        try {
            if (!_iteratorNormalCompletion && _iterator.return) {
                _iterator.return();
            }
        } finally {
            if (_didIteratorError) {
                throw _iteratorError;
            }
        }
    }

    var threeArray = chunk(arr, col);
    for (var i = 0; i < threeArray.length; i++) {
        if (i % 2 !== 0) {
            var _iteratorNormalCompletion2 = true;
            var _didIteratorError2 = false;
            var _iteratorError2 = undefined;

            try {
                for (var _iterator2 = threeArray[i][Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
                    var change = _step2.value;

                    (0, _jquery2.default)(change).find(flipBlock).last().addClass("reorder-1");
                    (0, _jquery2.default)(change).find(flipBlock).first().addClass("reorder-2");
                }
            } catch (err) {
                _didIteratorError2 = true;
                _iteratorError2 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion2 && _iterator2.return) {
                        _iterator2.return();
                    }
                } finally {
                    if (_didIteratorError2) {
                        throw _iteratorError2;
                    }
                }
            }
        }
    }
}

//add classes to news page to flip text from right to left at different screen sizes
function newsBlockFlip(container, block) {
    var flipContainer = (0, _jquery2.default)(container);
    var flipBlock = (0, _jquery2.default)(block);
    var width = (0, _jquery2.default)(window).width();
    var widths = {
        medium: 640,
        middle: 840,
        large: 1024,
        xlarge: 1200,
        xxlarge: 1440
    };

    var switcher = function switcher() {
        if (width > widths.xxlarge) {
            chunkAndReorder(flipContainer, 3, flipBlock);
        } else if (width > widths.large && width < widths.xxlarge) {
            chunkAndReorder(flipContainer, 2, flipBlock);
        } else if (width > widths.medium && width < widths.large) {
            chunkAndReorder(flipContainer, 1, flipBlock);
        } else {
            var _iteratorNormalCompletion3 = true;
            var _didIteratorError3 = false;
            var _iteratorError3 = undefined;

            try {
                for (var _iterator3 = flipContainer[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
                    var reset = _step3.value;

                    (0, _jquery2.default)(reset).find(flipBlock).each(function (index) {
                        (0, _jquery2.default)(this).removeClass("reorder-1 reorder-2");
                    });
                }
            } catch (err) {
                _didIteratorError3 = true;
                _iteratorError3 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion3 && _iterator3.return) {
                        _iterator3.return();
                    }
                } finally {
                    if (_didIteratorError3) {
                        throw _iteratorError3;
                    }
                }
            }
        }
    };

    (0, _jquery2.default)(window).resize(function () {
        width = (0, _jquery2.default)(window).width();
        switcher();
    });

    switcher();
}

function animationEvent(animationClass) {
    // Cache all animated elements
    var $animation_elements = (0, _jquery2.default)(animationClass);
    // var $animation_elements_quick = $('.animation-element-quick');
    var $window = (0, _jquery2.default)(window);
    var $window_width = $window.width();

    // actual function to check if in view
    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = window_top_position + window_height;

        _jquery2.default.each($animation_elements, function () {
            var $element = (0, _jquery2.default)(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = element_top_position + element_height;

            element_top_position = element_top_position - 150 + window_height / 8;
            element_bottom_position = element_bottom_position - window_height / 8;

            //check to see if this current container is within viewport
            if ($window_width > 430) {
                if (element_bottom_position >= window_top_position && element_top_position <= window_bottom_position) {
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
    if ($window.width() > 430) {
        $window.on('scroll resize', check_if_in_view);
        // Initial trigger method to fire a scroll even as soon as the window loads just in case there are things on
        // the first page to animate
        $window.trigger('scroll');
    } else {
        check_if_in_view();
    };
}

function accordianPushOut() {
    //hide all panels
    var panels = (0, _jquery2.default)(".partner-desc").hide();

    // trigger the event
    (0, _jquery2.default)('.hover-card-activator').click(function (e) {
        //prevent any default actions of the event
        e.preventDefault();

        // wrap event(this) in a jQuery Object
        var $this = (0, _jquery2.default)(this);
        // this is to make it easier to change if structure of html changes
        // also easier to read
        var $thisPanel = $this.next();
        console.log($thisPanel);

        // conditional statement to check it current panels(or whatever) has open class
        // open class is something that is being added dynamically and not hard coded
        if ($thisPanel.hasClass('open')) {
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
}

function msieversion() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer, return version number
        {
            alert("This site has not been optimized for Internet Explorer 11 and below. Please open in Chrome, Firefox, Safari, or Edge.");
        }

    return false;
}

(0, _jquery2.default)(document).ready(function ($) {
    // detect IE and try to warn them the site does not support IE11 and below
    msieversion();

    var currentLocation = window.location.pathname;

    if (sessionStorage.getItem('newsletterPopup') === null && (currentLocation.includes("news") || currentLocation.includes("database") || currentLocation.includes("crg_post") || currentLocation.includes("resources"))) {
        setTimeout(function () {
            $("#newsletter").foundation('open');
            sessionStorage.setItem('newsletterPopup', true);
        }, 10000);
    };

    // make page visible once all is loaded
    $("html").css({ opacity: 0, visibility: "visible" }).animate({ opacity: 1 }, 500);

    moveFigcaptionIntoAnchor(".blocks-gallery-item", "a", "figcaption");

    hiResVideoEnding("myVideo", "#header-video-container", "wp-content/themes/CRG_2019v2/dist/assets/images/HeaderMoviePoster.jpg");

    newsBlockFlip(".post-grid-block-inside", ".post-grid-block-inside-cell");

    animationEvent('.animation-element');

    accordianPushOut();

    // Colored slide up thing on news page
    var colorArray = ["#23408a", "#8a6d23", "#408a23", "#6d238a", "#989898", "#23408a", "#ffc52a", "#3adb76", "#ffae00", "#cc4b37"];

    $(".cover-link").hover(function () {
        var overlay = $(this).siblings(".post-grid-block-inside-cell").children(".entry-media").children(".overlay");
        if ($(overlay).is(":hidden")) {
            $(overlay).css("background", colorArray[Math.floor(Math.random() * 10)]).fadeIn(200);
        }
    }, function () {
        var overlay = $(this).siblings(".post-grid-block-inside-cell").children(".entry-media").children(".overlay");
        if ($(overlay).is(":visible")) {
            $(overlay).fadeOut(200);
        }
    });

    $(".resource-grid-block .post-grid-block-inside-cell").each(function (index) {
        if (index > 9) {
            index = index - 9;
        };

        $(this).css("border", "1px solid " + colorArray[index]);
        $(this).children(".entry-inner").css("color", "" + colorArray[index]);
    });

    $(".resource-grid-block .background").each(function (index) {
        $(this).css("background", colorArray[index]);
    });

    // wrap iframes and video embeds with flex video
    $(".format-video iframe, .format-video figure.wp-block-video, .format-video video").wrap("<div class='flex-video widescreen'></div>");
});

/***/ })
/******/ ]);
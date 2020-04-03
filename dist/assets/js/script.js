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

    hiResVideoEnding("myVideo", "#header-video-container", "wp-content/themes/CRG_2019/dist/assets/images/HeaderMoviePoster.jpg");

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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgZjU5N2I0NGViNjg5OWZiNjYzYTQiLCJ3ZWJwYWNrOi8vL2V4dGVybmFsIFwialF1ZXJ5XCIiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9zY3JpcHQuanMiXSwibmFtZXMiOlsibW92ZUZpZ2NhcHRpb25JbnRvQW5jaG9yIiwiY29udGFpbmVyIiwid3JhcHBlciIsImluc2VydCIsImVhY2giLCJhbmNob3IiLCJmaW5kIiwiZmlnY2FwdGlvbiIsImFwcGVuZCIsImhpUmVzVmlkZW9FbmRpbmciLCJpZCIsInNyYyIsImFsdCIsInZpZGVvIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImFsdDIiLCJhZGRFdmVudExpc3RlbmVyIiwiJHZpZGVvIiwiZmFkZU91dCIsImZhZGVJbiIsImNvbnNvbGUiLCJsb2ciLCJjaHVuayIsImFyciIsImxlbiIsImNodW5rcyIsImkiLCJuIiwibGVuZ3RoIiwicHVzaCIsInNsaWNlIiwiY2h1bmtBbmRSZW9yZGVyIiwiY29sIiwiZmxpcEJsb2NrIiwicmVzZXQiLCJpbmRleCIsInJlbW92ZUNsYXNzIiwidGhyZWVBcnJheSIsImNoYW5nZSIsImxhc3QiLCJhZGRDbGFzcyIsImZpcnN0IiwibmV3c0Jsb2NrRmxpcCIsImJsb2NrIiwiZmxpcENvbnRhaW5lciIsIndpZHRoIiwid2luZG93Iiwid2lkdGhzIiwibWVkaXVtIiwibWlkZGxlIiwibGFyZ2UiLCJ4bGFyZ2UiLCJ4eGxhcmdlIiwic3dpdGNoZXIiLCJyZXNpemUiLCJhbmltYXRpb25FdmVudCIsImFuaW1hdGlvbkNsYXNzIiwiJGFuaW1hdGlvbl9lbGVtZW50cyIsIiR3aW5kb3ciLCIkd2luZG93X3dpZHRoIiwiY2hlY2tfaWZfaW5fdmlldyIsIndpbmRvd19oZWlnaHQiLCJoZWlnaHQiLCJ3aW5kb3dfdG9wX3Bvc2l0aW9uIiwic2Nyb2xsVG9wIiwid2luZG93X2JvdHRvbV9wb3NpdGlvbiIsIiQiLCIkZWxlbWVudCIsImVsZW1lbnRfaGVpZ2h0Iiwib3V0ZXJIZWlnaHQiLCJlbGVtZW50X3RvcF9wb3NpdGlvbiIsIm9mZnNldCIsInRvcCIsImVsZW1lbnRfYm90dG9tX3Bvc2l0aW9uIiwib24iLCJ0cmlnZ2VyIiwiYWNjb3JkaWFuUHVzaE91dCIsInBhbmVscyIsImhpZGUiLCJjbGljayIsImUiLCJwcmV2ZW50RGVmYXVsdCIsIiR0aGlzIiwiJHRoaXNQYW5lbCIsIm5leHQiLCJoYXNDbGFzcyIsInNsaWRlVXAiLCJzbGlkZURvd24iLCJub3QiLCJtc2lldmVyc2lvbiIsInVhIiwibmF2aWdhdG9yIiwidXNlckFnZW50IiwibXNpZSIsImluZGV4T2YiLCJtYXRjaCIsImFsZXJ0IiwicmVhZHkiLCJjdXJyZW50TG9jYXRpb24iLCJsb2NhdGlvbiIsInBhdGhuYW1lIiwic2Vzc2lvblN0b3JhZ2UiLCJnZXRJdGVtIiwiaW5jbHVkZXMiLCJzZXRUaW1lb3V0IiwiZm91bmRhdGlvbiIsInNldEl0ZW0iLCJjc3MiLCJvcGFjaXR5IiwidmlzaWJpbGl0eSIsImFuaW1hdGUiLCJjb2xvckFycmF5IiwiaG92ZXIiLCJvdmVybGF5Iiwic2libGluZ3MiLCJjaGlsZHJlbiIsImlzIiwiTWF0aCIsImZsb29yIiwicmFuZG9tIiwid3JhcCJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtBQUNB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UixDQUFZLFFBQVosaUJBQW1DSSxXQUFXNUUsS0FBWCxDQUFuQztBQUNBK0IsVUFBRSxJQUFGLEVBQVFpRCxRQUFSLENBQWlCLGNBQWpCLEVBQWlDUixHQUFqQyxDQUFxQyxPQUFyQyxPQUFpREksV0FBVzVFLEtBQVgsQ0FBakQ7QUFDSCxLQVBEOztBQVNBK0IsTUFBRSxrQ0FBRixFQUFzQy9ELElBQXRDLENBQTJDLFVBQVNnQyxLQUFULEVBQWdCO0FBQ3ZEK0IsVUFBRSxJQUFGLEVBQVF5QyxHQUFSLENBQVksWUFBWixFQUEwQkksV0FBVzVFLEtBQVgsQ0FBMUI7QUFDSCxLQUZEOztBQUlBO0FBQ0ErQixNQUFFLGdGQUFGLEVBQW9Gc0QsSUFBcEYsQ0FBeUYsMkNBQXpGO0FBRUgsQ0FwRUQsRSIsImZpbGUiOiJzY3JpcHQuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSA1KTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCBmNTk3YjQ0ZWI2ODk5ZmI2NjNhNCIsIm1vZHVsZS5leHBvcnRzID0galF1ZXJ5O1xuXG5cbi8vLy8vLy8vLy8vLy8vLy8vL1xuLy8gV0VCUEFDSyBGT09URVJcbi8vIGV4dGVybmFsIFwialF1ZXJ5XCJcbi8vIG1vZHVsZSBpZCA9IDBcbi8vIG1vZHVsZSBjaHVua3MgPSAwIDEiLCJpbXBvcnQgJCBmcm9tICdqcXVlcnknO1xuXCJ1c2Ugc3RyaWN0XCI7XG5cbi8vIEZVTkNUSU9OU1xuZnVuY3Rpb24gbW92ZUZpZ2NhcHRpb25JbnRvQW5jaG9yKGNvbnRhaW5lciwgd3JhcHBlciwgaW5zZXJ0KSB7XG4gICAgJChjb250YWluZXIpLmVhY2goZnVuY3Rpb24oKSB7XG4gICAgICAgIGxldCBhbmNob3IgPSAkKHRoaXMpLmZpbmQod3JhcHBlcik7XG4gICAgICAgIGxldCBmaWdjYXB0aW9uID0gJCh0aGlzKS5maW5kKGluc2VydCk7XG4gICAgICAgICQoYW5jaG9yKS5hcHBlbmQoZmlnY2FwdGlvbik7XG4gICAgfSk7XG59XG5cbmZ1bmN0aW9uIGhpUmVzVmlkZW9FbmRpbmcoaWQsIGNvbnRhaW5lciwgc3JjLCBhbHQpIHtcbiAgICAvLyBGdW5jdGlvbiB0byBwdXQgaW1hZ2UgYXQgdGhlIGVuZCBvZiB0aGUgbWFpbiB2aWRlbyBzbyB0aGF0IGl0IGRvZXNuJ3QgbG9vayBhcyBsb3cgcmVzb2x1dGlvblxuICAgIGxldCB2aWRlbyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGlkKTtcbiAgICBsZXQgYWx0MiA9IGFsdCA/IGFsdCA6IGFsdCA9IFwiRW5kIG9mIHZpZGVvIHBvc3RlclwiO1xuXG4gICAgaWYodmlkZW8pIHtcbiAgICAgICAgdmlkZW8uYWRkRXZlbnRMaXN0ZW5lcihcImVuZGVkXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgdmFyICR2aWRlbyA9ICQodmlkZW8pO1xuICAgICAgICAgICAgJHZpZGVvLmZhZGVPdXQoXCJzbG93XCIpO1xuICAgICAgICAgICAgJChjb250YWluZXIpLmFwcGVuZChgPGltZyBjbGFzcz0ndmlkZW8tZW5kZWQtcG9zdGVyJyBzcmM9JyR7c3JjfScgYWx0PScke2FsdDJ9Jz5gKS5mYWRlSW4oXCJzbG93XCIpO1xuICAgICAgICB9KTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBjb25zb2xlLmxvZyhcInZpZGVvIGNvbnRhaW5lciBub3Qgc2VsZWN0ZWQgb3Igbm90IGF2YWlsYWJsZSwgbm8gaW1hZ2UgYWRkZWRcIik7XG4gICAgfTtcbn1cblxuLy8gZnVuY3Rpb24gYWRkVW5pcXVlSURDcmVhdG9yKGVsZW1lbnQsIHByZWZpeCkge1xuLy8gICAgIC8vIGFkZGluZyBJRCdzIHRvIGFsbCBpbWFnZSBjb250YWluZXJzIG9uIHByb2R1Y3QgcGFnZSBmb3Igc3dpdGNoaW5nIGNvbnRlbnRcbi8vICAgICB2YXIgY29udGFpbmVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShlbGVtZW50KTtcbiBcbi8vICAgICBmb3IodmFyIGkgPSAwOyBpIDwgY29udGFpbmVyLmxlbmd0aDsgaSsrKSB7XG4vLyAgICAgICAgIHZhciAkdGhpcyA9IGpRdWVyeShjb250YWluZXJbaV0pO1xuLy8gICAgICAgICAkdGhpcy5hdHRyKFwiaWRcIiwgcHJlZml4ICsgaSk7XG4vLyAgICAgfTtcbi8vIH1cblxuLy9jaHVua2luZyBmdW5jdGlvblxuZnVuY3Rpb24gY2h1bmsgKGFyciwgbGVuKSB7XG5cbiAgICB2YXIgY2h1bmtzID0gW10sXG4gICAgICAgIGkgPSAwLFxuICAgICAgICBuID0gYXJyLmxlbmd0aDtcbiAgXG4gICAgd2hpbGUgKGkgPCBuKSB7XG4gICAgICBjaHVua3MucHVzaChhcnIuc2xpY2UoaSwgaSArPSBsZW4pKTtcbiAgICB9XG4gIFxuICAgIHJldHVybiBjaHVua3M7XG59XG5cbmZ1bmN0aW9uIGNodW5rQW5kUmVvcmRlcihhcnIsIGNvbCwgZmxpcEJsb2NrKSB7XG4gICAgZm9yKGxldCByZXNldCBvZiBhcnIpIHtcbiAgICAgICAgJChyZXNldCkuZmluZChmbGlwQmxvY2spLmVhY2goZnVuY3Rpb24oaW5kZXgpIHtcbiAgICAgICAgICAgICQodGhpcykucmVtb3ZlQ2xhc3MoXCJyZW9yZGVyLTEgcmVvcmRlci0yXCIpO1xuICAgICAgICB9KVxuICAgIH1cbiAgICBsZXQgdGhyZWVBcnJheSA9IGNodW5rKGFyciwgY29sKTtcbiAgICBmb3IobGV0IGkgPSAwOyBpIDwgdGhyZWVBcnJheS5sZW5ndGg7IGkrKykge1xuICAgICAgICBpZihpICUgMiAhPT0gMCkge1xuICAgICAgICAgICAgZm9yKGxldCBjaGFuZ2Ugb2YgdGhyZWVBcnJheVtpXSkge1xuICAgICAgICAgICAgICAgICQoY2hhbmdlKS5maW5kKGZsaXBCbG9jaykubGFzdCgpLmFkZENsYXNzKFwicmVvcmRlci0xXCIpO1xuICAgICAgICAgICAgICAgICQoY2hhbmdlKS5maW5kKGZsaXBCbG9jaykuZmlyc3QoKS5hZGRDbGFzcyhcInJlb3JkZXItMlwiKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cbn1cblxuLy9hZGQgY2xhc3NlcyB0byBuZXdzIHBhZ2UgdG8gZmxpcCB0ZXh0IGZyb20gcmlnaHQgdG8gbGVmdCBhdCBkaWZmZXJlbnQgc2NyZWVuIHNpemVzXG5mdW5jdGlvbiBuZXdzQmxvY2tGbGlwKGNvbnRhaW5lciwgYmxvY2spIHtcbiAgICBsZXQgZmxpcENvbnRhaW5lciA9ICQoY29udGFpbmVyKTtcbiAgICBsZXQgZmxpcEJsb2NrID0gJChibG9jayk7XG4gICAgbGV0IHdpZHRoID0gJCh3aW5kb3cpLndpZHRoKCk7XG4gICAgbGV0IHdpZHRocyA9IHtcbiAgICAgICAgbWVkaXVtOiA2NDAsXG4gICAgICAgIG1pZGRsZTogODQwLFxuICAgICAgICBsYXJnZTogMTAyNCxcbiAgICAgICAgeGxhcmdlOiAxMjAwLFxuICAgICAgICB4eGxhcmdlOiAxNDQwLFxuICAgIH07XG5cbiAgICBsZXQgc3dpdGNoZXIgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgaWYod2lkdGggPiB3aWR0aHMueHhsYXJnZSkge1xuICAgICAgICAgICAgY2h1bmtBbmRSZW9yZGVyKGZsaXBDb250YWluZXIsIDMsIGZsaXBCbG9jayk7XG4gICAgICAgIH0gZWxzZSBpZiAod2lkdGggPiB3aWR0aHMubGFyZ2UgJiYgd2lkdGggPCB3aWR0aHMueHhsYXJnZSkge1xuICAgICAgICAgICAgY2h1bmtBbmRSZW9yZGVyKGZsaXBDb250YWluZXIsIDIsIGZsaXBCbG9jayk7XG4gICAgICAgIH0gZWxzZSBpZiAod2lkdGggPiB3aWR0aHMubWVkaXVtICYmIHdpZHRoIDwgd2lkdGhzLmxhcmdlKSB7XG4gICAgICAgICAgICBjaHVua0FuZFJlb3JkZXIoZmxpcENvbnRhaW5lciwgMSwgZmxpcEJsb2NrKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGZvcihsZXQgcmVzZXQgb2YgZmxpcENvbnRhaW5lcikge1xuICAgICAgICAgICAgICAgICQocmVzZXQpLmZpbmQoZmxpcEJsb2NrKS5lYWNoKGZ1bmN0aW9uKGluZGV4KSB7XG4gICAgICAgICAgICAgICAgICAgICQodGhpcykucmVtb3ZlQ2xhc3MoXCJyZW9yZGVyLTEgcmVvcmRlci0yXCIpO1xuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9O1xuXG4gICAgJCh3aW5kb3cpLnJlc2l6ZShmdW5jdGlvbigpIHtcbiAgICAgICAgd2lkdGggPSAkKHdpbmRvdykud2lkdGgoKTtcbiAgICAgICAgc3dpdGNoZXIoKTtcbiAgICB9KTtcblxuICAgIHN3aXRjaGVyKCk7XG59XG5cbmZ1bmN0aW9uIGFuaW1hdGlvbkV2ZW50KGFuaW1hdGlvbkNsYXNzKSB7XG4gICAgLy8gQ2FjaGUgYWxsIGFuaW1hdGVkIGVsZW1lbnRzXG4gICAgdmFyICRhbmltYXRpb25fZWxlbWVudHMgPSAkKGFuaW1hdGlvbkNsYXNzKTtcbiAgICAvLyB2YXIgJGFuaW1hdGlvbl9lbGVtZW50c19xdWljayA9ICQoJy5hbmltYXRpb24tZWxlbWVudC1xdWljaycpO1xuICAgIHZhciAkd2luZG93ID0gJCh3aW5kb3cpO1xuICAgIHZhciAkd2luZG93X3dpZHRoID0gJHdpbmRvdy53aWR0aCgpO1xuXG4gICAgLy8gYWN0dWFsIGZ1bmN0aW9uIHRvIGNoZWNrIGlmIGluIHZpZXdcbiAgICBmdW5jdGlvbiBjaGVja19pZl9pbl92aWV3KCkge1xuICAgICAgICB2YXIgd2luZG93X2hlaWdodCA9ICR3aW5kb3cuaGVpZ2h0KCk7XG4gICAgICAgIHZhciB3aW5kb3dfdG9wX3Bvc2l0aW9uID0gJHdpbmRvdy5zY3JvbGxUb3AoKTtcbiAgICAgICAgdmFyIHdpbmRvd19ib3R0b21fcG9zaXRpb24gPSAod2luZG93X3RvcF9wb3NpdGlvbiArIHdpbmRvd19oZWlnaHQpO1xuICAgICAgIFxuICAgICAgICAkLmVhY2goJGFuaW1hdGlvbl9lbGVtZW50cywgZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICB2YXIgJGVsZW1lbnQgPSAkKHRoaXMpO1xuICAgICAgICAgICAgdmFyIGVsZW1lbnRfaGVpZ2h0ID0gJGVsZW1lbnQub3V0ZXJIZWlnaHQoKTtcbiAgICAgICAgICAgIHZhciBlbGVtZW50X3RvcF9wb3NpdGlvbiA9ICRlbGVtZW50Lm9mZnNldCgpLnRvcDtcbiAgICAgICAgICAgIHZhciBlbGVtZW50X2JvdHRvbV9wb3NpdGlvbiA9IChlbGVtZW50X3RvcF9wb3NpdGlvbiArIGVsZW1lbnRfaGVpZ2h0KTtcbiAgICAgICAgICAgIFxuICAgICAgICAgICAgZWxlbWVudF90b3BfcG9zaXRpb24gPSAoZWxlbWVudF90b3BfcG9zaXRpb24gLSAxNTApICsgKHdpbmRvd19oZWlnaHQgLyA4KTtcbiAgICAgICAgICAgIGVsZW1lbnRfYm90dG9tX3Bvc2l0aW9uID0gZWxlbWVudF9ib3R0b21fcG9zaXRpb24gLSAod2luZG93X2hlaWdodCAvIDgpO1xuXG4gICAgICAgICAgICAvL2NoZWNrIHRvIHNlZSBpZiB0aGlzIGN1cnJlbnQgY29udGFpbmVyIGlzIHdpdGhpbiB2aWV3cG9ydFxuICAgICAgICAgICAgaWYoJHdpbmRvd193aWR0aCA+IDQzMCkge1xuICAgICAgICAgICAgICAgIGlmICgoZWxlbWVudF9ib3R0b21fcG9zaXRpb24gPj0gd2luZG93X3RvcF9wb3NpdGlvbikgJiZcbiAgICAgICAgICAgICAgICAgICAgKGVsZW1lbnRfdG9wX3Bvc2l0aW9uIDw9IHdpbmRvd19ib3R0b21fcG9zaXRpb24pKSB7XG4gICAgICAgICAgICAgICAgICAgICRlbGVtZW50LmFkZENsYXNzKCdpbi12aWV3Jyk7XG4gICAgICAgICAgICAgICAgICAgIC8vIGNvbnNvbGUubG9nKCRlbGVtZW50KTtcbiAgICAgICAgICAgICAgICB9IFxuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAkZWxlbWVudC5hZGRDbGFzcygnaW4tdmlldycpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcblxuICAgICAgICAvLyAkLmVhY2goJGFuaW1hdGlvbl9lbGVtZW50c19xdWljaywgZnVuY3Rpb24oKSB7XG4gICAgICAgIC8vICAgICB2YXIgJGVsZW1lbnQgPSAkKHRoaXMpO1xuICAgICAgICAvLyAgICAgdmFyIGVsZW1lbnRfaGVpZ2h0ID0gJGVsZW1lbnQub3V0ZXJIZWlnaHQoKTtcbiAgICAgICAgLy8gICAgIHZhciBlbGVtZW50X3RvcF9wb3NpdGlvbiA9ICRlbGVtZW50Lm9mZnNldCgpLnRvcDtcbiAgICAgICAgLy8gICAgIHZhciBlbGVtZW50X2JvdHRvbV9wb3NpdGlvbiA9IChlbGVtZW50X3RvcF9wb3NpdGlvbiArIGVsZW1lbnRfaGVpZ2h0KTtcblxuICAgICAgICAvLyAgICAgLy9jaGVjayB0byBzZWUgaWYgdGhpcyBjdXJyZW50IGNvbnRhaW5lciBpcyB3aXRoaW4gdmlld3BvcnRcbiAgICAgICAgLy8gICAgIGlmICgoZWxlbWVudF9ib3R0b21fcG9zaXRpb24gPj0gd2luZG93X3RvcF9wb3NpdGlvbikgJiZcbiAgICAgICAgLy8gICAgICAgICAoZWxlbWVudF90b3BfcG9zaXRpb24gPD0gd2luZG93X2JvdHRvbV9wb3NpdGlvbikpIHtcbiAgICAgICAgLy8gICAgICAgICAkZWxlbWVudC5hZGRDbGFzcygnaW4tdmlldycpO1xuICAgICAgICAvLyAgICAgICAgIC8vIGNvbnNvbGUubG9nKCRlbGVtZW50KTtcbiAgICAgICAgLy8gICAgIH0gXG4gICAgICAgIC8vIH0pO1xuICAgIH1cblxuICAgIC8vIEdyYWIgc2Nyb2xsIGFuZCByZXNpemUgZXZlbnQgd2l0aCBjYWxsYmFjayB0byBpbl92aWV3IGZ1bmN0aW9uXG4gICAgaWYoJHdpbmRvdy53aWR0aCgpID4gNDMwKSB7XG4gICAgICAgICR3aW5kb3cub24oJ3Njcm9sbCByZXNpemUnLCBjaGVja19pZl9pbl92aWV3KTtcbiAgICAgICAgLy8gSW5pdGlhbCB0cmlnZ2VyIG1ldGhvZCB0byBmaXJlIGEgc2Nyb2xsIGV2ZW4gYXMgc29vbiBhcyB0aGUgd2luZG93IGxvYWRzIGp1c3QgaW4gY2FzZSB0aGVyZSBhcmUgdGhpbmdzIG9uXG4gICAgICAgIC8vIHRoZSBmaXJzdCBwYWdlIHRvIGFuaW1hdGVcbiAgICAgICAgJHdpbmRvdy50cmlnZ2VyKCdzY3JvbGwnKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBjaGVja19pZl9pbl92aWV3KCk7XG4gICAgfTtcbn1cblxuZnVuY3Rpb24gYWNjb3JkaWFuUHVzaE91dCgpIHtcbiAgICAvL2hpZGUgYWxsIHBhbmVsc1xuICAgIHZhciBwYW5lbHMgPSAkKFwiLnBhcnRuZXItZGVzY1wiKS5oaWRlKCk7XG5cbiAgICAvLyB0cmlnZ2VyIHRoZSBldmVudFxuICAgICQoJy5ob3Zlci1jYXJkLWFjdGl2YXRvcicpLmNsaWNrKGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgLy9wcmV2ZW50IGFueSBkZWZhdWx0IGFjdGlvbnMgb2YgdGhlIGV2ZW50XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICBcbiAgICAgICAgLy8gd3JhcCBldmVudCh0aGlzKSBpbiBhIGpRdWVyeSBPYmplY3RcbiAgICAgICAgdmFyICR0aGlzID0gJCh0aGlzKTtcbiAgICAgICAgLy8gdGhpcyBpcyB0byBtYWtlIGl0IGVhc2llciB0byBjaGFuZ2UgaWYgc3RydWN0dXJlIG9mIGh0bWwgY2hhbmdlc1xuICAgICAgICAvLyBhbHNvIGVhc2llciB0byByZWFkXG4gICAgICAgIHZhciAkdGhpc1BhbmVsID0gJHRoaXMubmV4dCgpO1xuICAgICAgICBjb25zb2xlLmxvZygkdGhpc1BhbmVsKTtcbiAgICAgICAgXG4gICAgICAgIC8vIGNvbmRpdGlvbmFsIHN0YXRlbWVudCB0byBjaGVjayBpdCBjdXJyZW50IHBhbmVscyhvciB3aGF0ZXZlcikgaGFzIG9wZW4gY2xhc3NcbiAgICAgICAgLy8gb3BlbiBjbGFzcyBpcyBzb21ldGhpbmcgdGhhdCBpcyBiZWluZyBhZGRlZCBkeW5hbWljYWxseSBhbmQgbm90IGhhcmQgY29kZWRcbiAgICAgICAgaWYoJHRoaXNQYW5lbC5oYXNDbGFzcygnb3BlbicpKSB7XG4gICAgICAgICAgICAvLyBpZiB0aGUgY3VycmVudCBwYW5lbCB0aGF0IHdhcyBjbGlja2VkIG9uIGhhcyBvcGVuIGNsYXNzXG4gICAgICAgICAgICAvLyB0aGVuIGNsb3NlKHNsaWRlKSB1cCB0aGlzIHBhbmVsIGFuZCByZW1vdmUgdGhlIGNsYXNzXG4gICAgICAgICAgICAkdGhpc1BhbmVsLnNsaWRlVXAoKS5yZW1vdmVDbGFzcygnb3BlbicpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgLy8gaWYgdGhlIGNsYXNzIG9wZW4gSVMgTk9UIHByZXNlbnQgb24gdGhlIGVsZW1lbnQgd2UgY2xpY2tlZCBvbiB0aGVuIGFkZCB0aGUgY2xhc3NcbiAgICAgICAgICAgIC8vIHRoZW4gb3BlbiAoc2xpZGUpIHRoZSBwYW5lbC5cbiAgICAgICAgICAgICR0aGlzUGFuZWwuYWRkQ2xhc3MoJ29wZW4nKS5zbGlkZURvd24oKTtcbiAgICAgICAgICAgIC8vIHRoaXMgaXMgdGhlIG1hZ2ljLCBnbyB0aHJ1IHBhbmVscyAod2hpY2ggaXMgYW4gYXJyYXkgb2YgZWxlbWVudHMgZGVjbGFyZWQgZWFybGllcilcbiAgICAgICAgICAgIC8vIGFuZCByZW1vdmUgdGhlIG9wZW4gY2xhc3MgYW5kIGNsb3NlKHNsaWRlKSB0aGVtIHVwLCBidXQgTk9UIHRoaXMgcGFuZWwsIHRoZSBwYW5lbCB0aGF0IHRyaWdnZXJlZCB0aGUgZXZlbnRcbiAgICAgICAgICAgIHBhbmVscy5ub3QoJHRoaXNQYW5lbCkucmVtb3ZlQ2xhc3MoJ29wZW4nKS5zbGlkZVVwKCk7XG4gICAgICAgIH07XG4gIH0pO1xufVxuXG5mdW5jdGlvbiBtc2lldmVyc2lvbigpIHtcblxuICAgIHZhciB1YSA9IHdpbmRvdy5uYXZpZ2F0b3IudXNlckFnZW50O1xuICAgIHZhciBtc2llID0gdWEuaW5kZXhPZihcIk1TSUUgXCIpO1xuXG4gICAgaWYgKG1zaWUgPiAwIHx8ICEhbmF2aWdhdG9yLnVzZXJBZ2VudC5tYXRjaCgvVHJpZGVudC4qcnZcXDoxMVxcLi8pKSAgLy8gSWYgSW50ZXJuZXQgRXhwbG9yZXIsIHJldHVybiB2ZXJzaW9uIG51bWJlclxuICAgIHtcbiAgICAgICAgYWxlcnQoXCJUaGlzIHNpdGUgaGFzIG5vdCBiZWVuIG9wdGltaXplZCBmb3IgSW50ZXJuZXQgRXhwbG9yZXIgMTEgYW5kIGJlbG93LiBQbGVhc2Ugb3BlbiBpbiBDaHJvbWUsIEZpcmVmb3gsIFNhZmFyaSwgb3IgRWRnZS5cIik7XG4gICAgfVxuXG4gICAgcmV0dXJuIGZhbHNlO1xufVxuXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigkKSB7XG4gICAgLy8gZGV0ZWN0IElFIGFuZCB0cnkgdG8gd2FybiB0aGVtIHRoZSBzaXRlIGRvZXMgbm90IHN1cHBvcnQgSUUxMSBhbmQgYmVsb3dcbiAgICBtc2lldmVyc2lvbigpO1xuXG4gICAgbGV0IGN1cnJlbnRMb2NhdGlvbiA9ICB3aW5kb3cubG9jYXRpb24ucGF0aG5hbWU7XG5cbiAgICBpZihzZXNzaW9uU3RvcmFnZS5nZXRJdGVtKCduZXdzbGV0dGVyUG9wdXAnKSA9PT0gbnVsbCAmJiAoY3VycmVudExvY2F0aW9uLmluY2x1ZGVzKFwibmV3c1wiKSB8fCBjdXJyZW50TG9jYXRpb24uaW5jbHVkZXMoXCJkYXRhYmFzZVwiKSB8fCBjdXJyZW50TG9jYXRpb24uaW5jbHVkZXMoXCJjcmdfcG9zdFwiKSB8fCBjdXJyZW50TG9jYXRpb24uaW5jbHVkZXMoXCJyZXNvdXJjZXNcIikpKSB7XG4gICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICAkKFwiI25ld3NsZXR0ZXJcIikuZm91bmRhdGlvbignb3BlbicpO1xuICAgICAgICAgICAgc2Vzc2lvblN0b3JhZ2Uuc2V0SXRlbSgnbmV3c2xldHRlclBvcHVwJywgdHJ1ZSk7XG4gICAgICAgIH0sIDEwMDAwKTtcbiAgICB9O1xuXG4gICAgLy8gbWFrZSBwYWdlIHZpc2libGUgb25jZSBhbGwgaXMgbG9hZGVkXG4gICAgJChcImh0bWxcIikuY3NzKHtvcGFjaXR5OiAwLCB2aXNpYmlsaXR5OiBcInZpc2libGVcIn0pLmFuaW1hdGUoe29wYWNpdHk6IDF9LCA1MDApO1xuXG4gICAgbW92ZUZpZ2NhcHRpb25JbnRvQW5jaG9yKFwiLmJsb2Nrcy1nYWxsZXJ5LWl0ZW1cIiwgXCJhXCIsIFwiZmlnY2FwdGlvblwiKTtcblxuICAgIGhpUmVzVmlkZW9FbmRpbmcoXCJteVZpZGVvXCIsXCIjaGVhZGVyLXZpZGVvLWNvbnRhaW5lclwiLCBcIndwLWNvbnRlbnQvdGhlbWVzL0NSR18yMDE5L2Rpc3QvYXNzZXRzL2ltYWdlcy9IZWFkZXJNb3ZpZVBvc3Rlci5qcGdcIik7XG5cbiAgICBuZXdzQmxvY2tGbGlwKFwiLnBvc3QtZ3JpZC1ibG9jay1pbnNpZGVcIiwgXCIucG9zdC1ncmlkLWJsb2NrLWluc2lkZS1jZWxsXCIpO1xuXG4gICAgYW5pbWF0aW9uRXZlbnQoJy5hbmltYXRpb24tZWxlbWVudCcpO1xuXG4gICAgYWNjb3JkaWFuUHVzaE91dCgpO1xuXG4gICAgLy8gQ29sb3JlZCBzbGlkZSB1cCB0aGluZyBvbiBuZXdzIHBhZ2VcbiAgICBsZXQgY29sb3JBcnJheSA9IFtcbiAgICAgICAgXCIjMjM0MDhhXCIsXG4gICAgICAgIFwiIzhhNmQyM1wiLFxuICAgICAgICBcIiM0MDhhMjNcIixcbiAgICAgICAgXCIjNmQyMzhhXCIsIFxuICAgICAgICBcIiM5ODk4OThcIixcbiAgICAgICAgXCIjMjM0MDhhXCIsXG4gICAgICAgIFwiI2ZmYzUyYVwiLFxuICAgICAgICBcIiMzYWRiNzZcIixcbiAgICAgICAgXCIjZmZhZTAwXCIsXG4gICAgICAgIFwiI2NjNGIzN1wiXG4gICAgXTtcblxuICAgICQoXCIuY292ZXItbGlua1wiKS5ob3ZlcihmdW5jdGlvbigpIHtcbiAgICAgICAgbGV0IG92ZXJsYXkgPSAkKHRoaXMpLnNpYmxpbmdzKFwiLnBvc3QtZ3JpZC1ibG9jay1pbnNpZGUtY2VsbFwiKS5jaGlsZHJlbihcIi5lbnRyeS1tZWRpYVwiKS5jaGlsZHJlbihcIi5vdmVybGF5XCIpO1xuICAgICAgICBpZigkKG92ZXJsYXkpLmlzKFwiOmhpZGRlblwiKSkge1xuICAgICAgICAgICAgJChvdmVybGF5KS5jc3MoXCJiYWNrZ3JvdW5kXCIsIGNvbG9yQXJyYXlbTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogMTApXSkuZmFkZUluKDIwMCk7XG4gICAgICAgIH1cbiAgICB9LCBmdW5jdGlvbigpIHtcbiAgICAgICAgbGV0IG92ZXJsYXkgPSAkKHRoaXMpLnNpYmxpbmdzKFwiLnBvc3QtZ3JpZC1ibG9jay1pbnNpZGUtY2VsbFwiKS5jaGlsZHJlbihcIi5lbnRyeS1tZWRpYVwiKS5jaGlsZHJlbihcIi5vdmVybGF5XCIpO1xuICAgICAgICBpZigkKG92ZXJsYXkpLmlzKFwiOnZpc2libGVcIikpIHtcbiAgICAgICAgICAgICQob3ZlcmxheSkuZmFkZU91dCgyMDApO1xuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICAkKFwiLnJlc291cmNlLWdyaWQtYmxvY2sgLnBvc3QtZ3JpZC1ibG9jay1pbnNpZGUtY2VsbFwiKS5lYWNoKGZ1bmN0aW9uKGluZGV4KXtcbiAgICAgICAgaWYoaW5kZXggPiA5KSB7XG4gICAgICAgICAgICBpbmRleCA9IGluZGV4IC0gOTtcbiAgICAgICAgfTtcblxuICAgICAgICAkKHRoaXMpLmNzcyhcImJvcmRlclwiLCBgMXB4IHNvbGlkICR7Y29sb3JBcnJheVtpbmRleF19YCk7XG4gICAgICAgICQodGhpcykuY2hpbGRyZW4oXCIuZW50cnktaW5uZXJcIikuY3NzKFwiY29sb3JcIiwgYCR7Y29sb3JBcnJheVtpbmRleF19YCk7XG4gICAgfSk7XG5cbiAgICAkKFwiLnJlc291cmNlLWdyaWQtYmxvY2sgLmJhY2tncm91bmRcIikuZWFjaChmdW5jdGlvbihpbmRleCkge1xuICAgICAgICAkKHRoaXMpLmNzcyhcImJhY2tncm91bmRcIiwgY29sb3JBcnJheVtpbmRleF0pO1xuICAgIH0pO1xuXG4gICAgLy8gd3JhcCBpZnJhbWVzIGFuZCB2aWRlbyBlbWJlZHMgd2l0aCBmbGV4IHZpZGVvXG4gICAgJChcIi5mb3JtYXQtdmlkZW8gaWZyYW1lLCAuZm9ybWF0LXZpZGVvIGZpZ3VyZS53cC1ibG9jay12aWRlbywgLmZvcm1hdC12aWRlbyB2aWRlb1wiKS53cmFwKFwiPGRpdiBjbGFzcz0nZmxleC12aWRlbyB3aWRlc2NyZWVuJz48L2Rpdj5cIik7XG5cbn0pO1xuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3NyYy9hc3NldHMvanMvc2NyaXB0LmpzIl0sInNvdXJjZVJvb3QiOiIifQ==
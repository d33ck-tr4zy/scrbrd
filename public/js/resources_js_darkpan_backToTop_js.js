(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_darkpan_backToTop_js"],{

/***/ "./resources/js/darkpan/backToTop.js":
/*!*******************************************!*\
  !*** ./resources/js/darkpan/backToTop.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/**
 * Handling Back to top Button
 */
$(document).ready(function () {
  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });
});

/***/ })

}]);
//# sourceMappingURL=resources_js_darkpan_backToTop_js.js.map
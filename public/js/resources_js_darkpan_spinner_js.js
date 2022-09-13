(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_darkpan_spinner_js"],{

/***/ "./resources/js/darkpan/spinner.js":
/*!*****************************************!*\
  !*** ./resources/js/darkpan/spinner.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/**
 * Handling spinner
 */
$(document).ready(function () {
  "use strict"; // Spinner

  var spinner = function spinner() {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };

  spinner();
});

/***/ })

}]);
//# sourceMappingURL=resources_js_darkpan_spinner_js.js.map
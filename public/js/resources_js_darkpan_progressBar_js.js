(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_darkpan_progressBar_js"],{

/***/ "./resources/js/darkpan/progressBar.js":
/*!*********************************************!*\
  !*** ./resources/js/darkpan/progressBar.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
$(document).ready(function () {
  // Progress Bar
  $('.pg-bar').waypoint(function () {
    $('.progress .progress-bar').each(function () {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });
});

/***/ })

}]);
//# sourceMappingURL=resources_js_darkpan_progressBar_js.js.map
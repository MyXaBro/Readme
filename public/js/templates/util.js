/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/templates/util.js ***!
  \****************************************/
__webpack_require__.r(__webpack_exports__);
'use script';

(function () {
  var ESC_KEYCODE = 27;
  window.util = {
    isEscEvent: function isEscEvent(evt, cb) {
      if (evt.keyCode === ESC_KEYCODE) {
        cb();
      }
    },
    getScrollbarWidth: function getScrollbarWidth() {
      return window.innerWidth - document.documentElement.clientWidth;
    }
  };
})();
/******/ })()
;
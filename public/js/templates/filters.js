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
/*!*******************************************!*\
  !*** ./resources/js/templates/filters.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
'use script';

document.addEventListener('DOMContentLoaded', function () {
  (function () {
    var filters = document.querySelector('.filters');
    if (filters) {
      var filtersButtons = filters.querySelectorAll('.filters__button:not(.tabs__item)');
    }
    if (filtersButtons) {
      var filtersButtonActive = filters.querySelector('.filters__button--active');
      var onFiltersButtonClick = function onFiltersButtonClick(evt) {
        evt.preventDefault();
        if (evt.currentTarget !== filtersButtonActive) {
          filtersButtonActive.classList.remove('filters__button--active');
          evt.currentTarget.classList.add('filters__button--active');
          filtersButtonActive = evt.currentTarget;
        }
      };
      var addFiltersListener = function addFiltersListener(filtersButton) {
        filtersButton.addEventListener('click', onFiltersButtonClick);
      };
      for (var i = 0; i < filtersButtons.length; i++) {
        addFiltersListener(filtersButtons[i]);
      }
    }
  })();
});
/******/ })()
;
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
  !*** ./resources/js/templates/sorting.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
'use script';

(function () {
  var sorting = document.querySelector('.sorting');
  if (sorting) {
    var sortingLinks = sorting.querySelectorAll('.sorting__link');
    var sortingLinkActive = sorting.querySelector('.sorting__link--active');
    var onSortingItemClick = function onSortingItemClick(evt) {
      evt.preventDefault();
      if (evt.currentTarget === sortingLinkActive) {
        sortingLinkActive.classList.toggle('sorting__link--reverse');
      } else {
        sortingLinkActive.classList.remove('sorting__link--active');
        evt.currentTarget.classList.add('sorting__link--active');
        sortingLinkActive = evt.currentTarget;
      }
    };
    var addSortingListener = function addSortingListener(sortingItem) {
      sortingItem.addEventListener('click', onSortingItemClick);
    };
    for (var i = 0; i < sortingLinks.length; i++) {
      addSortingListener(sortingLinks[i]);
    }
  }
})();
/******/ })()
;
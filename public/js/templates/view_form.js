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
/*!*********************************************!*\
  !*** ./resources/js/templates/view_form.js ***!
  \*********************************************/
__webpack_require__.r(__webpack_exports__);
document.addEventListener('DOMContentLoaded', function () {
  var photoButton = document.querySelector('.filters__button--photo');
  var videoButton = document.querySelector('.filters__button--video');
  var textButton = document.querySelector('.filters__button--text');
  var quoteButton = document.querySelector('.filters__button--quote');
  var linkButton = document.querySelector('.filters__button--link');
  var photoForm = document.querySelector('#photo-form');
  var videoForm = document.querySelector('#video-form');
  var textForm = document.querySelector('#text-form');
  var quoteForm = document.querySelector('#quote-form');
  var linkForm = document.querySelector('#link-form');
  photoButton.addEventListener('click', function () {
    photoForm.classList.remove('visually-hidden');
    videoForm.classList.add('visually-hidden');
    textForm.classList.add('visually-hidden');
    quoteForm.classList.add('visually-hidden');
    linkForm.classList.add('visually-hidden');
  });
  videoButton.addEventListener('click', function () {
    videoForm.classList.remove('visually-hidden');
    textForm.classList.add('visually-hidden');
    photoForm.classList.add('visually-hidden');
    quoteForm.classList.add('visually-hidden');
    linkForm.classList.add('visually-hidden');
  });
  textButton.addEventListener('click', function () {
    textForm.classList.remove('visually-hidden');
    photoForm.classList.add('visually-hidden');
    videoForm.classList.add('visually-hidden');
    quoteForm.classList.add('visually-hidden');
    linkForm.classList.add('visually-hidden');
  });
  quoteButton.addEventListener('click', function () {
    textForm.classList.add('visually-hidden');
    photoForm.classList.add('visually-hidden');
    videoForm.classList.add('visually-hidden');
    quoteForm.classList.remove('visually-hidden');
    linkForm.classList.add('visually-hidden');
  });
  linkButton.addEventListener('click', function () {
    textForm.classList.add('visually-hidden');
    photoForm.classList.add('visually-hidden');
    videoForm.classList.add('visually-hidden');
    quoteForm.classList.add('visually-hidden');
    linkForm.classList.remove('visually-hidden');
  });
});
/******/ })()
;
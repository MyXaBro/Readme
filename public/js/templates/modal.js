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
/*!*****************************************!*\
  !*** ./resources/js/templates/modal.js ***!
  \*****************************************/
__webpack_require__.r(__webpack_exports__);
'use script';

(function () {
  var activeModal = document.querySelector('.modal--active');
  var modal = document.querySelector('.modal');
  var modalAdding = document.querySelector('.modal--adding');
  var addingPostSubmit = document.querySelector('.adding-post__submit');
  var scrollbarWidth = window.util.getScrollbarWidth() + 'px';
  var pageMainSection = document.querySelector('.page__main-section');
  var footerWrapper = document.querySelector('.footer__wrapper');
  var showModal = function showModal(openButton, modal) {
    var closeButton = modal.querySelector('.modal__close-button');
    var onPopupEscPress = function onPopupEscPress(evt) {
      window.util.isEscEvent(evt, closeModal);
    };
    var closeModal = function closeModal(evt) {
      modal.classList.remove('modal--active');
      activeModal = false;
      document.removeEventListener('keydown', onPopupEscPress);
      document.documentElement.style.overflowY = 'auto';
      pageMainSection.style.paddingRight = '0';
      footerWrapper.style.paddingRight = '0';
    };
    var openModal = function openModal(evt) {
      if (activeModal) {
        activeModal.classList.remove('modal--active');
      }
      modal.classList.add('modal--active');
      activeModal = modal;
      document.documentElement.style.overflowY = 'hidden';
      pageMainSection.style.paddingRight = scrollbarWidth;
      footerWrapper.style.paddingRight = scrollbarWidth;
      closeButton.focus();
      closeButton.addEventListener('click', function (evt) {
        evt.preventDefault();
        closeModal();
      });
      modal.addEventListener('click', function (evt) {
        if (evt.target === modal) {
          closeModal();
        }
      });
      document.addEventListener('keydown', onPopupEscPress);
    };
    openButton.addEventListener('click', function (evt) {
      openModal();
    });
  };

  // if (modal) {
  //   showModal(addingPostSubmit, modalAdding);
  // }
})();
/******/ })()
;
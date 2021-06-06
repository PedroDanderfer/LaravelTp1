/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/navMobile.js ***!
  \***********************************/
var d = document;
var navMobileBtn = d.getElementById('navMobileBtn');
navMobileBtn.addEventListener('click', displayMenu);

function displayMenu() {
  var navMobile = d.getElementById('navMobile');

  if (window.screen.width < 900) {
    if (navMobile.getBoundingClientRect().left < 0) {
      navMobile.style.transform = 'translateX(0)';
    } else {
      navMobile.style.transform = 'translateX(-100%)';
    }

    return navMobile.style.transition = '0.5s';
  } else {
    return false;
  }
}

var navCategoriasBtn = d.getElementById('navCategoriasBtn');
navCategoriasBtn.addEventListener('click', displayCategorias);

function displayCategorias() {
  var navCategorias = d.getElementById('navCategorias');

  if (navCategorias.getBoundingClientRect().left <= 0) {
    navCategorias.style.display = 'block';
    navCategorias.style.transform = 'translateX(0)';
  } else {
    navCategorias.style.display = 'none';
    navCategorias.style.transform = 'translateX(-100%)';
  }

  return navCategorias.style.transition = '1s';
}
/******/ })()
;
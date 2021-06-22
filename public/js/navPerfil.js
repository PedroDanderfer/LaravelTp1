/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/navPerfil.js":
/*!***********************************!*\
  !*** ./resources/js/navPerfil.js ***!
  \***********************************/
/***/ (() => {

eval("var d = document;\nvar navPerfilBtn = d.getElementById('navPerfilBtn');\nnavPerfilBtn.addEventListener('click', displayPerfilMenu);\n\nfunction displayPerfilMenu() {\n  var navPerfil = d.getElementById('navPerfilMenu');\n\n  if (window.screen.width > 900) {\n    console.log(navPerfil.getBoundingClientRect().top);\n\n    if (navPerfil.getBoundingClientRect().top < 0) {\n      navPerfil.style.transform = 'translateY(0)';\n    } else {\n      navPerfil.style.transform = 'translateY(-100vh)';\n    }\n\n    return navPerfil.style.transition = '0.5s';\n  } else {\n    return false;\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbmF2UGVyZmlsLmpzP2QwMzAiXSwibmFtZXMiOlsiZCIsImRvY3VtZW50IiwibmF2UGVyZmlsQnRuIiwiZ2V0RWxlbWVudEJ5SWQiLCJhZGRFdmVudExpc3RlbmVyIiwiZGlzcGxheVBlcmZpbE1lbnUiLCJuYXZQZXJmaWwiLCJ3aW5kb3ciLCJzY3JlZW4iLCJ3aWR0aCIsImNvbnNvbGUiLCJsb2ciLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJ0b3AiLCJzdHlsZSIsInRyYW5zZm9ybSIsInRyYW5zaXRpb24iXSwibWFwcGluZ3MiOiJBQUFBLElBQU1BLENBQUMsR0FBR0MsUUFBVjtBQUVBLElBQUlDLFlBQVksR0FBR0YsQ0FBQyxDQUFDRyxjQUFGLENBQWlCLGNBQWpCLENBQW5CO0FBRUFELFlBQVksQ0FBQ0UsZ0JBQWIsQ0FBOEIsT0FBOUIsRUFBdUNDLGlCQUF2Qzs7QUFFQSxTQUFTQSxpQkFBVCxHQUE0QjtBQUV4QixNQUFJQyxTQUFTLEdBQUdOLENBQUMsQ0FBQ0csY0FBRixDQUFpQixlQUFqQixDQUFoQjs7QUFFQSxNQUFHSSxNQUFNLENBQUNDLE1BQVAsQ0FBY0MsS0FBZCxHQUFzQixHQUF6QixFQUE2QjtBQUV6QkMsSUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVlMLFNBQVMsQ0FBQ00scUJBQVYsR0FBa0NDLEdBQTlDOztBQUVBLFFBQUdQLFNBQVMsQ0FBQ00scUJBQVYsR0FBa0NDLEdBQWxDLEdBQXdDLENBQTNDLEVBQTZDO0FBRXpDUCxNQUFBQSxTQUFTLENBQUNRLEtBQVYsQ0FBZ0JDLFNBQWhCLEdBQTRCLGVBQTVCO0FBRUgsS0FKRCxNQUlLO0FBRURULE1BQUFBLFNBQVMsQ0FBQ1EsS0FBVixDQUFnQkMsU0FBaEIsR0FBNEIsb0JBQTVCO0FBRUg7O0FBRUQsV0FBT1QsU0FBUyxDQUFDUSxLQUFWLENBQWdCRSxVQUFoQixHQUE2QixNQUFwQztBQUVILEdBaEJELE1BZ0JLO0FBRUQsV0FBTyxLQUFQO0FBRUg7QUFFSiIsInNvdXJjZXNDb250ZW50IjpbImNvbnN0IGQgPSBkb2N1bWVudDtcclxuXHJcbmxldCBuYXZQZXJmaWxCdG4gPSBkLmdldEVsZW1lbnRCeUlkKCduYXZQZXJmaWxCdG4nKTtcclxuXHJcbm5hdlBlcmZpbEJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRpc3BsYXlQZXJmaWxNZW51KTtcclxuXHJcbmZ1bmN0aW9uIGRpc3BsYXlQZXJmaWxNZW51KCl7XHJcblxyXG4gICAgbGV0IG5hdlBlcmZpbCA9IGQuZ2V0RWxlbWVudEJ5SWQoJ25hdlBlcmZpbE1lbnUnKTtcclxuXHJcbiAgICBpZih3aW5kb3cuc2NyZWVuLndpZHRoID4gOTAwKXtcclxuXHJcbiAgICAgICAgY29uc29sZS5sb2cobmF2UGVyZmlsLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcCk7XHJcbiAgICAgICAgXHJcbiAgICAgICAgaWYobmF2UGVyZmlsLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcCA8IDApe1xyXG4gICAgICAgIFxyXG4gICAgICAgICAgICBuYXZQZXJmaWwuc3R5bGUudHJhbnNmb3JtID0gJ3RyYW5zbGF0ZVkoMCknO1xyXG4gICAgXHJcbiAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICBuYXZQZXJmaWwuc3R5bGUudHJhbnNmb3JtID0gJ3RyYW5zbGF0ZVkoLTEwMHZoKSc7XHJcbiAgICBcclxuICAgICAgICB9XHJcbiAgICBcclxuICAgICAgICByZXR1cm4gbmF2UGVyZmlsLnN0eWxlLnRyYW5zaXRpb24gPSAnMC41cyc7XHJcbiAgICAgICAgXHJcbiAgICB9ZWxzZXtcclxuICAgICAgICBcclxuICAgICAgICByZXR1cm4gZmFsc2U7XHJcblxyXG4gICAgfVxyXG4gICAgXHJcbn0iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL25hdlBlcmZpbC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/navPerfil.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/navPerfil.js"]();
/******/ 	
/******/ })()
;
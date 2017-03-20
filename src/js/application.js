/* %%%%%%%%%%%%%%%%%%%% APPLICATION JS %%%%%%%%%%%%%%%%%%%% */

console.log('successful connection to JS file');


var navOpenBtn = $('#nav-mobile-open');
var mobileMenu = $('.nav-bar-right');

navOpenBtn.on('click', function () {
  console.log('clicked');
  mobileMenu.toggleClass('expose-mobile-menu');
})

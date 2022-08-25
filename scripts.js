var className = "inverted";
var scrollTrigger = 40;

//Este script permite cambiar el estilo del header al hacer scroll a la página.
//This script allows to change the header style when scrolling

window.onscroll = function() {
  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
    document.getElementsByTagName("header")[0].classList.add(className);
  } else {
    document.getElementsByTagName("header")[0].classList.remove(className);
  }
};
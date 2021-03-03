var menuBtn = document.getElementsByClassName("menu-button");
var mobileMenu = document.getElementsByClassName("mobile-menu");
var clicedkBtn = function(){
    mobileMenu[0].classList.toggle("active");
  
}
menuBtn[0].addEventListener("click",clicedkBtn);
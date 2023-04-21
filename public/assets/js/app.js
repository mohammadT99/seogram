$(document).ready(function () {
  // handle menu
  var menuOpener = document.getElementById("menuOpener");
  var menuCloser = document.getElementById("menuCloser");
  var mobileNav = document.querySelector(".menu__mobile__nav");

  $(menuOpener).click(function () {
    mobileNav.classList.remove("menu__mobile__nav__hidden");
    mobileNav.classList.add("menu__mobile__nav__visible");
  });

  $(menuCloser).click(function () {
    mobileNav.classList.remove("menu__mobile__nav__visible");
    mobileNav.classList.add("menu__mobile__nav__hidden");
  });

  // add shadow to sticky menu
  var menuTop = 30;

  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > menuTop) {
      $("#menu").addClass("menu__shadow");
    } else {
      $("#menu").removeClass("menu__shadow");
    }
  });
});

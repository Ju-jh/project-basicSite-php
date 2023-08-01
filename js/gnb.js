$(function () {
  $('.gnb > ul > li').mouseenter(function () {
    $(this).children('ul').slideDown(200);
  }); //mouseenter
  $('.gnb > ul > li').mouseleave(function () {
    $(this).children('ul').slideUp(200);
  }); //mouseenter
}); //ready

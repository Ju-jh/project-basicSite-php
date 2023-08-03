$(function () {
  var rafId;
  var isMotionStart = true;
  var fnHeaderMotion = function () {
    if (!isMotionStart) return;
    isMotionStart = false;
    rafId = requestAnimationFrame(function () {
      var scry = $(window).scrollTop();
      if (scry >= 40) {
        $('header').addClass('active');
      } else {
        $('header').removeClass('active');
      }
      isMotionStart = true;
    });
  }; //fnHeaderMotion

  fnHeaderMotion();

  $(window)
    .scroll(function () {
      fnHeaderMotion();
    })
    .resize(function () {
      fnHeaderMotion();
    });

  $('.gnb > ul > li').mouseenter(function () {
    $(this).children('ul').slideDown(200);
  }); //mouseenter
  $('.gnb > ul > li').mouseleave(function () {
    $(this).children('ul').slideUp(200);
  }); //mouseenter
}); //ready

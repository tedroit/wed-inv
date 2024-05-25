$.fn.SmoothParallax = function () {
  this.scroll( function Scroll() {
    var scroll = $(document).scrollTop().valueOf();
    var scroll_2 = scroll / 2;
    var scroll_3 = scroll / 3;
    var opacity = 1 - (scroll / 500);
    $('.hero-section').css({'height' : 'calc(100vh - ' + Math.round(scroll_2) + 'px)'});
    $('.hero-wrapper').css({'opacity' : opacity.toFixed(2)});
    $('.hero-wrapper').css({'top' : '' + Math.round(scroll_3) + 'px'});
  })
};

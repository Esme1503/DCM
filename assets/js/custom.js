$(document).ready(function(){
  _slick_create();
  $(window).smartresize(function(){
    $('.responsive').slick('unslick');
    _slick_create();
  });
  function _slick_create(){
    var width = window.innerWidth || document.body.clientWidth;
    if(width < 480){
      $('.responsive').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }
    else if(width < 1500 & width > 480){
      $('.responsive').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }
    else{
      $('.responsive').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }
    return false;
  }
});

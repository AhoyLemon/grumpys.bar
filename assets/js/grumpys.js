$('.hamburger').click(function() {
  $('header.mobile').toggleClass('active');
});


let cal = $('.calendar');
const singleSlideWidth = 820;

cal.on('init', function(){ 
  matchCalendarHeight();
});

cal.slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  adaptiveHeight: false,
  prevArrow: false,
  nextArrow: '<button type=button" class="slick-next"></button>',
  responsive: [
    { 
      breakpoint: 1150,
      settings: {
        slidesToShow: 2
      },
      breakpoint: singleSlideWidth,
      settings: {
        slidesToShow: 1,
        adaptiveHeight: true,
      }
    }
  ]
});

$('.image-carousel').slick({
  infinite: true,
  slidesToShow: 1,
  arrows: false,
  dots: true
});


function matchCalendarHeight() {

  if ($(window).width > singleSlideWidth) {
    let maxHeight;
      $('.calendar .inner').each(function() {
      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });

    $('.calendar .inner').each(function() {
      $(this).height(maxHeight);
    });
  }
}

$("a[scroll-to]").click(function() {

  let o = 0;
  if (window.innerWidth < 601) {
    o = 120;
  }

  let t = $(this).attr('scroll-to');
  $('header.mobile').removeClass('active');
  $([document.documentElement, document.body]).animate({
    scrollTop: $('a[name='+t+']').offset().top - o
  }, 350);
});
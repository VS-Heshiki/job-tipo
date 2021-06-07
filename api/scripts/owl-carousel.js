$(document).ready(function(){
$("#carousel1").owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  autoplayTimeout: 6000,
  dots: false,
  animateIn: 'fadeIn',
  animateOut: 'fadeOut'
  });
});

$(document).ready(function(){
  $("#carousel2").owlCarousel({
    items: 6,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    dots: false,
    margin: 16,
    autoWidth: true,
    center: true,
    responsive: {
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:6
      }
  }
  });
});

$(document).ready(function(){
  $("#carousel3").owlCarousel({
    items: 5,
    loop: true,
    autoplay: true,
    autoplayTimeout: 6000,
    dots: false,
    margin:10,
    autoWidth: true,
    center: true
  });
});

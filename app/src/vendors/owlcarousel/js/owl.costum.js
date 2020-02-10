$(document).ready(function(){
  $(".popularSlider").owlCarousel({
     items: 3,
        stopOnHover: true,
        loop: true,
       autoplay: true,
        margin:10,
        pagination: false,
         responsiveClass: true,
        navigation: true,
        responsive: {
    0: {
      items: 1,
      nav: false
    },
    1024: {
      items: 3
    }
  },
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
  });
$(".testi1").owlCarousel({
  loop: true,
  margin: 30,
  nav: false,
  dots: true,
  autoplay: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      nav: false
    },
    1024: {
      items: 2
    }
  }
});
});
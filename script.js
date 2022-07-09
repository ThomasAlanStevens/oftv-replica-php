// Materialize Initialization 
$(document).ready(function(){
    $('#carousel').carousel({
        numVisible: 3,
        duration: 100,
    });
});
setInterval(function(){
    $('.carousel').carousel('next');
}, 100000)

$('.next').click(function(){
    $('.carousel').carousel('next')
})

$('.prev').click(function(){
    $('.carousel').carousel('prev')
})

// Swiper Initialization
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 0,
        },
      },
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


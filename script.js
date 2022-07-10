// Materialize Initialization 
$(document).ready(function(){
    $('#carousel').carousel({
        numVisible: 3,
        duration: 100,
        padding: 300,
        dist:-100,
        shift: -100,
    });
});
setInterval(function(){
    $('.carousel').carousel('next');
}, 10000)

$('.next').click(function(){
    $('.carousel').carousel('next')
})

$('.prev').click(function(){
    $('.carousel').carousel('prev')
})

// Swiper Initialization
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 6,
    slidesPerGroup: 1,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1400: {
            slidesPerView: 5,
        },
        700: {
            slidesPerView: 3,
        },
        400: {
            slidesPerView: 1,
        },
    }
  });

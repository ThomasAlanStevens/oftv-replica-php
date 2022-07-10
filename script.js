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
var swiper1 = new Swiper(".mySwiper", {
    spaceBetween: 6,
    slidesPerGroup: 1,
    loop: true,
    navigation: {
      nextEl: ".next1",
      prevEl: ".prev1",
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

  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 6,
    slidesPerGroup: 1,
    loop: true,
    navigation: {
      nextEl: ".next2",
      prevEl: ".prev2",
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

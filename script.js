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
    slidesPerView: 5,
    spaceBetween: 6,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


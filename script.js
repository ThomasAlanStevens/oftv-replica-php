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
}, 1000000)

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

//   Dark mode button
document.querySelector('.fa-circle-half-stroke').addEventListener('click', darkMode)

function darkMode(){
    document.querySelector('#search').classList.toggle("dark-mode") 
    document.querySelector('body').classList.toggle("dark-mode");
    document.querySelector('nav').classList.toggle("dark-mode");
    document.querySelector('.fade-left').classList.toggle("dark-mode");
    document.querySelectorAll('.fade-left-minor').forEach(fade => fade.classList.toggle("dark-mode"))
    document.querySelector('.fade-right').classList.toggle("dark-mode");
    document.querySelectorAll('.fade-right-minor').forEach(fade => fade.classList.toggle("dark-mode"))
    document.querySelectorAll('.swiper-slide').forEach(slide => slide.classList.toggle("dark-mode"))
    document.querySelectorAll('button').forEach(button => button.classList.toggle("dark-mode"))
    document.querySelectorAll('a').forEach(a => a.classList.toggle("dark-mode"))
    document.querySelector('header').classList.toggle("dark-mode");
}

// Autoplay muted video on mouse hover using youtube api
document.querySelectorAll('iframe').forEach(iframe => iframe.addEventListener('mouseenter', playVideo))

function playVideo(){
    console.log(this)
    this.src = this.src.replace('&autoplay=0', '&autoplay=1')
    
}

document.querySelectorAll('iframe').forEach(iframe => iframe.addEventListener('mouseleave', stopVideo))

function stopVideo(){
    this.src = this.src.replace('&autoplay=1', '&autoplay=0')
}

// Mutes all videos on played during hover
var tag = document.createElement('script');

tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('vid1', {
        events: {
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    player.mute();
}

// Hides info on hover during play



